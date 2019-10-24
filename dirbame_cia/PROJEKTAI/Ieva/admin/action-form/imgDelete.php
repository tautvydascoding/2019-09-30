<?php
include("../../config/connectToDB.php");
include('../../model/img.php');
include('../../model/challenge_images.php');

$nr = $_GET['id'];
// print_r($nr);//test

deleteIMGwithRelatedChallenges($nr);
 
deleteIMG($nr);

header("Location: ../adminPanel.php");

// header("Location: page_adminPanel.php?zinute=Sekmingai istrintas gydytojas");