<?php
include('db-functions.php');
$vardas = $_GET['vardas'];
$elpastas = $_GET['elpastas'];
$zinute = $_GET['zinute'];

//echo $elpastas;
issaugotiZinute($vardas, $elpastas, $zinute);

?>
<h2>Jūs sėkmingai išsiuntėt žinutę!</h2>
<?php
header('refresh:3; url=kontaktai.php');
?>
