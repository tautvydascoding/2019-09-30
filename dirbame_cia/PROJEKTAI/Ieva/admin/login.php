<?php
session_start();
require_once('../config/connectToDB.php');
$password = $_POST['password'];
$email = $_POST['email'];

//echo $password." ".$email;//test

//i DB uzkoduotas email lyginimui
$cryptedEmail = htmlspecialchars(trim($email), ENT_QUOTES);

// echo $cryptedEmail;//test

// pasirenkam pagal email reikiama user'i
$mySQL_string = "SELECT * FROM users 
                          WHERE email = '$cryptedEmail'";

$resultObject = mysqli_query(getConnect(), $mySQL_string);

$userArray = mysqli_fetch_assoc($resultObject);

//print_r($userArray); //test

//user'io uzkduotas slaptazodis is DB
$hashed_password = $userArray['password'];
$rightsAdmin = $userArray['rights'];
//print_r($userArray['rights']);
// print_r($hashed_password); // test

//tikrinam ar atitinka slaptazodis. jei taip i session isimetam user_id ir user_name ir nukreipiam i panele

if(password_verify($password, $hashed_password)) { 
      $_SESSION['user_id'] = $userArray['id'];
      $_SESSION['user_name'] = $userArray['user_name'];
  } else {
    $loginErrors = [];
    array_push($loginErrors, "Incorrect e-mail or password.<br> Try again.");
    $printLoginErrors = implode("<br/>", $loginErrors);
    header("Location: ../admin/adminLogin.php?loginErrors= $printLoginErrors");
  }
  //kad prisijungtu tik turintys admin teises
  
  if ($rightsAdmin =="admin") { 
    //print_r($userArray['rights']);
    header("Location: adminPanel.php");
  } else {
    $loginErrors = [];
    array_push($loginErrors, "Do not have admin rights");
    $printLoginErrors = implode("<br/>", $loginErrors);
    header("Location: ../admin/adminLogin.php?loginErrors= $printLoginErrors");
  }

  //jei ne, pasirupinam, kad ismestu klaida loginantis, sukuriam masyva ir ji paverciam tekstu