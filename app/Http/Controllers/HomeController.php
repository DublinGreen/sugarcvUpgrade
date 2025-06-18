<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

use App\Classes\Smalot\PdfParser\Document;
use App\Classes\Smalot\PdfParser\Font;
use App\Classes\Smalot\PdfParser\Header;
use App\Classes\Smalot\PdfParser\PDFObject;
use App\Classes\Smalot\PdfParser\Parser;
use App\Models\ResumeBasicDetail;
use App\Models\Extrasection;
use Session;


class HomeController extends Controller
{
	public function index(Request $request) {
		try{
			if($request->hasFile('file')) {
				$arr = [];
				$dir = public_path('images/presentResume/');
				$extension = $request->file('file')->getClientOriginalExtension();
				$file = uniqid() . '_' . time() . '.' . $extension;
				$request->file('file')->move($dir, $file);

				$fileUrl = $dir.$file;

				$arr = explode(".",$file);
				if( $arr[1] == 'docx' || $arr[1] == 'doc'){
					$arrValues = [];
					$arrValues = $this->read_docx($fileUrl);
 //dd($arrValues["skin_id"]);
					// print_r($arrValues);
					// die();
					$resume = [];
					$skin_id = $arrValues['skin_id'];
					$resume = ResumeBasicDetail::find($arrValues['resume_id']);

					return view('frontend.pages.resume',["resume" => $resume,"skin_id" => $skin_id]);

				}else if( $arr[1] == 'pdf'){

					$parser = new Parser();
					// echo "reached here";

					$pdf    = $parser->parseFile($fileUrl);
					$pages  = $pdf->getPages();

					$email 	=	"";
					$name 	= 	"";

					foreach ($pages as $page) {
						$text = $page->getText();
						$textArray = explode("\n", $text);
						foreach($textArray as $key => $value) {
							$newValue = trim($value);
							if($newValue == "") {
								unset($textArray[$key]);
								continue;
							}
							$textArray[$key] = $newValue;
							if($email == "") {
								$emailValue = $this->fetch_mails($newValue);
								if(isset($emailValue[0])) {
									$email = $emailValue[0];
								}
							}

						}
						$textArray = array_values($textArray);
						// echo "<pre>";
						// print_r($textArray);
						// echo "</pre>";

						$email = $this->fetch_mails($text);
						$email = !empty($email[0]) ? $email[0] : "";
						// echo $email;
						$phone = $this->fetch_phones($text);
						// print_r($phone);
						// die();
						$phone = !empty($phone[0]) ? $phone[0] : "";
						$name = $textArray[0];
						$names = explode(' ', $name);
						$firstName = !empty($names[0])? $names[0] :'';
						$lastName = !empty($names[1])? $names[1] :'';

						$entryExist = ResumeBasicDetail::where('email', $email)->get();

						if(count($entryExist)){
							$insert = [
								'first_name' => $firstName,
								'last_name' => $lastName,
								'phone' => $phone
							];

							ResumeBasicDetail::where('email', $email)->update($insert);

							$newArray = array_slice($textArray, 4, count($textArray));
							$dataString = implode(';', $newArray);

							$resume_id = $entryExist->first()->id;


							Extrasection::where('resume_id', $resume_id)->update([
								'resume_id' => $resume_id,
								'title' => 'Uploaded Resume Extra Data',
								'content' => $dataString,
								'isResumeUpload' => '1'
							]);


						}else {

							$insert = [
								'first_name' => $firstName,
								'last_name' => $lastName,
								'phone' => $phone,
								'email' => $email
							];

							if (\Sentinel::check()){
								$user = \Sentinel::getUser();
								$insert["user_id"] = $user->id;
							}

							$resume_id = \DB::table('resume_basic_detail')->insertGetId($insert);


							$newArray = array_slice($textArray, 4, count($textArray));
							$dataString = implode(';', $newArray);

							Extrasection::insert([
								'resume_id' => $resume_id,
								'title' => 'Uploaded Resume Extra Data',
								'content' => $dataString,
								'isResumeUpload' => '1'
							]);
						}
						if(Session::has('skin')){
							$skin_id = Session::get('skin');
						}
						$resume = [];
						$resume = ResumeBasicDetail::find($resume_id);
				//		dd($resume);
						return view('frontend.pages.resume',["resume" => $resume,"skin_id" => $skin_id]);
					}
				} else {
					if(Session::has('skin')){
						$skin_id = Session::get('skin');
					}

					return redirect()->route('select-skin', ["id" => $skin_id])->with('message-danger', 'File Format not supported');
				}
			}
		} catch(\Exception $e){
			dd($e);
            if(Session::has('skin')){
				$skin_id = Session::get('skin');
			}
			return redirect()->route('select-skin', ["id" => $skin_id])->with('message-danger', 'Resume Format not supported');
		}
	}

