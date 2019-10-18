<?php
include('db-functions.php');
$vard = $_GET['vardas'];
$pavar = $_GET['pavarde'];
createDoctor($vard, $pavar);

?>
<h2>Tikriausiai sekmingai sukurta</h2>
