<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- mano css failas visada pats zemiausias -->
    <link rel="stylesheet"  href="css/style.css">
</head>
<body>
    <h1>Isijunk console (narsykleje1)</h1>
    <?php
    $vardas ='Tomas';
    $pavarde = 'Tomauskis';
    $tekstas = "Duomenys: " . $vardas . $pavarde . "<br>";
    echo $tekstas;
    $tekstas1 = "TEKSTAS 1";
    $tekstas2 = "TEKSTAS 2";
    echo $tekstas1;
    echo $tekstas2;

    $masyvas = [];

    // UZDUOTIS  "Switch"
    // paduoti varda ir Jeigu jis lygus:
    // "audi" - atspausdinti "Susimastykite apie variklio prieziura"
    // "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
    // "opel" - atspausdinti "Susimastykite apie naujus priedus"


    $vartotojoIvestis = 'rmw';
    $vartotojoIvestis = htmlspecialchars($vartotojoIvestis, ENT_QUOTES); //uzdraudzia ivesti kabutes
    $auto = trim($vartotojoIvestis);  //pasalinami tarpai ir tabai aplink teksta
    $auto = strtolower($auto);     //sumazina raides

    //kitas kintamojo auto uzrasymo variantas

    $auto = strtolower(trim(htmlspecialchars($vartotojoIvestis),ENT_QUOTES));

    switch ($auto){
        case 'audi':
                echo "<br> Susimastykite apie variklio prieziura";
                break;
        case 'bmw':
             echo "<br>    Susimastykite apie greiti ir vairavimo kultura";
             break;
        case 'opel':
            echo "<br> Susimastykite apie naujus priedus";
            break;
        default:
            echo "<br> toks \" $auto \" mes nezinome";
    }



    ?>
    <?php   ?>
<!-- mano js failas visada pats zemiausias -->
<script type="text/javascript" src='main.js'> </script>
</body>
</html>




