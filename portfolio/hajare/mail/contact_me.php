<!-- 
require 'config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $message = $_POST["message"];

    $mail = new PHPMailer();

    try {
        $mail->isSMTP();
        $mail->Host       = EMAIL_HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = EMAIL_USERNAME;
        $mail->Password   = EMAIL_PASSWORD;
        $mail->SMTPSecure = EMAIL_SMTP_SECURE;
        $mail->Port       = EMAIL_PORT;

        $mail->setFrom($email, $nom);
        $mail->addAddress(RECIPIENT_EMAIL);
        $mail->isHTML(true);
        $mail->Subject = 'Nouveau message de contact depuis votre portfolio';
        $mail->Body    = $message;

        $mail->send();
        echo 'success'; // Ou tout autre message de réussite que vous voulez retourner au JavaScript
    } catch (Exception $e) {
        echo "Erreur lors de l'envoi du message : {$mail->ErrorInfo}";
    }
}
?> -->
