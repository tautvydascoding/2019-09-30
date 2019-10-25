<?php 

include("../../config/connectToDB.php");
include("../../model/challenges.php");    
include('../../model/challenge_images.php');

$title = $_GET['title'];
$description = $_GET['description'];
$tag = $_GET['tag'];

createChallenge($title, $description, $tag);

if ($_GET['imgID1'] !='none') {
  createChallengeIMGtable(getChallengeID(), $_GET['imgID1']);
}

if ($_GET['imgID2'] !='none') {
    createChallengeIMGtable(getChallengeID(), $_GET['imgID2']);
  }

if ($_GET['imgID3'] !='none') {
createChallengeIMGtable(getChallengeID(), $_GET['imgID3']);
}
  

// PHP redirect
header("Location: ../adminPanel.php");