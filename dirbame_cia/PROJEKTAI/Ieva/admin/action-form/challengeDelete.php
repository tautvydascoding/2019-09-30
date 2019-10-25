<?php
 include("../../config/connectToDB.php");
 include("../../model/challenges.php");
 include('../../model/challenge_images.php');
  

$nr = $_GET['id'];
// print_r($nr);//test

deleteChallengeWithRelatedIMG($nr);

deleteChallenge($nr);

header("Location: ../adminPanel.php");

// header("Location: page_adminPanel.php?zinute=Sekmingai istrintas gydytojas");