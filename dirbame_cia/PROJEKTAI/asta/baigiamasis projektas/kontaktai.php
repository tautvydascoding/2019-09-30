
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

      <?php

      include_once('db-functions.php');
      include_once('navigacija.php');
?>
<h1><i>      Kontaktai</i></h1>
        <div class="container">


<div class="stulpelio container" style="background-color:white;">
<div class="row">
  <div class="col-sm-3 " style="background-color:#F9F9F9;">
    <img src="img/akvile4.jpg" alt="Akvile" class="responsive" heigth="700px">
<br />
<br />

    <p>

    </p><i>Telefonai užsakymams:</i>
    <br />
    2222222
    <br />

<br />
<br />

    <p>
      <i>El.paštas užsakymams:</i>
    </p>
    <br />
    info@akvile.com
</p>
    </div>
  <div class="col" style="background-color:#F9F9F9;">
    <br />
  
    <br />

    <p><i>Susisiekite su mumis</i></p>

    <br />
    <br />
    <form   action="zinutesRegitracija.php" method="get">
      <input type="text" name="vardas" placeholder="Iveskite varda">
           <input type="email" name="elpastas" placeholder="Iveskite el.pašto adresą">
           <textarea name="zinute" rows="8" cols="80" placeholder="Rašykite žinutę"></textarea>
            <button type="Submit">Siųsti</button>

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
