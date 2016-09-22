<?php 
require "sendgridClass.php";
$send_email = new send_email("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");
$html = "<h1>Hello wakeel</h1>";
$subject = "ZZUM Invoice";
$from = "admin@zzum.co.uk";
$senderEmail="wakeel@appliconic.com";
$response_email = $send_email->sendEmail($senderEmail,$html,$subject,$from);
echo "<pre>"; print_r($response_email);
/*email recipt end */




?>