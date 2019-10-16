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
        <h1>Isijunk console (narsykleje)</h1>

        <?php 
        $vardas = "tomas";
        $vardas1pirmuno = '';
        $vardas_pirmuno = '';
        $tekstas1 = "Raudonkepure ejo ir sutiko $vardas ir lalala ia blalala <br>";
        $tekstas2 = 'Raudonkepure ejo ir sutiko $vardas ir lalala ia blalala <br>';
        echo $tekstas1;
        echo "$tekstas2";
        $masyvas = [];

        $name = "Titas";
        $surname = "haha";
        $tekstas3 = "Duomenys:". $name. $surname. "<br>";

           // UZDUOTIS  "Switch"
            // paduoti varda ir Jeigu jis lygus:
            // "audi" - atspausdinti "Susimastykite apie variklio prieziura"
            // "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
            // "opel" - atspausdinti "Susimastykite apie naujus priedus"

            $vartotojoIvestis = " bmW  ";
            $vartotojoIvestis = htmlspecialchars($vartotojoIvestis, ENT_QUOTES);// visada naudot
            $auto = trim($vartotojoIvestis);/// pasalinami tarpai ir tabai aplink teksta, ne viduje
            $auto = strtolower($auto); ///sumazinti raides

            $auto = strtolower(trim(htmlspecialchars($vartotojoIvestis), ENT_QUOTES));

            switch ($auto) {
                case 'audi':
                    echo "Susimastykite apie variklio prieziura";
                    break;
                case 'bmw':
                    echo "Susimastykite apie greiti ir vairavimo kultura";
                    break;
                case 'opel':
                    echo "Susimastykite apie naujus priedus";
                    break;
                default:
                    echo "tokios \"$auto\" mes nezinome";
                    break;
                
            }

        ?>


        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
