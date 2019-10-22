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
    // papildomi PhpMailer nustatymia, jeigu neveikia su standartiniais
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
    $mail->Username = '????????@gmail.com';                 // gmail username
    $mail->Password = '???????';                            //gmail password

    




    //Recipients
    $mail->setFrom('?????????????@gmail.com', 'Puslapiu kurejai');
    $mail->addAddress('?????????????@gmail.com', 'Puslapiu kurejai');     // Add a recipient

    $mail->addReplyTo($klientoEmailas, $klientoVardas);

        // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $klientoKlausimoTema;
    $mail->Body    = $klientoKlausimoTema;
    $mail->AltBody = $klientoKlausimoTema;

    $mail->send();
    echo 'WOOP WOOP, laiskas issiustas sekmingai!';
} catch (Exception $e) {
    echo "<h3 class='bg-danger'>Oooops nepavyko issiusti laisko </h3> </br>. Mailer Error: {$mail->ErrorInfo}";
}