	public function fetch_mails($text){
		$str = '/([a-z0-9_\.\-])+\@(([a-z0-9\-])+\.)+([a-z0-9]{2,4})+/i';
		preg_match_all($str, $text, $out);
		return isset($out[0]) ? $out[0] : array();
	}
	public function fetch_phones($text){
		$str = '/\+(?:[0-9] ?){6,14}[0-9]+/i';
		// $str = '/((?:\+|00)[17](?: |\-)?|(?:\+|00)[1-9]\d{0,2}(?: |\-)?|(?:\+|00)1\-\d{3}(?: |\-)?)?(0\d|\([0-9]{3}\)|[1-9]{0,3})(?:((?: |\-)[0-9]{2}){4}|((?:[0-9]{2}){4})|((?: |\-)[0-9]{3}(?: |\-)[0-9]{4})|([0-9]{7}))/m';

		// preg_match_all($re, $text, $out, PREG_SET_ORDER, 0);
		preg_match_all($str, $text, $out);
		return isset($out[0]) ? $out[0] : array();
	}
	public function kv_read_word($input_file){
		$kv_strip_texts = '';
		$kv_texts = '';
		if(!$input_file || !file_exists($input_file)) return false;

		$zip = zip_open($input_file);

		if (!$zip || is_numeric($zip)) return false;


		while ($zip_entry = zip_read($zip)) {

			if (zip_entry_open($zip, $zip_entry) == FALSE) continue;

			if (zip_entry_name($zip_entry) != "word/document.xml") continue;

			$kv_texts .= zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));

			zip_entry_close($zip_entry);
		}

		zip_close($zip);


		$kv_texts = str_replace('</w:r></w:p></w:tc><w:tc>', " ", $kv_texts);
		$kv_texts = str_replace('</w:r></w:p>', "\r\n", $kv_texts);
		$kv_strip_texts = nl2br(strip_tags($kv_texts,''));

		return $kv_strip_texts;
	}
	function read_docx($fileUrl) {
		try{
		$kv_texts = $this->kv_read_word($fileUrl);
		if($kv_texts !== false) {
			// echo nl2br($kv_texts);

			$arrData = explode("\n", $kv_texts );
			// print_r($arrData);
			$email = $this->fetch_mails($kv_texts);
			$email = $email[0];

			$phone = $this->fetch_phones($kv_texts);
			if(isset($phone[0])){
			$phones = $phone[0] ? $phone[0] : "";}else{
				$phones="";
			}
			$name = $arrData[1];
			$names = explode(' ', $name);
			$firstName = $names[0];
			$lastName = $names[1];

			$entryExist = ResumeBasicDetail::where('email', $email)->get();

			if(count($entryExist)){
				$insert = [
					'first_name' => strip_tags($firstName),
					'last_name' => strip_tags($lastName),
					'phone' => $phones
				];

				ResumeBasicDetail::where('email', $email)->update($insert);

				$newArray = array_slice($arrData, 5, count($arrData));
				$dataString = implode(';', $newArray);
				$dataString = preg_replace( "<br />", "", $dataString );
				$dataString = strip_tags( $dataString );


				$resume_id = $entryExist->first()->id;


				Extrasection::where('resume_id', $resume_id)->update([
					'resume_id' => $resume_id,
					'title' => 'Uploaded Resume Extra Data',
					'content' => $dataString,
					'isResumeUpload' => '1'
				]);


			}else {

				$insert = [
					'first_name' => strip_tags($firstName),
					'last_name' => strip_tags($lastName),
					'phone' => $phones,
					'email' => $email
				];

				if (\Sentinel::check()){
					$user = \Sentinel::getUser();
					$insert["user_id"] = $user->id;
				}

				$resume_id = \DB::table('resume_basic_detail')->insertGetId($insert);


				$newArray = array_slice($arrData, 5, count($arrData));
				$dataString = implode(';', $newArray);
				$dataString = preg_replace( "<br />", "", $dataString );
				$dataString = strip_tags( $dataString );

				Extrasection::insert([
					'resume_id' => $resume_id,
					'title' => 'Uploaded Resume Extra Data',
					'content' => $dataString,
					'isResumeUpload' => '1'
				]);
			}


			if(Session::has('skin')){
				$skin_id = Session::get('skin');
			}

			$returnArr = [];
			$returnArr['skin_id'] = $skin_id;
			$returnArr['resume_id'] = $resume_id;
		//	dd($returnArr);
//dd(ResumeBasicDetail::find($resume_id));
			return $returnArr;

		}
		else {
			echo "Can't Read that file.";
		}
	} catch(\Exception $e){
	//	dd($e);
		 if(Session::has('skin')){
			$skin_id = Session::get('skin');
		}
		return redirect()->route('select-skin', ["id" => $skin_id])->with('message-danger', 'Resume Format not supported');
	}
	}

}
