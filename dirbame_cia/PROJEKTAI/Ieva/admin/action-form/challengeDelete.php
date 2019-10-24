<?php
 include("../../config/connectToDB.php");
 include("../../model/challenges.php");  

$nr = $_GET['id'];
// print_r($nr);//test

deleteChallenge($nr);

header("Location: ../adminPanel.php");

// header("Location: page_adminPanel.php?zinute=Sekmingai istrintas gydytojas");