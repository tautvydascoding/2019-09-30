<?php
// 1. sukurti index.php
// 2. parasyti Forma su vienu ivedimo lauku:
//  'elpastas' ir mygtuku "subscribe"

// 2. kai paspaudzia 'subscribe',
// vartotoja perkelti i subscribe.php faila
// formoje action='subscribe.php'
//
// 3.
// 3. subscribe.php faile
// isvesti elpasta

// 5. subscribe.php faile suprogramuoti tikrinima:
// kad vartotojui nieko neivedus ismestu pranesima
// jeigu vartotojas kazka ivede - isvesti jo email i ekrana
// jeig vartotojas nieko neivede - isvesti pranesima, kad elpastas neivestas




// PVZ
// ar masyve egzistuoja stalcius pavadinimu "tekstas"
if ( array_key_exists('tekstas', $_GET) ){
    $x = $_GET['tekstas'];
    echo "stalcius 'tekstas' egzistuoja:" . $x .  "<hr />";
} else {
    echo "stalciaus tolkiu pavadinimu 'tekstas' nera";
}

$y;
// AR "y" turi kokia nors reiksme
if ( isset($y) ) {
    echo $y;
} else {
    echo "y neturi reiksmes <hr />";
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- mano css failas visada pats zemiausias -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet"  href="css/style.css">
    </head>
    <body>
        <h1>Mokomes patikrinti ivedimo lauka</h1>

        <form action="subscribe.php" method="get">
            <label for=""> Jusu el.pastas </label>
            <input type="text" name="elpastas">

            <button type="submit">Prenumeruoti</button>

        </form>



        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
<!--        <script type="text/javascript" src='main.js'> </script>-->
    </body>
</html>
