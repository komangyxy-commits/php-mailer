<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = $_ENV['username'];                  
    $mail->Password   = $_ENV['password'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;           
    $mail->Port       = 587;                                  

    $mail->setFrom('komangrizky336@gmail.com', 'Admin');
    $mail->addAddress($email, $nama);  
    $mail->addReplyTo('no-reply@example.com', 'Information');

    $mail->isHTML(true);                                  
    $mail->Subject = 'Pendaftaran Seminar';
    $mail->Body    = '<h2>Pendaftaran Berhasil</h2>
        <p>Halo <b>' . $nama . '</b></p>
        <p>Terima kasih telah mendaftar seminar.</p>
        <p>Data Anda telah kami terima.</p>
        <hr>
        <p>
            Nama : ' . $nama . ' <br>
            Email : ' . $email . ' <br>
            Asal : ' . $asal . ' <br>
        </p>';
   
    $mail->send();
    echo 'Email Terkirim';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}