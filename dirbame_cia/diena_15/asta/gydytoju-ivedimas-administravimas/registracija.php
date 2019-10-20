<?php
include('db-functions.php');
$vard = $_GET['vardas'];
$pavar = $_GET['pavarde'];
//echo $vard;
createDoctor($vard, $pavar);

?>
<h2>Tikriausiai sekmingai sukurta</h2>
