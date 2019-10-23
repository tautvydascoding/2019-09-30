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
        <h1>Isijunk console (narsykleje)</h1>

        <?php
        // include('gyvunai.php'); 
        include('zmones.php');

        
        $Jonas = new Vyras();
        $Jonas->setTest(9000);
        $Jonas->ugis = 180;
        $Jonas->pusryciai = 'mesa';
        $Jonas->setTurtas('Masina');
        // print_r($Jonas->getTest());
        print_r($Jonas->printVyrDuom());
        
        
        // $Vilkas = new Vilkas();
        // echo "$Vilkas->tipas <br>";
        // echo "$Vilkas->svoris <br>";
        // echo "$Vilkas->ligos <br>";
        // echo "$Vilkas->pusryciai <br>";

        // print_r($Vilkas->printLigos());
        // print_r($Vilkas->printPusryciai()); //pveldi is tevo ir prieina prie private

        ?>
        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
