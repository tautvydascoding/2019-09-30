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
        Include('db_functions.php');
        ?>

        <form action="registracija.php" method="GET">
            <input name="name" placeholder="Vardas">
            <input name="lname" placeholder="Pavarde">
            <input name="tel" placeholder="Telefonas">
            <button name="knopke" type="submit">Knopke</button>
        </form>

        <!-- 1. index.php faile sukurti HTML form'a naudojant metoda (GET) ir  su ivedimo laukais:
 vardas, pavarde, telefonas, mygtukas 'registruotis' -->
        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
