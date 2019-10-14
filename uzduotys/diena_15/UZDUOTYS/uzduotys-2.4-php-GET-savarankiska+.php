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
