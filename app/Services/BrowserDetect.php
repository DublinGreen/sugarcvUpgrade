<?php

namespace App\Services;

class BrowserDetect {

    public static function detect() {
		$iPhoneBrowser  = stripos($_SERVER['HTTP_USER_AGENT'], "iPhone");
		$iPadBrowser    = stripos($_SERVER['HTTP_USER_AGENT'], "iPad");
		$AndroidBrowser = stripos($_SERVER['HTTP_USER_AGENT'], "Android");
		$AndroidApp = (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == "com.affinityy") ? true : false ;
		$iOSApp = (strpos($_SERVER['HTTP_USER_AGENT'], 'AppleWebKit/') !== false) && (strpos($_SERVER['HTTP_USER_AGENT'], 'Safari/') == false);

		if(isset($_GET['source']) && $_GET['source'] == 'ios_app') {
			return "IOS APP";
		}
		else if(isset($_GET['store']) && ($_GET['source'] == 'extension' || $_GET['source'] == 'Extension')) {
			return "Extension";
		}
		else if ($AndroidApp) {
			return "Android APP";
		}
		else if ($AndroidBrowser) {
			return "Mobile";
		}
		else if($iPhoneBrowser || $iPadBrowser) {
			return "Mobile";
		}
		else if ($iOSApp) {
			return "IOS APP";
		}
		else {
			return "Web";
		}
    }
}
