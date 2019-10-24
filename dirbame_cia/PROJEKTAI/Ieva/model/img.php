<?php

include("../config/connectToDB.php"); //- include in every file.

//---------------------IMG SECTION----------------------------//

//-------------------GET IMG----------------------------------//

function getIMG($nr) {
    $resultMysqlObject = mysqli_query(getConnect(),"SELECT * FROM img WHERE id = '$nr'");
        if (mysqli_num_rows($resultMysqlObject) > 0) {
            $resultArray = mysqli_fetch_assoc($resultMysqlObject);
        return $resultArray; 
        } else {
            echo "ERROR: Cannot get challenge: $nr.". mysqli_error(getConnect());
            return NULL;
        }
}


//--------------------LIST-------------------------------//

function getIMGlist($count = 9999) {
    $mySQL_string = "SELECT * FROM img
                                LIMIT $count
                                ";
    $getList = mysqli_query(getConnect(), $mySQL_string);
    if (!$getList ) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
            return NULL;
    } return  $getList;
} 

// $imgObject = getIMG();

// $imgList = mysqli_fetch_assoc($imgObject);

// while ($imgList) {
//    print_r($imgList);
//    echo "<br>";

//  $imgList = mysqli_fetch_assoc($imgObject);
// }

//---------------------challenge_images----------------------------//

//-------------------CREATE----------------------------------//


function createChallengeIMGtable ($challenge_id, $img_id) {
    // $challenge_id = htmlspecialchars(trim($challenge_id), ENT_QUOTES);
    // $img_id = htmlspecialchars(trim($img_id), ENT_QUOTES);

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

//-------------------GET----------------------------------//

    function getIMGforChallenge($nr){
        $resultMysqlObject = mysqli_query(getConnect(),"SELECT name
                                                            FROM img 
                                                            INNER JOIN challenge_images 
                                                            ON img.id = challenge_images.img_id
                                                            WHERE challenge_id = '$nr' 
                                                            ");
        
        if (mysqli_num_rows($resultMysqlObject) > 0) {
            // $resultArray = mysqli_fetch_assoc($resultMysqlObject);
        return $resultMysqlObject; 
        } else {
            echo "ERROR: Cannot get challenge: $nr.". mysqli_error(getConnect());
            return NULL;
        }
    }
    

    
    
        // print_r($IMGforChallengeArray);

    // echo $IMGforChallengeArray['name'];
    
    $IMGforChallengeObject = getIMGforChallenge(16);

    $IMGforChallengeList = mysqli_fetch_assoc($IMGforChallengeObject);

    while ($IMGforChallengeList ) {
        print_r($IMGforChallengeList );
        echo "<br>";
        $IMGforChallengeList = mysqli_fetch_assoc($IMGforChallengeObject);
        }


// function getRenginys($nr){
//     $rezultataiMySQLObjektas = mysqli_query(getPrisijungimas(),"SELECT * FROM renginiai
//     INNER JOIN koncerto_apras ON renginiai.aprasymo_id = koncerto_apras.id
//     INNER JOIN nuotraukos ON renginiai.aprasymo_id = nuotraukos.koncerto_id
//     WHERE aprasymo_id = '$nr' LIMIT 1
//      ");
// }


// getImgChal();

// $testList = mysqli_fetch_assoc($rezultataiMySQLObjektas);

// print_r($testList);
