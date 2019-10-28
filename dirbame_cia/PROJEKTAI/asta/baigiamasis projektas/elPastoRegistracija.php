<?php
include('db-functions.php');
$elpastas = $_GET['elpastas'];
//echo $elpastas;
issaugotiElPasta($elpastas);

?>
<h2>Jūs sėkmingai užsisakėte naujienas!</h2>
<?php
header('refresh:3; url=index.php');
?>
