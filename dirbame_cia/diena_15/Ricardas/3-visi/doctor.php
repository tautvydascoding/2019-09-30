<?php
include('db_functions.php');
$numeris = $_GET['nr']; //nr = id is index.php
$gydytojas = getDoctor($numeris); //pagal id istraukiam daktara
// echo $gydytojas[1] . $gydytojas[2];
// echo $gydytojas["name"] . ' ' . $gydytojas['lname']; //atvaiszduojam istraukta daktara doctor puslapi

echo "<h2>NR: {$gydytojas['id']}</h2>";
echo "<h3>{$gydytojas['name']} {$gydytojas['lname']}</h3>";


// 0. index.php faile, isvesti visus gydytojus

// 1. index.php faile, paspaudus ant betkurio gydytojo vardo  - vartotoja perkelti i "doctor.php" faila
// (galite panaudoti "<a> </a>")

// 2.  doctor.php faile, iskviesti savo pasirasyta f-ja  getDoctor(...);
// ir isvesti visa informacija tik apie sita gydytoja
// <h2>NR: ...</h2>
// <h3> vardas pavarde</h3>

// 3.1 sukurti "trintiGydytoja.php", kuriame paleisti
// deleteDoctor(...) f-ja

// 3.2 doctor.php faile , ideti "Salinti" mygtuka, kuris istrintu si gydytoja
// <a href=".../trintiGydytoja.php?x=....">Salinti</a>

echo "<button><a href='trintiGydytoja.php?nr={$gydytojas['id']}'>Salinti</a></button>";

?>
