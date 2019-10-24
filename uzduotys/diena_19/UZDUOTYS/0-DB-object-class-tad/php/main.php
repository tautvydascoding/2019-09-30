<?php 
// class zmogus {
//		...
// }



$monika = new zmogus("Monika", 177);
$tadas = new zmogus("Tadas", 195);
$kestas = new zmogus("Kestas", 180);

echo $monika->vardas . " " . $monika->ugis;
echo "<br>";
echo $tadas->vardas . " " . $tadas->ugis;
echo "<br>";
echo $kestas->vardas . " " . $kestas->ugis;
echo "<br>";
$kestas->eiti();
echo "<br>";

?>