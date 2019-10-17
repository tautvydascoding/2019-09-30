<h1> prekiu isvedimas keiciant url adresa</h1>
<?php

$preke1 = [100, "dviratis", 21];
$preke2 = [156, "paspirtukas", 10];
$preke3 = [188, "riedlente", 9];

$numeris = $_GET['x']; //informacija is URL adreso, kad veiktu isivesti ?x=1
echo "numeris: $numeris <br />";
echo $preke1[$numeris] . "<hr />";

$visosPrekes = [$preke1, $preke2, $preke3];
$numeris = $_GET['x'];  //cia x yra prekes numeris, kuri galima kaitalioti url adrese
$manoPreke =  $visosPrekes[$numeris];
print_r($manoPreke);
echo "<hr />";

 ?>
