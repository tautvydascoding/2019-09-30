<!DOCTYPE html>-->
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     mano css failas visada pats zemiausias
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet"  href="css/style.css">
    </head>
    <body>
<!---->
<!--// =================svarbus patarimai===================:-->
<!--// ARRAY: jeigu naudoji FOR || while cikla, tai negalvojant masyve naudoti "i" (pvz.: myArray[i])-->
<!--// FOR:   "for (i = 0; i < x; i++) {"  - nesusijusi su uzdaviniu (skirtas apeit masyva/ ivykdyti daug kartu kazka)-->
<!--// matricas  - visada nusipiesti ant popieriaus eskiza su testiniais duomenimis-->
<!--// matrica narys paimamas: myMatrica[x][y]   x- stulpelis; y - eilute-->
<!--// matrica - pasitikritni ar nereik x ir y sukeisti vietomis (ar nesuklydai kuris stulpelis ir kuris eilute )-->
<!--// matricos ilgis daznai skiriasi nuo plocio.-->
<!--//  pvz.:-->
<!--// for ( i < eiluciuSkaicius)-->
<!--//    for ( k < stulpeliuSkaicius)-->
<!--// =================// =================// ========-->



<!--// UZDUOTIS 1.0-->
<!--// A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius-->
<!--// B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore-->
<!--// C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas-->
<!--// D. sukurti masyva 'visiDarbuotojai'-->
<!--// E.   i masyva 'visiDarbuotojai'  ideti visus dartuotoju masyvus-->
<!--// UZDUOTIS 1.1-->
<!--// isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)-->
<!--// UZDUOTIS 1.2-->
<!--// isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)-->
<!--// UZDUOTIS 1.3-->
<!--// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)-->
<!--// UZDUOTIS 1.4-->
<!--// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)-->
<!---->
<!---->
<!--// UZDUOTIS 2 ---------------->
<!--// sukurti matrica, kurioje bus saugoma kiekvienos prekes info:-->
<!--// Antraste, img pavadinimas, kaina, prekes aprasymas-->


<?php
$preke1 = [
            "Antraste" => "Antraste1",
           "img_pavadinimas" => "img pavadinimas1",
           "kaina" => 25,
           "prekes_aprasymas" => "prekes aprasymas"
            ];
echo print_r($preke1);
echo "<hr>";
$preke2 = [
            "Antraste" => "Antraste2",
           "img_pavadinimas" => "img pavadinimas2",
           "kaina" => 687,
           "prekes_aprasymas" => "prekes aprasymas2"
            ];
echo print_r($preke2);
echo "<hr>";
$preke3 = [
            "Antraste" => "Antraste3",
           "img_pavadinimas" => "img pavadinimas3",
           "kaina" => 54,
           "prekes_aprasymas" => "prekes aprasymas3"
            ];
echo print_r($preke3);
echo "<hr>";




$prekes = [$preke1, $preke2, $preke3];

echo print_r($prekes);
echo "<hr>";


for($i=0; $i<count($prekes); $i++): ?>

<article class="col-sm-4">
    <h2 class="text-center"> <?php echo ($prekes [$i]["Antraste"]) ?> </h2>
    <h4 class="text-center"><?php echo ($prekes [$i]["img_pavadinimas"]) ?></h4>
    <button type="button" ><?php echo ($prekes [$i]["kaina"]) ?></button>
    <p class="text-center"><?php echo ($prekes [$i]["prekes_aprasymas"]) ?></p>

</article>


<?php endfor; ?>
<br>
<br>
<br>


<?php
foreach ($prekes as $reiksme){ ?>
<article class="col-sm-4">
    <h2 class="text-center"> <?php print_r($reiksme ["Antraste"]); ?> </h2>
    <h4 class="text-center"><?php print_r ($reiksme["img_pavadinimas"]) ?></h4>
    <button type="button" class="just"><?php print_r ($reiksme["kaina"]) ?></button>
    <p class="text-center"><?php print_r ($reiksme["prekes_aprasymas"]) ?></p>
</article>

<?php
}

?>



<!--// A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina-->
<!--// B. i masyva visosPrekes, ideti "preke" masyva-->
<!--// C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach) ir bootstrap dizaina-->


<!---->
<!---->
<!--// 3 budai nuotraukoms-->
<!--// printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");-->
<!--// printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);-->

    </body>-->
</html>-->
