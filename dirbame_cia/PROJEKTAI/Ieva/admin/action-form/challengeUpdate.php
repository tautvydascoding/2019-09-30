<?php

include("../../config/connectToDB.php");
include("../../model/challenges.php");
include('../../model/challenge_images.php');

// print_r($_GET);//test

$nr = $_GET['id'];
// $name = $_GET['name'];
// $lname = $_GET['lname'];
$user_name = $_GET['user_name'];
$email = $_GET['email'];
$name = $_GET['name'];
$lname = $_GET['lname']; 
$rights = $_GET['rights']; 

// echo $user_name,$email,$name,$lname,$rights;//test

updateUserAdmin ($nr, $user_name, $email, $name, $lname, $rights);

header("Location: ../adminPanel.php");
