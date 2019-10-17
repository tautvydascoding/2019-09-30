<?php


print_r(  $_GET   );

// uzduotis - patikrinti ar vartotojas ivede savo email
// jei ivede - isvesti jo ivesta email
// jei neivede - isvesti pranesima apie tai

if (array_key_exists('elpastas', $_GET)) {
    if ($_GET['elpastas'] != "") {
        echo "vartotojas ivede email! ";
    } else {
        echo "Iveskite savo email";
    }
}
 ?>
