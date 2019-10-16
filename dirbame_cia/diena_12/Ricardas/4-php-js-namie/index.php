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
    <header>
   		<h1>  Antraste </h1>
   </header>


   <?php 
   $vardas = 'Tomas';
   $pavarde = 'Tomytis';
   $straipsnis = ['BMW vel preleke saligatviu', 'Lorem lorem....', '2010-12-01'];
   include('straipsnis.php');

   ?>
   <footer>
   		<h1>  Antraste 1 </h1>
   		<h2>  Antraste 2 </h2>
   		<h4>  Antraste 3 </h4>
   		<h4>  Antraste 4 </h4> 
   		&copy 1990
   </footer>
    <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
    <!-- mano js failas visada pats zemiausias -->
    <script type="text/javascript" src='main.js'> </script>
    </body>
</html>

<!-- // UZDUOTIS
// 1.1 index.php faile sukurti 2 kintamuosius $vardas, $pavarde
// 1.2 index.php faile sukurti masyva: 'straipnis' = ['antraste', 'aprasymas', 'data'];
// pvz:   'BMW vel preleke saligatviu',   'Lorem lorem....', '2010-12-01'
// 2. index.php faile  ideti:
// include( 'straipsnis.php');
// 2.0. suskurti faila:  straipsnis.php
// 2.1 straipsnis.php faile sukurti <div> ir jo viduje isvesti su echo $vardas, $pavarde
// 2.2 straipsnis.php faile sukurti   'container' 'main' 'article'
// 2.3 'article' videje sukurti:
// 2.3.1    sukurti 'h2' ir jo viduje isvesti antrastę (is masyvo)
// 2.3.2    sukurti 'paragrafa' ir jo viduje isvesti aprasymą  (is masyvo)
// 2.3.3    sukurti '<div>' ir jo viduje isvesti datą  (is masyvo) -->