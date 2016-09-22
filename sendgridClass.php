<?php 
require 'sendgridsdk/vendor/autoload.php';
class send_email
{
   private $apiKey="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";
  
  
  function __construct($apiKey)
  {
    $this->sendgrid = new SendGrid($apiKey);
  }
  
  public function sendEmail($reciever_email,$message,$subject,$from)
  {
    $from = new SendGrid\Email(null, $from);

    $to = new SendGrid\Email(null, $reciever_email);
    $content = new SendGrid\Content("text/html", $message);
    $mail = new SendGrid\Mail($from, $subject, $to, $content);
    $apiKey = getenv($this->apiKey);
    $response =$this->sendgrid->client->mail()->send()->post($mail);
	return $response;

  }
} 

?>
