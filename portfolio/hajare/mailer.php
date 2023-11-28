<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$message = $_POST['message'];
$sujet = $_POST['sujet'];

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'hajare.elharim@gmail.com';                     //SMTP username
    $mail->Password   = 'jcyh kgeb eoak ndhh';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email, $nom );
    $mail->addAddress("hajare.elharim@gmail.com" );     //Add a recipient
 

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $sujet;
    $mail->Body    = 'Email : '.$email.'<br>'.'Nom : '.$nom.'<br>'.'Prenom : '.$prenom.'<br>'.'Message : '.$message.'<br>'.'Tel : '.$telephone;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    echo 'Votre message a été envoyé avec succès !';
    header("Location: index.php");
} catch (Exception $e) {
    echo "Votre message ne s'est pas envoyé. Erreur de messagerie: {$mail->ErrorInfo}";
}