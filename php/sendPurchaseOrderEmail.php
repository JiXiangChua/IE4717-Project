<?php
/* Temporary open a web socket for sending emails using fakeSMTP-2.0.jar */
require "/Applications/XAMPP/xamppfiles/htdocs/mail_patch.php";
use function mail_patch\mail;

$to = $email == "" ? "f32ee@localhost" : $email;
$subject = "Successful booking confirmation with Cineverse: Transaction Number " . $orderid;
$message = "hello from php mail"; 
$headers = 'From: admin@cineverse.com' . "\r\n" . 'Reply-To: admin@cineverse.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers, '-fadmin@cineverse.com');

echo ("<script>console.log('mail sent to : $to')</script>");

?>