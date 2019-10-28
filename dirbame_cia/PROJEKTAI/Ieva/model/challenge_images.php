<?php

// include("../config/connectToDB.php"); //- include in every file.

//-------------------GET FUNCTION----------------------------------// DONE - TEST - WORKS

function getIMGforChallenge($nr){
    $resultMysqlObject = mysqli_query(getConnect(),"SELECT id, name
                                                        FROM img 
                                                        INNER JOIN challenge_images 
                                                        ON img.id = challenge_images.img_id
                                                        WHERE challenge_id = '$nr' 
                                                        ");
    
    if (mysqli_num_rows($resultMysqlObject) > 0) {
        $IMGforChallengeArray = mysqli_fetch_assoc($resultMysqlObject);
    return $IMGforChallengeArray; 
    } else {
        echo "ERROR: Cannot get challenge: $nr.". mysqli_error(getConnect());
        return NULL;
    }
}

// print_r(getIMGforChallenge(28)); //test
//-----------------------------------------------------------------------------

function getIMGforChallenge2($nr){
    $resultMysqlObject = mysqli_query(getConnect(),"SELECT id, name
                                                        FROM img 
                                                        INNER JOIN challenge_images 
                                                        ON img.id = challenge_images.img_id
                                                        WHERE challenge_id = '$nr'
                                                        ");
    
    if (mysqli_num_rows($resultMysqlObject) > 0) {
        $IMGforChallengeArray = mysqli_fetch_assoc($resultMysqlObject);
    return $IMGforChallengeArray; 
    } else {
        echo "ERROR: Cannot get challenge: $nr.". mysqli_error(getConnect());
        return NULL;
    }
}


//-------------------CREATE FUNCTION----------------------------------// DONE - TEST - WORKS

function createChallengeIMGtable ($challenge_id, $img_id) {
        $mySQL_string = "INSERT INTO challenge_images
                                VALUES (
                                    $challenge_id, 
                                    $img_id)
                                    ";
    $itemCreated = mysqli_query(getConnect(), $mySQL_string);
    if (!$itemCreated) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
        return NULL;
    }
}

// createChallengeIMGtable (19, 3);

//---------------DELETE FUNCTION FOR CHALLENGES---------------------------------------------

function deleteChallengeWithRelatedIMG($nr) {
    $mySQL_string = "DELETE FROM challenge_images 
                        WHERE challenge_id = '$nr'
                        ";

    $itemDeleted = mysqli_query(getConnect(), $mySQL_string);
    if (!$itemDeleted ) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
        return NULL;
    }
}

// deleteImagesChallengeTableRow(16);

//------------------------------------------

function deleteChallengeWithRelatedIMGforUpdate($nr, $oldIMG) {
    $mySQL_string = "DELETE FROM challenge_images 
                        WHERE challenge_id = '$nr' && img_id = $oldIMG
                        LIMIT 1
                        ";

    $itemDeleted = mysqli_query(getConnect(), $mySQL_string);
    if (!$itemDeleted ) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
        return NULL;
    }
}

//--------------------------------------------

function deleteIMGwithRelatedChallenges($nr) {
    $mySQL_string = "DELETE FROM challenge_images 
                        WHERE img_id = '$nr'
                        ";

    $itemDeleted = mysqli_query(getConnect(), $mySQL_string);
    if (!$itemDeleted ) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
        return NULL;
    }
}

//---------------UPDATE FUNCTION--------------------------------------------- // 

//update challenge (update cha-img table row)
//challenge nr

function updateIMGforChallenge ($nr, $img, $oldIMG) {
    $nr = htmlspecialchars(trim($nr), ENT_QUOTES);
    $name = htmlspecialchars(trim($img), ENT_QUOTES);

    $mySQL_string = "UPDATE challenge_images 
                        SET img_id = '$img'
                        WHERE challenge_id = '$nr' && img_id = $oldIMG
                        LIMIT 1
                        ";
    $itemUpdated = mysqli_query(getConnect(), $mySQL_string);
    if (!$itemUpdated) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
        return NULL;
    }
}


//UPDATE stock SET unit_price = unit_price * 0.95 
  // WHERE unit_price IN
    //  (SELECT unit_price FROM stock WHERE unit_price > 50);

    //update challenge_images SET img_id = '$img'

// updateIMGforChallenge ($nr, $name);

//-------------------GET LIST FUNCTION FOR CHALLENGES----------------------------------// DONE - TEST - WORKS

    function getImagesforChallenge($nr) {
        $mySQL_string = "SELECT id, name
                            FROM img 
                            INNER JOIN challenge_images 
                            ON img.id = challenge_images.img_id
                            WHERE challenge_id = '$nr' 
                            ORDER BY id ASC
                            ";
        $getList = mysqli_query(getConnect(), $mySQL_string);
        if (!$getList ) {
            echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
                return NULL;
        } return  $getList;
    } 
    
    // $IMGforChallengeObject = getImagesforChallenge($nr);

    // $IMGforChallengeList = mysqli_fetch_assoc($IMGforChallengeObject);

    // while ($IMGforChallengeList ) {
    //     print_r($IMGforChallengeList);
    //     echo "<br>";

    //     $IMGforChallengeList = mysqli_fetch_assoc($IMGforChallengeObject);
    //     }

    function getImagesforChallengeNotOrdered($nr) {
        $mySQL_string = "SELECT id, name
                            FROM img 
                            INNER JOIN challenge_images 
                            ON img.id = challenge_images.img_id
                            WHERE challenge_id = '$nr'
                            ";
        $getList = mysqli_query(getConnect(), $mySQL_string);
        if (!$getList ) {
            echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
                return NULL;
        } return  $getList;
    } 

//-------------------GET LIST FUNCTION FOR IMAGES----------------------------------// DONE - TEST - WORKS
    
function getChallengeforImage($nr) {
    $mySQL_string = "SELECT id, title
                        FROM challenges 
                        INNER JOIN challenge_images 
                        ON challenges.id = challenge_images.challenge_id
                        WHERE img_id = '$nr' 
                        ";
    $getList = mysqli_query(getConnect(), $mySQL_string);
    if (!$getList ) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
            return NULL;
    } return  $getList;
} 

// $ChallengeforIMGobject = getChallengeforImage(4);

// $ChallengeforIMGlist = mysqli_fetch_assoc($ChallengeforIMGobject);

// while ($ChallengeforIMGlist) {
//     print_r($ChallengeforIMGlist);
//     echo "<br>";

//     $ChallengeforIMGlist = mysqli_fetch_assoc($ChallengeforIMGobject);
//     }

// UPDATE challenge_images SET img_id = 11 WHERE challenge_id = 30 && img_id=16 LIMIT 1;