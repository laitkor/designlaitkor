<?php

    $email_subject = "Contact Us - Laitkor Design";
        
    $name = $_POST['name']; 
    $mailFrom = $_POST['emailFrom']; 
    //$contact = $_POST['contact'];
    $message = $_POST['message']; 
    $mailTo = 'Yasser.Sheikh@laitkor.com'; 
    $email_message = "Hi,\n\nEnquiry from Contact Us - Laitkor Design.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($name)."\n\n";
    $email_message .= "Email: ".clean_string($mailFrom)."\n\n";
    $email_message .= "Message: ".clean_string($message)."\n\n";
     

$headers = 'From: Support <support@laitkordesign>' . "\r\n" . 'Reply-To: ' . $mailFrom."\r\n".
'X-Mailer: PHP/' . phpversion();
				
if(mail($mailTo, $email_subject, $email_message, $headers))
{
	echo 'sent';
}
else
{
	echo 'not_sent_msg';
}

//echo $mail_sent;

?>
