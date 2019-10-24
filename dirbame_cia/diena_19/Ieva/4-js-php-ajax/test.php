<?php



//get data passed to from main.js script
$username =  $_POST["name"];
// su apsauga nuo hackinimo:
$username = htmlspecialchars(strip_tags($_POST["name"]), ENT_QUOTES);


//=============return "STRING"=================
// echo "vardas: " . $username  ;
//    OR
//============ return json objekta=================
//$x = $_POST["id"];
//getDoctor;
//$doctor['name'];
// $x = $_POST["name"];
$manoAray = ['vardas' => $_POST["name"], 'location' => $_POST["location"]];
echo json_encode( $manoAray ); //paverciam, uzkoduojam i json formata
