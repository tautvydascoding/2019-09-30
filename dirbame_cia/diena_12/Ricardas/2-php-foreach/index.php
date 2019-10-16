<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  href="libs/bootstrap/css/bootstrap.min.css">
        <!-- mano css failas visada pats zemiausias -->
        <link rel="stylesheet"  href="css/style.css">
    </head>
    <body>
        <h1>Isijunk console (narsykleje)</h1>

        <?php 
            $zmogus = ['vardas' => 'Tom', 'amzius' => 21, 'tel' => 8642315647];
            print_r($zmogus);
            echo "<hr>";
            var_dump($zmogus);

            foreach($zmogus as $key_index => $masyvoStalciausTurinys) {
                echo "stalciaus pavadinimas: $key_index    <br>";
                echo "stalciaus reiksme: $masyvoStalciausTurinys <hr>";
            }
        ?>

for($i = 0; $i < count($prekes); $i++) : ?>
        <article>
            <h2><?= $prekes[$i][0]?></h2>
            <img src='img/<?=$prekes[$i][1]?>' width="25%">
            <p><?= $prekes[$i][3]?></p>
            <button><?= $prekes[$i][2]?></button>
        </article>
        <?php endfor; ?>

        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
