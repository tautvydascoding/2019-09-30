<h1>Email siuntimas</h1>
<?php
print_r($_POST);
$klientoVardas = $_POST['vardas'];
$klientoKlausimas = $_POST['klausimas'];
$klientoEmail = $_POST['el_pastas'];
$klientoKlausimoSritis = $_POST['tema'];

//sumazinti sauguma






// Load Composer's autoloader
require 'libs/PHPMailer-master/PHPMailerAutoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
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
    $mail->SMTPDebug = 3;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP

    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'testascoding@gmail.com';          //iveskite dezutes is kurios rasoma el.pasto adresa
    $mail->Password = 'slaptazodis';                    //nenaudoti tikro slaptazodzio, bet reikia tikro slapt, to adreso, kuris uzrasytas auksciau

    //Recipients
    $mail->setFrom('prezidentas@gmail.com', 'Prezidentas');
    $mail->addAddress('testascoding@gmail.com', 'Kurejai');     // Add a recipient
        $mail->addReplyTo($klientoEmail, $klientoVardas);


    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $klientoKlausimoSritis;
    $mail->Body    = $klientoKlausimas;
    $mail->AltBody = $klientoKlausimas;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
//nusikopijavome parametrus ishttps://github.com/PHPMailer/PHPMailer
