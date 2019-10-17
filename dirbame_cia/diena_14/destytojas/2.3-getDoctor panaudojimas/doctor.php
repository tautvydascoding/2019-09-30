<h1> Gydytojo asmeninis puslapis</h1>

<?php
include_once('db_funtions.php');

$numeris = $_GET['nr'];  // gydytojo id    DB-eje
$gydytojas = getDoctor( $numeris);

echo $gydytojas["name"] .  $gydytojas['lname'] ;
