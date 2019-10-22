<?php

// include("../config/connectToDB.php"); //- include in every file.

//---------------GET FUNCTION------------------------------------------DONE - TEST - WORKS

//get suggested challenge

function getSuggestion($nr) {
    $resultMysqlObject = mysqli_query(getConnect(),"SELECT * FROM suggested_challenges WHERE id = '$nr'");
        if (mysqli_num_rows($resultMysqlObject) > 0) { 
            $resultArray = mysqli_fetch_assoc($resultMysqlObject);
        return $resultArray; 
        } else {
            echo "ERROR: Cannot get suggested challenge: $nr.". mysqli_error(getConnect());
            return NULL;
        }
}

// print_r(getSuggestion(1));

//---------------CREATE FUNCTION--------------------------------------------- DONE - TEST - WORKS
 
//create suggestion (for user - suggestion input) 

function createSuggestion($user_id, $suggestion) {
    $user_id = htmlspecialchars(trim($user_id), ENT_QUOTES);
    $suggestion = htmlspecialchars(trim($suggestion), ENT_QUOTES);

    $mySQL_string = "INSERT INTO suggested_challenges
                            VALUES (
                                NULL,
                                '$user_id',
                                '$suggestion')
                                ";
    $itemCreated = mysqli_query(getConnect(), $mySQL_string);
    if (!$itemCreated) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
        return NULL;
    }
}

// createSuggestion(2, "Familia iz Familia what pew pew pew stuff");

//---------------DELETE FUNCTION--------------------------------------------- DONE - TEST - WORKS

//delete suggested challenge

function deleteSuggestion($nr) {
    $mySQL_string = "DELETE FROM suggested_challenges
                            WHERE id = '$nr' 
                            LIMIT 1
                    ";
    $itemDeleted  = mysqli_query(getConnect(), $mySQL_string);
    if (!$itemDeleted ) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
        return NULL;
    }
}

// deleteSuggestion(1);

//---------------GET LIST FUNCTION--------------------------------------------- DONE - TEST - WORKS

//get suggested challenges list

function getSuggestions($count = 9999) {
    $mySQL_string = "SELECT * FROM suggested_challenges 
                                LIMIT $count
                                ";
    $getList = mysqli_query(getConnect(), $mySQL_string);
    if (!$getList ) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
            return NULL;
    } return  $getList;
} 

// $suggestionObject = getSuggestions();

// $suggestionsList = mysqli_fetch_assoc($suggestionObject);

// while ($suggestionsList) {
//    print_r($suggestionsList);
//    echo "<br>";
//    $suggestionsList = mysqli_fetch_assoc($suggestionObject);
// }

