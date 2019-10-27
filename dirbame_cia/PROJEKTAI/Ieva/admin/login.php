<?php
session_start();
require_once('../config/connectToDB.php');
$password = $_POST['password'];
$email = $_POST['email'];

//echo $password." ".$email;//test

$cryptedEmail = mysqli_real_escape_string(getConnect(), $email );

// echo $cryptedEmail;//test

$mySQL_string = "SELECT * FROM users 
                          WHERE email = '$cryptedEmail'";

$resultObject = mysqli_query(getConnect(), $mySQL_string);

$userArray = mysqli_fetch_assoc($resultObject);

//print_r($userArray); //test

$hashed_password = $userArray['password'];

// print_r($hashed_password); // test

if(password_verify($password, $hashed_password)) {    
    $_SESSION['user_id'] = $userArray['id'];
    $_SESSION['user_name'] = $userArray['user_name'];
    header("Location: adminPanel.php");
  
  } else {
    $loginErrors = [];
    array_push($loginErrors, "Incorrect password or e-mail.<br> Try again.");
    $printLoginErrors = implode("<br/>", $loginErrors);
    header("Location: ../admin/adminLogin.php?loginErrors= $printLoginErrors");
  }
  ?>