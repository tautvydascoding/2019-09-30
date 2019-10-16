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
        $menuMasyvas = ['Home', 'About', 'Gallery', 'Contact', 'Blog'];
        $nuotraukuMasyvas = ['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.png'];


        for($i = 0; $i < count($menuMasyvas); $i++) {
            echo '<li>' . $menuMasyvas[$i] . '</li>';
        }

        for($i = 0; $i < count($nuotraukuMasyvas); $i++) {
            echo "<img src='img/$nuotraukuMasyvas[$i]' width='350px' >";
        }

        // echo "<img src='img/{$nuotraukuMasyvas[$i]}' width='350px' >";

        //echo "labas {$zmogus['vardas']} <br>"
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