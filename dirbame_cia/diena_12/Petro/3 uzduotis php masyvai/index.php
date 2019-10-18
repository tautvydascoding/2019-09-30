<!--// uzduotis 1-->
<!--// A. susikurti meniu masyva: home, about, gallery, contact, blog-->
<!--// B. atspausdinti visus meniu punktus i HTML (su html tag'ais)-->



<?php

    $meniu = array("home","about","gallery","contact", "blog");

?>

<div> <?php echo $meniu[0]."<br>".
             $meniu[1]."<br>".
             $meniu[2]."<br>".
             $meniu[3]."<br>".
             $meniu[4]."<br>"
// kitas variantas su for ciklu
    ?></div>


<div>
<?php
 for($i=0; $i<count($meniu); $i++){
        echo $meniu[$i]."<br>";
 }

    ?> </div>


<div>
<?php
    $fotos = ['gitar1.png','gitar2.jpg','gitar3.png','gitar4.png','gitar5.jpg','gitar6.jpg'];
        echo 'LABAS';
//        echo "<img src='img/gitar1.png' width=25 % alt=''/>";

    for ($i=0; $i<count($fotos); $i++){
        echo "<img src='img/$fotos[$i]' width=200 % alt=''/>";
    }



?>
</div>



<!--// uzduotis 2-->
<!--// A. susirasti 6 nuotraukas-->
<!--// B. susikurti nuotrauku TIK pavadinimu masyva-->
<!--// C. atspausdinti visas nuotraukas su ciklu, po 4-ris i eilute-->
<!--// <img src='img/1.jpg' alt=''  />-->
<!--// <img src='img/2.jpg' alt=''  />-->
<!--// <img src='img/3.jpg' alt=''  />-->
<!--// <img src='img/4.jpg' alt=''  />-->

<!--$foto = ["1.jpg",]-->


<!--// <img src='img/--><?php //echo $x ?><!--' alt=''  />-->
<!---->
<!---->
<!---->
<!--<!DOCTYPE html>-->
<!--<html>-->
<!--    <head>-->
<!--        <meta charset="utf-8">-->
<!--        <title></title>-->
<!--        <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--     mano css failas visada pats zemiausias -->
<!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
<!--        <link rel="stylesheet"  href="css/style.css">-->
<!--    </head>-->
<!--    <body>-->
<!--        <h1>Isijunk console (narsykleje)</h1>-->
<!---->
<!---->
<!---->
<!--        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>-->
<!--     mano js failas visada pats zemiausias -->
<!--        <script type="text/javascript" src='main.js'> </script>-->
<!--    </body>-->
<!--</html>-->
