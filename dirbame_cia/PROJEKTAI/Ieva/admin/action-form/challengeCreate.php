<?php 

include("../../config/connectToDB.php");
include("../../model/challenges.php");    
include('../../model/img.php');

$title = $_GET['title'];
$description = $_GET['description'];
$tag = $_GET['tag'];

// echo "labas".$title.$description.$tag.$img_id;//test

createChallenge($title, $description, $tag);

$challengeArray = getChallenge2($title, $description, $tag);
$challenge_id = $challengeArray['id'];

// print_r($challenge_id);

$img_id = $_GET['imgID'];

// print_r($img_id);

createChallengeIMGtable ($challenge_id, $img_id);



// PHP redirect
// header("Location: index.php?zinute=Sekmingai sukurtas naujas gydytojas");