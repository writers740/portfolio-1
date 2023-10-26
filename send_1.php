<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "phpmailer/src/Exception.php";
require "phpmailer/src/PHPMailer.php";
require "phpmailer/src/SMTP.php";

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = "evanson1053@gmail.com";
    $mail->Password = "bkflenvoufpwgotn";
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    $mail->SMTPDebug = 0;

    $mail->setFrom($_POST["email"], "evans", true);
    
    $mail->addAddress("evanson1053@gmail.com");
    
    $mail->isHTML(true);
    
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    $mail->Subject = $_POST["subject"];
    $mail->Body = " i am {$firstname} {$lastname}<br> my email is:{$email}<br> my phone number is :{$phone}<br> {$message}";

    try {
        $mail->send();
        echo "
        <script>
        
        alert('Message sent successfully');
        document.location.href = 'index.html';
        </script>";
    } catch (Exception $e) {
        echo "
        <script>
        document.querySelector('#message').textContent = 'your message have been successfully sent'
        alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
        </script>";
    }
}
?>
