
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  href="libs/bootstrap/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- mano css failas visada pats zemiausias -->
        <link rel="stylesheet"  href="css/style.css">
    </head>
    <body>
      <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>
      <?php

      include_once('db-functions.php');
      include_once('navigacija.php');
?>
<h1 style="color: #F35211"><i>      Kontaktai</i></h1>
        <div class="container">


<div class="stulpelio container" style="background-color:white;">
<div class="row">
  <div class="col-xs-12 col-sm-3 col-md-3" style="background-color:#F9F9F9;">
    <img src="img/akvile4.jpg" alt="Akvile" class="responsive" heigth="700px">
<br />
<br />

    <p>

    <i><b>Telefonai užsakymams:</b></i>
    <br />
    +370 650 50154
    <br /><br />

    <p>
      <i><b>El.paštas užsakymams:</b></i>
    </p>

    riestnosyte@gmail.com
</p>
    </div>
  <div class="col-xs-12 col-sm-9 col-md-9" style="background-color:#F9F9F9;">



    <p><i><b>Susisiekite su mumis</b></i></p>

        <br />
    <form   action="zinutesRegitracija.php" method="get">
      <input type="text" name="vardas" placeholder="Įveskite vardą">
           <input type="email" name="elpastas" placeholder="Įveskite el.pašto adresą">
         </br>
       </br>
           <textarea name="zinute" rows="8" cols="80" placeholder="Rašykite žinutę"></textarea>
         </br>
            <button type="Submit">&nbsp Siųsti &nbsp</button>

         </form>


    </div>
</div>

<?php
include_once('naujienlaiskiouzsakymas.php');
?>

        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
