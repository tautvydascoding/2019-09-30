<?php

include("../../config/connectToDB.php");
include("../../model/challenges.php");
include('../../model/challenge_images.php');

// print_r($_GET);//test

$nr = $_GET['id'];

$title = $_GET['title'];
$description = $_GET['description'];
$tag = $_GET['tag'];
$lname = $_GET['lname']; 
$rights = $_GET['rights']; 

// echo $user_name,$email,$name,$lname,$rights;//test

updateUserAdmin ($nr, $user_name, $email, $name, $lname, $rights);

header("Location: ../adminPanel.php");
