<?php

use PHPMailer\PHPMailer\PHPMailer;

  require_once('vendor/autoload.php');
  require_once('config/db.php');
  require_once('lib/pdo_db.php');
  require_once('models/Contact.php');
  require_once('PHPMailer/PHPMailer.php');
  require_once('PHPMailer/SMTP.php');
  require_once('PHPMailer/Exception.php');

  

 // Sanitize POST Array
 $POST = filter_var_array($_POST, FILTER_UNSAFE_RAW);

 $name = $POST['name'];
 $email = $POST['email'];
 $phone = $POST['phone'];
 $subject = $POST['subject'];
 $message = $POST['message'];


// Contact Data
$contactData = [
  'name' => $name,
  'email' => $email,
  'phone' => $phone,
  'subject' => $subject,
  'message' => $message,

];

// Instantiate Customer
$contact = new Contact();

// Add Contact To DB
$contact->addContact($contactData);


$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "Your Smtp email";
$mail->Password = "Your email password";
$mail->Port = 465;
$mail->SMTPSecure = "ssl";

$fromEmail = "From Email";
$fromName = "From Name";

$mail->isHTML(true);
$mail->setFrom($fromEmail, $fromName);
$mail->addAddress($email);
$mail->Subject = $subject;
$body = "Contact Form Data: <br>";
$body .= "Name: " . $name . "<br>";
$body .= "Email: " . $email . "<br>";
$body .= "Phone: " . $phone . "<br>";
$body .= "Message: " . $message . "<br>";
$mail->Body = $body;

if($mail->send()) {
  header('Location: index.php?status=success');
  return;
}
else {
  header('Location: index.php?status=fail');
  return;
}
// Redirect to success
header('Location: index.php');

?>

