<?php
session_start();
require_once('config/connectToDB.php');
include('model/users.php');

print_r ($_POST);
    $user_name =  htmlspecialchars(trim($_POST['userName']), ENT_QUOTES);
    $email = htmlspecialchars(trim($_POST['email']), ENT_QUOTES); 
    $password = htmlspecialchars(trim($_POST['password']), ENT_QUOTES);
    $repeatPassword = htmlspecialchars(trim($_POST['passRepeat']), ENT_QUOTES);
    $name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES);
    $lname =htmlspecialchars(trim($_POST['lname']), ENT_QUOTES); 

$registerErrors = [];

//echo  $user_name." ".$email." ".$password." ".$repeatPassword;

//Patikriname ar vartotojas teisingai ivede du kartus slaptazodi

if ($password != $repeatPassword ) {
    array_push($registerErrors, "Passwords do not match. Please check entered passwords.");
    $printRegisterErrors = implode("<br/>", $registerErrors);
    header("Location: page_registration.php?registerErrors= $printRegisterErrors");
}


$cryptedEmail = htmlspecialchars(trim($email), ENT_QUOTES);
$mySQL_string = "SELECT * FROM users 
                          WHERE email = '$cryptedEmail'";
$resultObject = mysqli_query(getConnect(), $mySQL_string);
$userArray = mysqli_fetch_assoc($resultObject);

//Patikriname ar vartotojas su siuo email neegzistuoja (kiekvienas vartotojas turi tureti unikalu email'a)

if (!$userArray) {
   createUser ($user_name, $email, $password, $name, $lname); 
} else {
    $registerErrors = [];
    array_push($registerErrors, "User with this email already exist");
    $printRegisterErrors = implode("<br/>", $registerErrors);
    header("Location: page_registration.php?registerErrors= $printRegisterErrors");
    }


//----------Kuriu laisko automatini issiuntima

// email turinys
$message = "Welcome," . $name . ", to challenge yourself website. <br> 
Thank you for joining us.<br>
Your user details:
<br>User Name:".  $user_name.
"<br>E-mail: " . $email.
"<br> If any problem accures, please contact us";



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
    $mail->Username = 'challngeYourself@gmail.com';                 // gmail username
    $mail->Password = 'challengeMailer1';                            //gmail password

    




    //Recipients
    $mail->setFrom('challngeYourself@gmail.com', 'Challenge Yourself');
    $mail->addAddress($email, $user_name);     // Add a recipient

    //$mail->addReplyTo($email, $user_name);

      // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Successful Registration to Challenge Yourself website";
    $mail->Body    = $message;
    $mail->AltBody = $message;

    $mail->send();
    echo 'WOOP WOOP, laiskas issiustas sekmingai!';
} catch (Exception $e) {
    echo "<h3 class='bg-danger'>Oooops nepavyko issiusti laisko </h3> </br>. Mailer Error: {$mail->ErrorInfo}";
}

// ---------------priloginam-----------

$mySQL_string = "SELECT * FROM users 
WHERE email = '$cryptedEmail'";

$resultObject = mysqli_query(getConnect(), $mySQL_string);

$userArray = mysqli_fetch_assoc($resultObject);

$hashed_password = $userArray['password'];

if(password_verify($password, $hashed_password)) { 
      $_SESSION['user_id'] = $userArray['id'];
      $_SESSION['user_name'] = $userArray['user_name'];
      header("Location: page_user.php");
        } else {
            $registerErrors = [];
            array_push($registerErrors, "Error. Could not complete registration.");
            $printRegisterErrors = implode("<br/>", $registerErrors);
            header("Location: page_registration.php?registerErrors= $printRegisterErrors");
            }

