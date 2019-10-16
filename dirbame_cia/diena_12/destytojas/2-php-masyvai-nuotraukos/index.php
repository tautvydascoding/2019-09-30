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

        // uzduotis 1
        // A. susikurti meniu masyva: home, about, gallery, contact, blog
        // B. atspausdinti visus meniu punktus i HTML (su html tag'ais)

        // A)
        $meniu = ['home', 'about', 'gallery', 'contact', 'blog'];
        // B)
        // echo $meniu[0] . "<br>";  // test
        // echo $meniu[1] . "<br>";  // test
        for ($i=0; $i < count($meniu); $i++) {
            echo $meniu[$i] . "<br>";
        }

        // ============================2==================
        // uzduotis 2
        // A. susirasti 6 nuotraukas
        // B. susikurti nuotrauku TIK pavadinimu masyva
        $fotos = ['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.png'];
        // C. atspausdinti visas nuotraukas su ciklu, po 4-ris i eilute
        // <img src='img/1.jpg' alt=''  />
        // <img src='img/2.jpg' alt=''  />
        // <img src='img/3.jpg' alt=''  />
        // <img src='img/4.jpg' alt=''  />

        // echo "<img src='img/1.jpg' alt=''  />";  // test
        for ($i=0; $i < count($fotos); $i++) {
            echo "<img src='img/$fotos[$i]'  width='25%'  />";

            echo "<img src='img/{$fotos[$i]}'  width='25%'  />";
        }


        for ($i=0; $i < 10; $i++)   :
            echo "akivaizdesnis uzdarymas (: endfor) ";
        endfor;

        if (true) :
            echo "akivaizdesnis uzdarymas (: endifs) ";
            if (true) :
                echo "akivaizdesnis uzdarymas (: endifs) ";
            endif;
        endif;
        // if'u trumpesnis uzrasymas
        $arVedes = true;
        $x = "duoti paskola";
        $y = "Neduoti paskolos";
        $arDuotiPaskola = ($arVedes == true) ? $x : $y;  // $x yra grazinama reiksme
        // kur "?" reiskia true, o ":" - else
        // if($arVedes ==true) {
        //     $arDuotiPaskola = $x;
        // } else {
        //     $arDuotiPaskola = $y;
        // }

        for ($i=0; $i < 4; $i++) :
        ?>
            <div class="col-3  text-center ">
                <h2>  <?php echo $meniu[0]; ?>  </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <button type="button" name="button">Buy</button>
            </div> <!-- end col-3 -->
 <?php  endfor;  ?>


        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
