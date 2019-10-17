<?php
include_once('db_functions.php');

$numeris = $_GET['nr'];

$gydytojas = getDoctor( $numeris);

// echo $gydytojas[1] .  $gydytojas[2] ;
echo "Gydytojas: ".$gydytojas["name"] .  $gydytojas['lname'] ;

?>