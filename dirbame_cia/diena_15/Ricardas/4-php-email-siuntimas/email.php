<?php 
print_r($_POST);
$klientoEmailas = $_POST['mailas'];
$klientoKlausimoTema = $_POST['tema'];
$klientoVardas = $_POST['vardas'];
$klientoKlausimas = $_POST['klausimas'];


//===========================================================================

// Load Composer's autoloader
require 'libs/PHPMailer-master/PHPMailerAutoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {


$mail->SMTPOptions = array(
    'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
    )
);
$mail->Host = 'tls://smtp.gmail.com:587'; 
$mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                      // TCP port to connect to


//Server settings
$mail->SMTPDebug = 1;                                 // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP

$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'testascoding@gmail.com';                 // SMTP username
$emai->Password = 'slaptazodis';

                            // TCP port to connect to

//Recipients
$mail->setFrom('prezidentas@gmail.com', 'Prezidentas');
$mail->addAddress('testascoding@gmail.com', 'puslapiu kurejai');     // Add a recipient
$mail->addReplyTo($klientoEmailas, $klientoVardas);


// Content
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = "$klientoKlausimoTema";
$mail->Body    = "$klientoKlausimas";
$mail->AltBody = "$klientoKlausimas";

$mail->send();
echo 'Message has been sent';
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
