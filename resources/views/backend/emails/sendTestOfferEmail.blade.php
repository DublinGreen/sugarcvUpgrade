<?php 
	$view = view('backend.emails.template.offer_template');
	$view = str_replace("{{EMAIL_OFFER_TAG_LINE}}", $offer_email_content, $view);
	echo str_replace("{{RESCHEDULE_EMAIL_OFFER_LINE}}",'',$view);
?>
