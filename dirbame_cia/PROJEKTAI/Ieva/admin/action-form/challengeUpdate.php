<?php

include("../../config/connectToDB.php");
include("../../model/challenges.php");
include('../../model/challenge_images.php');

// print_r($_GET);//test

$nr = $_GET['id'];
$title = $_GET['title'];
$description = $_GET['description'];
$tag = $_GET['tag'];

$_GET['imgID1'];
$_GET['imgID2'];
$_GET['imgID3'];



//echo $nr."<br>".$title."<br>".$description."<br>". $tag."<br>".$_GET['imgID1']."<br>".$_GET['imgID2']."<br>".$_GET['imgID3']."<br><hr>";//test

// updateChallenge ($nr, $title, $description, $tag);

//


    // $img = 0;

    // $img = $_GET['imgID1'];

    // $img = $_GET['imgID2'];

    // $img = $_GET['imgID3'];

    // updateIMGforChallenge ($nr, $img );
//---------------------------------------

   

        // $IMGforChallengeObject = getImagesforChallenge($nr);

        // $IMGforChallengeList = mysqli_fetch_assoc($IMGforChallengeObject);

        // echo $IMGforChallengeList['id']."<br>";

        // while ($IMGforChallengeList) {
        //     print_r($IMGforChallengeList);

            // if ($imgList['id']==$IMGforChallengeList['id']) {
            //     $selected = "selected='selected'";
            //     $arRadomCHIMG = true;
            //     break;
            // }
            
        //     $IMGforChallengeList = mysqli_fetch_assoc($IMGforChallengeObject);

        // }
          $img = 0;



            // $img = $_GET['imgID1'];

            // $img = $_GET['imgID2'];

            // $img = $_GET['imgID3'];

        // $IMGforChallengeObject = getImagesforChallenge($nr);

        // $IMGforChallengeList = mysqli_fetch_assoc($IMGforChallengeObject);
    
        // for ($i=1; $i < 4; $i++) {
        //     while ($IMGforChallengeList ) {
        //         $img = $_GET["imgID$i"];
        //         echo $img;

        //             if ($IMGforChallengeList['id']!=$img) {

        //                 updateIMGforChallenge ($nr, $img );
        //                 $img=0;
        //             }
                    
        //         echo "<hr>";

        //         $IMGforChallengeList = mysqli_fetch_assoc($IMGforChallengeObject);
        //         }
        // }

    

// header("Location: ../adminPanel.php");
