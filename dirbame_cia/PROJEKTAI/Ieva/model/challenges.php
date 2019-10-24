<?php

//include("../config/connectToDB.php"); //- include in every file.

//---------------GET FUNCTION------------------------------------------DONE - TEST - WORKS

// get challenge

function getChallenge($nr) {
    $resultMysqlObject = mysqli_query(getConnect(),"SELECT * FROM challenges WHERE id = '$nr'");
        if (mysqli_num_rows($resultMysqlObject) > 0) {
            $resultArray = mysqli_fetch_assoc($resultMysqlObject);
        return $resultArray; 
        } else {
            echo "ERROR: Cannot get challenge: $nr.". mysqli_error(getConnect());
            return NULL;
        }
}

function getChallenge2($title, $description, $tag) {
    $resultMysqlObject = mysqli_query(getConnect(),"SELECT id FROM challenges 
                                                            WHERE title = '$title' AND
                                                                description = '$description' AND
                                                                  tag = '$tag'
                                                            ");
    if (mysqli_num_rows($resultMysqlObject) > 0) {
            $resultArray = mysqli_fetch_assoc($resultMysqlObject);
        return $resultArray; 
        } else {
            echo "ERROR: Cannot get challenge: $title.". mysqli_error(getConnect());
            return NULL;
        }
}

// print_r(getChallenge(2));

//---------------CREATE FUNCTION--------------------------------------------- DONE - TEST - WORKS
 
//create challenge

function createChallenge($title, $description, $tag) {
    $title = htmlspecialchars(trim($title), ENT_QUOTES);
    $description = htmlspecialchars(trim($description), ENT_QUOTES);
    $tag = htmlspecialchars(trim($tag), ENT_QUOTES);

    $mySQL_string = "INSERT INTO challenges
                            VALUES (
                                NULL,
                                '$title',
                                '$description',
                                '$tag',
                                NOW())
                                ";
    $itemCreated = mysqli_query(getConnect(), $mySQL_string);
    if (!$itemCreated) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
        return NULL;
    }
}

//createChallenge("Meditation day", "Meditacija – tai paleisti pyktį iš praeities, praeities įvykius ir visus ateities planus. Meditacija – tai priimti šią akimirką ir giliai išgyventi kiekvieną akimirką. Poilsis medituojant gilesnis už giliausią miegą, nes medituodami išsilaisviname nuo visų minčių ir troškimų. Siūlau meditaciją pradėti atpalaiduojant kūną. Pajausk kūną nuo kojų pirštelių iki pat viršugalvio (iš lėto). Jei mintys pradės klysti į šalį, įsigilint į savo kvepavimą.", "Relax");

//---------------DELETE FUNCTION--------------------------------------------- DONE - TEST - WORKS

//delete challenge

function deleteChallenge($nr) {
    $mySQL_string = "DELETE FROM challenges
                            WHERE id = '$nr' 
                            LIMIT 1
                            ";
    $itemDeleted  = mysqli_query(getConnect(), $mySQL_string);
    if (!$itemDeleted ) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
        return NULL;
    }
}

// deleteChallenge(1);

//---------------UPDATE FUNCTION--------------------------------------------- DONE - TEST - WORKS

//update challenge(admin)

function updateChallenge ($nr, $title, $description, $tag) {
    $nr = htmlspecialchars(trim($nr), ENT_QUOTES);
    $title = htmlspecialchars(trim($title), ENT_QUOTES);
    $description = htmlspecialchars(trim($description), ENT_QUOTES);
    $tag = htmlspecialchars(trim($tag), ENT_QUOTES);

    $mySQL_string = "UPDATE challenges
                        SET 
                        title = '$title', 
                        description = '$description',
                        tag = '$tag'
                        WHERE id = '$nr' 
                        LIMIT 1
                        ";
    $itemUpdated = mysqli_query(getConnect(), $mySQL_string);
    if (!$itemUpdated) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
        return NULL;
    }
}

// updateChallenge (2, "Intresting questions", "do you even like your Friends lets find out", "Random");

//---------------GET LIST FUNCTION--------------------------------------------- DONE - TEST - WORKS

// get challenges list

function getChallenges($count = 9999) {
    $mySQL_string = "SELECT * FROM challenges 
                                LIMIT $count
                                ";
    $getList = mysqli_query(getConnect(), $mySQL_string);
    if (!$getList ) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
            return NULL;
    } return  $getList;
} 

// $challengeObject = getChallenges();

// $challengesList = mysqli_fetch_assoc($challengeObject);

// while ($challengesList) {
//    print_r($challengesList);
//    echo "<br>";
//    $challengesList = mysqli_fetch_assoc($challengeObject);
// }


