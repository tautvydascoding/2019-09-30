<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- mano css failas visada pats zemiausias -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet"  href="css/style.css">
    </head>
    <body>
        <h1>Paveldimumas klasese 5 uzdavinys</h1>
        <?php
        include_once ("Vyras.php");
        // UZDUOTIS 0.
        // susikurti objekta VYRAS

        // UZDUOTIS 1.
        // susikurti f-jas kurios :
        // 1. pakeicia 'testosterono' kieki
        // 2. isveda 'testosrerono' kieki

        // UZDUOTIS 2  (private-protected skirtumas)
        // Vyras klases viduje atspausdinti:
        // f-ja printVyroDuomenys()
        // ugi, pusrycius, turtas
        // kur gausite klaida? Kurio kintamojo neiseina atspausdinti?

        // UZDUOTIS 3 (atspausdinti kintamaji, kurio neleido 2 uzdavinys)
        // klases viduje (atspekite kurios) sukurti f-ja, kuri prieina prie privataus kintamojo . ir ji atspausdina


        $VyrasObjektas = new Vyras();
        $VyrasObjektas->setTestosteronas('34555');
        echo $VyrasObjektas->getTestosteronas();
        $VyrasObjektas->printVyroDuomenys();
        ?>


        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
<!--        <script type="text/javascript" src='main.js'> </script>-->
    </body>
</html>
