<h1>Email siuntimas</h1>


<h6>Klausimo duomenys</h6>

<?php 

print_r($_POST);

$klientoTema=$_POST['tema'];
$klientoKlausimas=$_POST['klausimas'];
$klientoEmail=$_POST['email'];
$klientoVardas=$_POST['name'];



    //https://myaccount.google.com/lesssecureapps (susimazinti savo email'o sauguma, kad kiti kompai galetu jungtis)


 

 
    
    
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
    $mail->Username = 'testascoding@gmail.com';                 // gmail username
    $mail->Password = 'slaptazodis';                            //gmail password

    




    //Recipients
    $mail->setFrom('testascoding@gmail.com', 'Puslapiu kurejai');
    $mail->addAddress('testascoding@gmail.com', 'Puslapiu kurejai');     // Add a recipient

    $mail->addReplyTo($klientoEmail, $klientoVardas);

      // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $klientoTema;
    $mail->Body    = $klientoKlausimas;
    $mail->AltBody = $klientoKlausimas;

    $mail->send();
    echo 'WOOP WOOP, laiskas issiustas sekmingai!';
} catch (Exception $e) {
    echo "<h3 class='bg-danger'>Oooops nepavyko issiusti laisko </h3> </br>. Mailer Error: {$mail->ErrorInfo}";
}