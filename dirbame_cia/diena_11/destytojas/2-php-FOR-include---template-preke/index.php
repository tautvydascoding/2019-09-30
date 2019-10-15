<?php
include('header.php');
include('main.php');
include('footer.php');
// sukurti kintamuosius:
$kaina = "200";
$antraste = "Cia yra preke";
$aprasymas = "Cia yra aprasymas";


for ($i=0; $i < 6; $i++) {
  include('template-preke.php');
}
?>
