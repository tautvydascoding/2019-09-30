<?php 

include('db_functions.php');

$vard = $_GET['name'];
$parv = $_GET['lname'];
createDoctor($vard, $parv);


//$zinute = "Woop woop pavyko";
//$GLOBALS['zinute']="Woop woop pavyko";

// PHP redirect
header("Location: index.php");
die();