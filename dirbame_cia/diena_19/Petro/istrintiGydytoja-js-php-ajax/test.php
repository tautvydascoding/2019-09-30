<?php

include_once ("db_functions.php");

//get data passed to from main.js script
//$username =  $_POST["name"];
//// su apsauga nuo hackinimo:
//$username = htmlspecialchars(strip_tags($_POST["name"]), ENT_QUOTES);


//=============return "STRING"=================
//echo "vardas: " . $username  ;
//    OR
//============ return json objekta=================
//print_r($_POST);
 $x = $_POST["id"];
// echo "$x";
deleteDoctor($x);

// $manoAray = ['vardas' => $x  ];
// echo json_encode( $manoAray );
