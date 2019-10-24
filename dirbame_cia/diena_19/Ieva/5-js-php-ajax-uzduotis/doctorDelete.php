<?php

include('db_functions.php');

$nr = $_POST['nr'];

deleteDoctor($nr);



// // //=============return "STRING"=================
//  echo "vardas: " . $nr ;
 
// //    OR
// //============ return json objekta=================
// //$x = $_POST["id"];
// //getDoctor;
// //$doctor['name'];
// // $x = $_POST["name"];
// $manoAray = ['vardas' => $_POST["name"], 'location' => $_POST["location"]];
// echo json_encode( $manoAray ); //paverciam, uzkoduojam i json formata
