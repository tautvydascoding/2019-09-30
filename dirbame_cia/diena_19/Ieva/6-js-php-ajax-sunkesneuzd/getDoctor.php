<?php

include("db_functions.php");

$nr =  $_POST["nr"];

$gydytojas = getDoctor($nr);

$manoAray = ['name' => $gydytojas["name"], 'lname' => $gydytojas["lname"]];
echo json_encode( $manoAray );
