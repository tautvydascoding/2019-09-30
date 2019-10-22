<body>
<h1> Failo nuskaitymas </h1>

<?php
$myfile = fopen ("Prekes.txt", "r") or die ("Unable to open file");

$visosPrekes = [];
$i = 0;

while (!feof($myfile)) {
   $preke_eilute = fgets($myfile);
   $preke_array = explode(";", $preke_eilute);
   $visosPrekes[$i] = $preke_array;
   $i++;
}

print_r($visosPrekes);

fclose($myfile);

// ------
for ($i = 0; $i < count($visosPrekes); $i++) : ?>
    <div>
    <h1><?=$visosPrekes[$i][0]?></h1>
    <p><?=$visosPrekes[$i][3]?></p>
    <p>Kiekis: <?=$visosPrekes[$i][1]?></p>
    <button type='button'><?=$visosPrekes[$i][2]?> Eur </button>
    </div>
<?php
    endfor;
?>



</body>