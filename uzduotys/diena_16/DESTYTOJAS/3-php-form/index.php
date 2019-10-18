<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.min.css">
        <!-- galimos klaidos -->
        <!-- blogas kelias iki failo -->
        <!-- "/" ne i ta puse -->
        <!-- neuzdarete ">" -->
        <link rel="stylesheet" href="css/master.css">
        <!-- !!!! VISSA MANO CSS failas pats zemiausias -->
    </head>

    <body>

        <h1> MOkomes </h1>

        <?php

        // 1. sukurti form'a naudojant metoda (GET) ir  su ivedimo laukais:
        //  vardas, pavarde, telefonas, mygtukas 'registruotis'
        //
        // 2. kai paspaudzia 'registruotis', vartotoja perkelti i registracija.php faila
        // 3. registracija.php faile pasinaudojant globaliu PHP masyvu $_GET atspausdinti
        // vartotojo ivestus duomenis
        // pvz.: print_r( $GET)
        ?>
<h2> Registracija </h2>

<form class="" action="registracija.php" method="get">
    <input type="text" name="vardas" value="" placeholder="Name">
    <input type="text" name="pavarde" value=""  placeholder="Last Name">
    <input type="number" name="tel" value="" placeholder="Phone">

    <input type="submit" name="" value="Registration">
    <!-- ARBA -->
    <button type="submit" name="button">    Registration  </button>
</form>

<?php
    print_r(   $_GET  ); // globalus
    
?>

        <!-- bootstrap4 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- !!! jQuery "slim" yra nepilna versija ir jQuery kai kurios komandos neveikia, reiktu isisdeti kita jQuery  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas visada zemiausias -->
        <script type="text/javascript" src="main.js"> </script>
    </body>
</html>
