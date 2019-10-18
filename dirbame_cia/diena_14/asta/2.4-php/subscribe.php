<?php

print_r ($_GET);

if ( array_key_exists('elpastas', $_GET) ){
    $x = $_GET['elpastas'];
    echo "stalcius 'elpastas' egzistuoja:" . $x .  "<hr />";
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
