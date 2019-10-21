<?php




include('db_functions.php');


$numeris = $_GET['id'];
$gydytojas = getDoctor($numeris);
print_r($gydytojas);


echo "<h2>NR: {$gydytojas['id']}</h2> <br>
<h3>  {$gydytojas['name']}  {$gydytojas['lname']} </h3>";

$idEinamas = $gydytojas['id'];

print_r($idEinamas);

echo "<button type='submit'><a href='trintiGydytoja.php?id=$idEinamas'>Salinti</a> </button>";

//echo '<button type="submit"><a href="trintiGydytoja.php?id=$idEinamas">Salinti</a> </button>';


//<!--//echo $gydytojas[1] . $gydytojas[2];-->
//<!--//echo $gydytojas["name"] . $gydytojas['lname'];-->