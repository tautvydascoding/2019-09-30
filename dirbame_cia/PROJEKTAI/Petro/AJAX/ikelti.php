<?php
include_once ("../model/db_prekes_functions.php");
//print_r(getPrekePagalId('6'));
//============ return json objekta=================
//print_r($_POST);
$kategorija = $_POST["kategorija"];
$pavadinimas = $_POST["pavadinimas"];
$aprasymas = $_POST["aprasymas"];
$kaina = $_POST["kaina"];
$nuolaida = $_POST["nuolaida"];
$pozicija = $_POST["pozicija"];
$kiekis = $_POST["kiekis"];
$img_small = $_POST["img_small"];
$img_big = $_POST["img_big"];

// echo "$x";
 createPreke('$kategorija','$pavadinimas', '$aprasymas',
     '$kaina', '$nuolaida', '$pozicija','$kiekis',
     '$img_small','$img_big');
