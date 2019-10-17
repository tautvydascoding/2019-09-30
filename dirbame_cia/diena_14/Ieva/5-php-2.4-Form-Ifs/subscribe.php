<?php 

// $jusuEmail = $_GET['elPastas'];

// echo "Your email address is: $jusuEmail";

//  if ( array_key_exists('elPastas', $_GET) ){
//     $jusuEmail = $_GET['elPastas'];
//     echo "Your email address is:" . $jusuEmail .  "<hr />";
// } else {
//     echo "stalciaus tolkiu pavadinimu 'elPastas' nera";
// }

if (array_key_exists('elPastas', $_GET)) {
    $jusuEmail = $_GET['elPastas'];
    if ($_GET['elPastas'] != "") {
        echo "Your email address is:" . $jusuEmail .  "<hr />";
        } else {
            echo "Iveskite savo email";
        }
}