<?php

include('db_functions.php');

// print_r($_GET);

$nr = $_GET['id'];
$name = $_GET['name'];
$lname = $_GET['lname'];

updateDoctor($nr, $name, $lname);


$zinute = "Woop woop pavyko";
$GLOBALS['zinute']="Woop woop pavyko";

// PHP redirect
header("Location: index.php?zinute=Sekmingai uzregistruotas pakeitimas");