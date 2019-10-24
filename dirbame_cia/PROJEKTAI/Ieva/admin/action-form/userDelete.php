<?php
include("../../config/connectToDB.php");
include('../../model/users.php');

$nr = $_GET['id'];
// print_r($nr);//test

deleteUser($nr);

header("Location: ../adminPanel.php");

// header("Location: page_adminPanel.php?zinute=Sekmingai istrintas gydytojas");