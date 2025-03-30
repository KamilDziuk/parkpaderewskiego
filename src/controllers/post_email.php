<?php



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" )
{
    $firstName = $_POST['firstName'];
$message = $_POST['message'];
$number = $_POST['number'];
$email = $_POST['email'];

$mail = new PHPMailer(true);
try {
        
$mail->isSMTP();
$mail->Host = '';
$mail->SMTPAuth = true;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port = 465;
$mail->Username = '';
$mail->Password = '';  
 
$mail->setFrom('');
$mail->addAddress(''); 
// $mail->addCC('');
$mail->CharSet = 'UTF-8';
$mail->Encoding = 'base64';
$mail->isHTML(true);
$mail->Subject = htmlspecialchars('strona www - zapytanie od '. $firstName , ENT_QUOTES, 'UTF-8');
$mail->Body = nl2br(htmlspecialchars( "
      
Imię: $firstName
E-mail: $email  
Telefon: $number
Wiadomość od klienta: $message
Zgody:

Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu i zakresie koniecznym do realizacji zgłoszenia.

Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu przesyłania mi ofert handlowych na produkty własne spółki drogą elektroniczną.

Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu kontaktu telefonicznego ze strony przedstawicieli spółki w sprawach związanych z ofertą handlową na produkty własne.", ENT_QUOTES, 'UTF-8'));
   
$mail->send();

} catch (Exception $e) {   
    echo "<br>". $e -> getMessage()."<br>";   
}
}

?>


