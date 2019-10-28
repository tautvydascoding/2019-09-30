<?php
include('db-functions.php');
$pavadinimas = $_GET['pavadinimas'];
$aprasymas = $_GET['aprasymas'];

//echo $elpastas;
issaugotikoncerta($pavadinimas, $aprasymas);

?>
<h2>Jūs sėkmingai užregistravote naują koncertą!</h2>
<?php
header('refresh:3; url=admin.php');
?>
