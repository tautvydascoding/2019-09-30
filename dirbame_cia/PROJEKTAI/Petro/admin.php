<!DOCTYPE html>
<html lang="en">
<head>
    <title>7 uzduotis</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->


    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>


<div class="panel panel-default" style="width: 500px; padding: 10px; margin: 10px">
    <div id="Tabs" role="tabpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="#visos" aria-controls="visos" role="tab" data-toggle="tab"> Visos prekes</a></li>
            <li><a href="#Ikelti" aria-controls="Ikelti" role="tab" data-toggle="tab">Ikelti preke</a></li>
            <li><a href="#Istrinti" aria-controls="Istrinti" role="tab" data-toggle="tab">Istrinti preke</a></li>
            <li><a href="#Koreguoti" aria-controls="Koreguoti" role="tab" data-toggle="tab">Koreguoti preke</a></li>

        </ul>
        <!-- Tab panes -->
        <div class="tab-content" style="padding-top: 20px">
            <div role="tabpanel" class="tab-pane active" id="visos">
                <h3>Prekiu sarasas</h3>
                <table>
                    <tr>
                        <th>Prekes Nr.</th>
                        <th>Kategorija</th>
                        <th>Pavadinimas</th>
                        <th width='200px'>Prekes aprašymas</th>
                        <th>Kaina, Eur</th>
                        <th>Nuolaida</th>
                        <th>Pozicija</th>
                        <th>Data</th>
                        <th>Kiekis</th>
                        <th>Foto kategorijoje</th>
                        <th>Foto pagrindinė</th>
                        <th>Koreguoti</th>
                        <th>Pakeisti</th>
                        <th>Ištrinti</th>

                    </tr>

                    <?php

                    include ('model/db_prekes_functions.php');
                    $visosPrekesMYSQL_Objektas = getVisosPrekes();


                    // su fetch paimam pirma MYSQL objekto eilute ir paverciam i tvarkinga pirmos eilutes masyva
                    $preke_Masyvas = mysqli_fetch_assoc($visosPrekesMYSQL_Objektas);

                    // su while ciklu atspausdinsim visas prekes

                    while ($preke_Masyvas) {

                        $prekeCikle = $preke_Masyvas['id'];
//                        $foteCikle = $preke_Masyvas['foto'];

                        echo"<tr>";
                        echo "<td>{$preke_Masyvas['id']} </td> ";
                        echo "<td>{$preke_Masyvas['kategorija']} </td> ";
                        echo "<td>{$preke_Masyvas['pavadinimas']} </td> ";
                        echo "<td width='200px'>{$preke_Masyvas['aprasymas']} </td> ";
                        echo "<td>{$preke_Masyvas['kaina']} </td> ";
                        echo "<td>{$preke_Masyvas['nuolaida']} </td> ";
                        echo "<td>{$preke_Masyvas['pozicija']} </td> ";
                        echo "<td>{$preke_Masyvas['data']} </td> ";
                        echo "<td>{$preke_Masyvas['kiekis']} </td> ";
                        echo "<td>{$preke_Masyvas['img_small']} </td> ";
                        echo "<td>{$preke_Masyvas['img_big']} </td> ";
                        echo "<td>{$preke_Masyvas['img_big']} </td> ";
//
//                        echo "<td><button type='button' class='{$prekeCikle}' onclick='keisti()' > update </button> </td> ";
//                        echo "<td><button type='button' class='{$prekeCikle}' onclick='trinti()' > delete </button> </td> ";
//                        <button type="button" class="16" id="gyd" onclick="trinti()">mygtukas</button>
                        echo "</tr>";
                        $preke_Masyvas = mysqli_fetch_assoc($visosPrekesMYSQL_Objektas);
                    }


                    ?>



                </table>

            </div>
            <div role="tabpanel" class="tab-pane" id="Ikelti">
                Prekiu ikelimas
                <div id='results'> Prekiu ikelimas </div>

                <input id="kategorija" type="text" name="v"  placeholder="Prekes kategorija">
                <input id="pavadinimas" type="text" name="v1"  placeholder="Prekes pavadinimas">
                <input id="aprasymas" type="text" name="v2"   placeholder="Prekes aprasymas">
                <input id="kaina" type="text" name="v3"       placeholder="kaina">
                <input id="nuolaida" type="text" name="v4"    placeholder="nuolaida">
                <input id="pozicija" type="text" name="v5"    placeholder="pozicija">
                <input id="kiekis"     type="text" name="v6"  placeholder="Prekes kiekis">
                <input id="img_small" type="text" name="v7"  placeholder="foto maza">
                <input id="img_big" type="text" name="v8"  placeholder="foto didele">


                <button type="submit" onclick="ikeltiPreke()"> Ivesti preke</button>




            </div>
            <div role="tabpanel" class="tab-pane" id="Istrinti">
                Prekiu istrinimas
                <div id='resultsIstrinti'> Prekiu istrinimas </div>
                <input id="id" type="text" name="v9"  placeholder="Prekes nr">
                <button type="submit" onclick="istrintiPreke()"> Istrinti preke</button>


            </div>
            <div role="tabpanel" class="tab-pane" id="Koreguoti">
                Prekiu koregavimas
            </div>
        </div>
    </div>
</div>



<script type="text/javascript"  src="libs/bootstrap-4/js/bootstrap.min.js">      </script>

<script type="text/javascript"  src="libs/jquery.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<!-- !!! mano js failas pats zemiausias -->
<script type="text/javascript"  src="AJAX/ajaxIkeltiPreke.js">    </script>
<script type="text/javascript"  src="AJAX/ajaxIstrintiPreke.js">    </script>


</body>
</html>