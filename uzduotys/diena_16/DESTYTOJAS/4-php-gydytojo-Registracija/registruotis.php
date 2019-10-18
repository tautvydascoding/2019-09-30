<?php


print_r(  $_GET ); // test

require_once('./doctors_functions.php');

$vard = $_GET['vardas'];
$pavd = $_GET['pavarde'];


createDoctor( $vard, $pavd );
echo "Jus uzregistruotas!";
