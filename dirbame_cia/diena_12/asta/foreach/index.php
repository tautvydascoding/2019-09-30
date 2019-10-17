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
        $zmogus = [
          "vardas" => "Tom",
          "amzius" => 21,
          "tel" => 8698777
      ];
      print_r($zmogus);    //test
      echo "<hr />";      //eilute per visa ekrana
      var_dump($zmogus);
      foreach ($zmogus as $key_index => $masyvoStalciausTurinys){  //keyindex ir masyvoStalciausTurinys - cia sukurit kintamieji
        echo "Stalciaus pavadinimas: $key_index <br/>";
        echo "Stalciaus reikme:$masyvoStalciausTurinys  <hr>";


      }
      foreach ($zmogus as $masyvoStalciausTurinys){
                echo "Stalciaus reikme:$masyvoStalciausTurinys  <hr>";

      }
        // su foreach ciklu isvesim masyva
         ?>



        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
