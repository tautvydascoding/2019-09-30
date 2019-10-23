<?php 

include('model/users.php');

// $vard = $_GET['name'];
// $parv = $_GET['lname'];

$user_name = 'TestUser';
$email = 'test@test.com';
$password = 'test123'; 
$name = 'Tomas';
$lname = 'Testauskas';

createUser ($user_name, $email, $password, $name, $lname);

// function getUser(1);

// PHP redirect
// header("Location: index.php?zinute=Sekmingai sukurtas naujas gydytojas");