<?php 
    session_start();
    if ( isset( $_SESSION['user_id'] ) ) {
    ?>

<?php

include("../../config/connectToDB.php");
include("../../model/challenges.php");
include('../../model/challenge_images.php');

$nr = $_GET['id'];
$title = $_GET['title'];
$description = $_GET['description'];
$tag = $_GET['tag'];

$_GET['imgID1'];
$_GET['imgID2'];
$_GET['imgID3'];

echo "<hr>";
//--Challenge update----------------------------------------------------------------------------------

updateChallenge ($nr, $title, $description, $tag);


//-----Challenge IMG update---------------------------------------------------------------------------

//----Challenge IMG 1 update---------------------------------------------------------------------------

        $imgArray = [];

        $IMGforChallengeObject = getImagesforChallenge($nr);

        $IMGforChallengeList = mysqli_fetch_assoc($IMGforChallengeObject);

        while ($IMGforChallengeList) {
            echo $IMGforChallengeList['id'];
            $imgArray[] += $IMGforChallengeList['id'];
            $IMGforChallengeList = mysqli_fetch_assoc($IMGforChallengeObject);

        }

        $newIMG = $_GET['imgID1'];
   
        if (!$imgArray && $newIMG =='none') {
            echo "no changes";
            } elseif (!$imgArray && $newIMG !='none') {
                  echo "creating new"; 
                  createChallengeIMGtable ($nr, $newIMG);
                } elseif ($imgArray && $newIMG =='none') {
                    echo "deleting item"; 
                    $oldIMG = $imgArray[0];
                    deleteChallengeWithRelatedIMGforUpdate($nr, $oldIMG);
                        } else {
                            echo "changing item old to new"; 
                            $oldIMG = $imgArray[0];
                            updateIMGforChallenge ($nr, $newIMG, $oldIMG);
        }
        
   //----Challenge IMG 2 update (does not work properly)-------------------------------------------------
  
        // $IMGforChallengeObject = getImagesforChallenge($nr);

        // $IMGforChallengeList = mysqli_fetch_assoc($IMGforChallengeObject);

        // while ($IMGforChallengeList) {
        //         echo $IMGforChallengeList['id'];
        //         $imgArray[] += $IMGforChallengeList['id'];
        //         $IMGforChallengeList = mysqli_fetch_assoc($IMGforChallengeObject);

        // }

        // $newIMG = $_GET['imgID2'];

        // if ($imgArray<=1 && $newIMG =='none') {
        //     echo "no changes";
        //     } elseif ($imgArray<=1 && $newIMG !='none') {
        //           echo "creating new"; 
        //           createChallengeIMGtable ($nr, $newIMG);
        //         } elseif ($imgArray<2 && $newIMG =='none') {
        //             echo "deleting item"; 
        //             $oldIMG = $imgArray[1];
        //             deleteChallengeWithRelatedIMGforUpdate($nr, $oldIMG);
        //                 } else {
        //                     echo "changing item old to new"; 
        //                     $oldIMG = $imgArray[1];
        //                     updateIMGforChallenge ($nr, $newIMG, $oldIMG);
        // }



         //----Challenge IMG 3 update (does not work properly)---------------------------------------------


        // $IMGforChallengeObject = getImagesforChallenge($nr);

        // $IMGforChallengeList = mysqli_fetch_assoc($IMGforChallengeObject);

        // while ($IMGforChallengeList) {
        //     echo $IMGforChallengeList['id'];
        //     $imgArray[] += $IMGforChallengeList['id'];
        //     $IMGforChallengeList = mysqli_fetch_assoc($IMGforChallengeObject);

        // }

        // $newIMG = $_GET['imgID3'];

        // if ($imgArray<=2 && $newIMG =='none') {
        //     echo "no changes";
        //     } elseif ($imgArray<=2 && $newIMG !='none') {
        //           echo "creating new"; 
        //           createChallengeIMGtable ($nr, $newIMG);
        //         } elseif ($imgArray<3 && $newIMG =='none') {
        //             echo "deleting item"; 
        //             $oldIMG = $imgArray[2];
        //             deleteChallengeWithRelatedIMGforUpdate($nr, $oldIMG);
        //                 } else {
        //                     echo "changing item old to new"; 
        //                     $oldIMG = $imgArray[2];
        //                     updateIMGforChallenge ($nr, $newIMG, $oldIMG);
        // }


        //---Just in case saved code for IMG2 and IMG3 update------------------------------------------------


        // if ($IMGforChallengeList == 0) {
        //     createChallengeIMGtable ($nr, $newIMG);
        // } else {
        //     $newIMG = $_GET['imgID2'];
        //     $oldIMG = $imgArray[1];
        //     updateIMGforChallenge ($nr, $newIMG, $oldIMG);
        // }

        
        // if ($IMGforChallengeList == 0) {
        //     createChallengeIMGtable ($nr, $newIMG);
        // } else {
        //     $newIMG = $_GET['imgID3'];
        //     $oldIMG = $imgArray[2];
        //     updateIMGforChallenge ($nr, $newIMG, $oldIMG);
        // }
?>

<? } else {
        header("Location: ../adminLogin.php");
        exit;
    }
    ?>