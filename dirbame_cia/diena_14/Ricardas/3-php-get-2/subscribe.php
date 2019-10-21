<?php 
print_r($_GET);

if (array_key_exists('emailas', $_GET)){
    $x = $_GET['emailas'];
    echo "stalcius 'emailas' egzistuoja:" . $x .  "<hr>";
} elseif($_GET['emailas'] == $NULL) {
    echo "nieko neivedei";
} else {
    echo "stalciaus tolkiu pavadinimu 'emailas' nera";
}