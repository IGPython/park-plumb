<?php
date_default_timezone_set('GMT');
	if(isset($_POST['submit'])){
		foreach($_POST as $key=>$value){
			$$key = $value;
		}
		$to      = "matt@parkplumb.co.uk";
		$subject = 'Please Contact me RE: Website Enquiry';
		$message = "Message from ".$name . "\r\n Telephone: \r\n" . $tel . "\r\n Comment:\r\n" . $comment;
		$headers = 'From: matt@parkplumb.co.uk' . "\r\n" . 'Bcc: rhyspark@me.com' . "\r\n" .
		'Reply-To:'.$email."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		mail($to, $subject, $message, $headers);
		echo "success";
	}
?>