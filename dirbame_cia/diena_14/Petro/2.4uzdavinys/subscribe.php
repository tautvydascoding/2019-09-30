<?php
print_r( $_GET );

// patikrinam ar vartotojas kazka ivede


if ( array_key_exists('elpastas', $_GET) ){
    if ($_GET ['elpastas'] !=""){
        echo "vartotojas IVEDE email";
    } else {
        echo "Neivestas email";
    }
}