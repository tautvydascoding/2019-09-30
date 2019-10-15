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
       
       <nav>
        <?php 
        $meniu = ["home", "about", "gallery", "contact", "blog"];
        // echo $meniu[0]."<br>"; 
        // echo $meniu[1]."<br>"; 
        // echo $meniu[2]."<br>"; 
        // echo $meniu[3]."<br>"; 
        
        for ($i = 0; $i < count($meniu); $i++) {
            echo $meniu[$i]."<br>";
         }

        ?>
        </nav>

        <?php
        $foto = ["1.jpg", "2.jpg","3.jpg", "4.jpg","5.jpg", "6.png"];
        
        for ($i = 0; $i < count($foto); $i++) {
           echo "<img src='img/$foto[$i]' width = '25%' />";

           echo "<img src='img/{$foto[$i]}' width = '25%' />";
        }
        ?>
        
        

        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>

<!-- // uzduotis 1
// A. susikurti meniu masyva: home, about, gallery, contact, blog
// B. atspausdinti visus meniu punktus i HTML (su html tag'ais)


// uzduotis 2
// A. susirasti 6 nuotraukas
// B. susikurti nuotrauku TIK pavadinimu masyva
// C. atspausdinti visas nuotraukas su ciklu, po 4-ris i eilute
// <img src='img/1.jpg' alt=''  />
// <img src='img/2.jpg' alt=''  />
// <img src='img/3.jpg' alt=''  />
// <img src='img/4.jpg' alt=''  />

$foto = ["1.jpg",]


// <img src='img/<?php echo $x ?>' alt=''  /> -->
