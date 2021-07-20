<?php 

$to_email = "mansi.anantpurkar@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: 1.manasi.sem5@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'path/to/PHPMailer/src/Exception.php';
// require 'path/to/PHPMailer/src/PHPMailer.php';
// require 'path/to/PHPMailer/src/SMTP.php';

// $mail = new PHPMailer();
// $mail->IsSMTP();
// $mail->Mailer = "smtp";

// $mail->SMTPDebug  = 1;  
// $mail->SMTPAuth   = TRUE;
// $mail->SMTPSecure = "tls";
// $mail->Port       = 587;
// $mail->Host       = "smtp.gmail.com";
// $mail->Username   = "1.manasi.sem5@gmail.com";
// $mail->Password   = "Times@123";

// $mail->IsHTML(true);
// $mail->AddAddress("manasi@fieldsdata.org", "recipient-name");
// $mail->SetFrom("1.manasi.sem5@gmail.com", "from-name");
// $mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
// $content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";

// $mail->MsgHTML($content); 
// if(!$mail->Send()) {
//   echo "Error while sending Email.";
//   var_dump($mail);
// } else {
//   echo "Email sent successfully";
// }

//if(isset($_POST['submit'])){
//    $to = "manasi@fieldsdata.org"; // this is your Email address
//   $from = $_POST['email']; // this is the sender's Email address
//    $first_name = $_POST['first_name'];
//     $last_name = $_POST['last_name'];
//     $subject = "Form submission";
//     $subject2 = "Copy of your form submission";
//     $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
//     $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

//     $headers = "From:" . $from;
//     $headers2 = "From:" . $to;
//     mail($to,$subject,$message,$headers);
//     mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
//     echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
//     // You can also use header('Location: thank_you.php'); to redirect to another page.
//     // You cannot use header and echo together. It's one or the other.
//     }
// ?>