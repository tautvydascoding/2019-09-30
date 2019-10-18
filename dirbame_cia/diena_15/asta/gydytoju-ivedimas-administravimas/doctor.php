<h1> Gydytojo asmeninis puslapis</h1>
<?php
include('db-functions.php');

$numeris = $_GET['nr'];   //gydytojo id DBazeje
$gydytojas = getDoctor( $numeris);


echo $gydytojas["name"] .  $gydytojas['lname'] ;
?>
<!-- isveda pageidaujamo gydytojo informacija reikia irasyti ?nr=2 arba bet koks kitas gydytoju masyvo iraso numeris -->
