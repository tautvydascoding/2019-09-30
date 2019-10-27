<?php
session_start();
require_once('config/connectToDB.php');
include('model/users.php');

$user_name = $_POST['userName'];
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$lname = $_POST['lname'];

//echo $userName." ".$password." ".$email." ".$name." ".$lname;//test
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
    array_push($registerErrors, "User with this email already exist.");
    $printRegisterErrors = implode("<br/>", $registerErrors);
    header("Location: page_registration.php?registerErrors= $printRegisterErrors");
    }

// patikrinam sukurta nauja vartotoja, ir priloginam

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

