<?php
include('db-functions.php');
$metai = $_GET['metai'];
$valanda = $_GET['valanda'];
$vieta = $_GET['vieta'];
$bilietai = $_GET['bilietai'];
$manopasirinkimas = $_GET['manopasirinkimas'];

echo "$manopasirinkimas<br />";

echo "$metai<br />";
echo "$valanda<br />";
echo "$vieta<br />";
echo "$bilietai<br />";


issaugotinaujarengini($metai, $valanda, $vieta, $bilietai, $manopasirinkimas );

?>
<!-- <h2>Jūs sėkmingai užregistravote naują renginį</h2> -->
<?php
//header('refresh:3; url=admin.php');
?>
