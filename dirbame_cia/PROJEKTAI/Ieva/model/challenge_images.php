<?php

// include("../config/connectToDB.php"); //- include in every file.

//-------------------GET FUNCTION----------------------------------// DONE - TEST - WORKS

function getIMGforChallenge($nr){
    $resultMysqlObject = mysqli_query(getConnect(),"SELECT name
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


// print_r(getIMGforChallenge(16)); //test

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


//---------------DELETE FUNCTION FOR IMAGES---------------------------------------------

//---------------UPDATE FUNCTION--------------------------------------------- // 

//update user (admin)

function updateIMGkeist ($nr, $name) {
    $nr = htmlspecialchars(trim($nr), ENT_QUOTES);
    $name = htmlspecialchars(trim($name), ENT_QUOTES);

    $mySQL_string = "UPDATE img
                        SET name = '$name'
                        WHERE id = '$nr' 
                        LIMIT 1
                        ";
    $itemUpdated = mysqli_query(getConnect(), $mySQL_string);
    if (!$itemUpdated) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
        return NULL;
    }
}

// updateIMG (4, "testNera.jpg");

//-------------------GET LIST FUNCTION FOR CHALLENGES----------------------------------// DONE - TEST - WORKS

    function getImagesforChallenge($nr) {
        $mySQL_string = "SELECT name
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
    
    // $IMGforChallengeObject = getImagesforChallenge(16);

    // $IMGforChallengeList = mysqli_fetch_assoc($IMGforChallengeObject);

    // while ($IMGforChallengeList ) {
    //     print_r($IMGforChallengeList);
    //     echo "<br>";

    //     $IMGforChallengeList = mysqli_fetch_assoc($IMGforChallengeObject);
    //     }

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


///---pavyzdinis apacioj

// function getRenginys($nr){
//     $rezultataiMySQLObjektas = mysqli_query(getPrisijungimas(),"SELECT * FROM renginiai
//     INNER JOIN koncerto_apras ON renginiai.aprasymo_id = koncerto_apras.id
//     INNER JOIN nuotraukos ON renginiai.aprasymo_id = nuotraukos.koncerto_id
//     WHERE aprasymo_id = '$nr' LIMIT 1
//      ");
// }
