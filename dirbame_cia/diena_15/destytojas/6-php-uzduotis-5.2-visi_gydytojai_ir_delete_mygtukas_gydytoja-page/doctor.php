<h1>Asmeninsi gydytojo puslapis</h1>

<?php

include_once('db_functions.php');
$gydydotas_array = getDoctor(   $_GET['numeris']   );

echo " {$gydydotas_array['name']}  {$gydydotas_array['lname']}";
echo "<a class='btn btn-outline-danger'  href='trintiGydytoja.php?numeris={$gydydotas_array['id']}'>TRINTI</a>";


 ?>
