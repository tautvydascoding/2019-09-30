<?php
include ('zmogus.php');

$Monika = new zmogus();
$Monika -> vardas = "Monika";
$Monika -> ugis = 155;
echo "vardas->$Monika->vardas <br />";
echo "ugis->$Monika->ugis <br />";
$Tadas = new zmogus();
$Tadas->vardas = "Tadas";
$Tadas->ugis = 180;
echo "vardas->$Tadas->vardas <br />";
echo "ugis->$Tadas->ugis";
$Kestas = new zmogus();
$Kestas->vardas = "Kestas";
$Kestas->ugis = 179;

$Monika->einu();

$Tomas = new zmogelis (190, "Tomas");
echo "vardas->$Tomas->vardas <br />";














 ?>
