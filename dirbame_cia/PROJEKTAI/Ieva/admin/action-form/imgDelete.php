<?php
include("../../config/connectToDB.php");
include('../../model/img.php');

$nr = $_GET['id'];
// print_r($nr);//test

deleteIMG($nr);

header("Location: ../adminPanel.php");

// header("Location: page_adminPanel.php?zinute=Sekmingai istrintas gydytojas");