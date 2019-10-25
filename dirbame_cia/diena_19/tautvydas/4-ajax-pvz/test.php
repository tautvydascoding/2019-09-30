<?php



//get data passed to from main.js script
$username =  $_POST["name"];
$city =  $_POST["location"];
// su apsauga nuo hackinimo:
$username = htmlspecialchars(strip_tags($_POST["name"]), ENT_QUOTES);


//=============return "STRING"=================
// echo "vardas: " . $username  ;
//    OR
//============ return json objekta=================
$vard = $_POST["name"];
$loc = $_POST["location"];
$manoAray = ['vardas' => $vard,'vietove' => $loc   ];
echo json_encode( $manoAray ); // paverciam i JSON
