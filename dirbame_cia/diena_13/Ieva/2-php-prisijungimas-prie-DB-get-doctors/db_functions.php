 <?php
    
// 1. sukurti faila:  db_functions.php
// 2. parasysi PHP faile mysqli prisijungima prie DB
// 3. suprogramuoti f-jas:
// 4. getDoctor($nr)

//prisijungimas
//konstantos - nekintantys kintamieji - negali keisti
//------------nustatymai-------------
$debug_mode = 0;
define('MYSQL_VARTOTOJAS', 'root');
define('MYSQL_SLAPTAZODIS', 'root');
define('DB_VARDAS', 'hospital8');
define('DB_HOST', 'localhost');
// define(PORT, '8889'): - jei pakeiciau MAMP MYSQL portas, tik tada naudoti Porta.

$prisijungimas = mysqli_connect(DB_HOST, MYSQL_VARTOTOJAS, MYSQL_SLAPTAZODIS, DB_VARDAS);

if ($prisijungimas) {
    if ($debug_mode > 1) {
   echo "Prisijunget sekmingai <br>";  
}
   
} else {
    echo "ERROR Neprisijungia prie duomenu bazes:".mysqli_connect_error();
}

// getDoctor($nr)

function getDoctor($p, $nr) {
    $rez = mysqli_query($p,"SELECT * FROM doctors WHERE id = '$nr';");
    $rezArray = mysqli_fetch_assoc($rez);
    return $rezArray;
}


$gydytojasArray = getDoctor($prisijungimas, 4);
// print_r($gydytojasArray);
echo "Vardas: ".$gydytojasArray['name']."<br>";
echo "Pavarde: {$gydytojasArray['lname']} <br>";

