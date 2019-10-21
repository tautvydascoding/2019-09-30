<?php
include('db_functions.php');
$numeris = $_GET['nr']; //nr = id is index.php
$gydytojas = getDoctor($numeris); //pagal id istraukiam daktara
// echo $gydytojas[1] . $gydytojas[2];
echo $gydytojas["name"] . ' ' . $gydytojas['lname']; //atvaiszduojam istraukta daktara doctor puslapi