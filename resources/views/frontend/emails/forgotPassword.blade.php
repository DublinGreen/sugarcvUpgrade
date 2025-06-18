<img src="http://test.vastedge.com/wp-content/uploads/2017/09/email_logo.png" style="width:150px;margin-bottom:30px;"><br>
Dear {{ $userData->first_name }} {{ $userData->last_name }}
<br><br>Forgot your Password? Click on the link below to recover the password for your Affinity account.<br><br>
<a href="{{ route('resetPassword', ['user'=>$userData->id, 'code' => $code]) }}"><u>{{ route('resetPassword', ['user'=>$userData->id, 'code' => $code]) }}</u></a>
<br><br>For any queries or assistance, please contact us at info@cashdirectclub.com. <br>We’re happy to hear from you.<br><br>Thank you and have a great day! <br>The CashDirectClub Team<br>CashDirectClub.com
