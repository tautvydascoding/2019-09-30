<?php

// include("../config/connectToDB.php"); //- include in every file.

//---------------GET FUNCTION------------------------------------------DONE - TEST - WORKS

//get About-page item

function getAbout($nr) {
    $resultMysqlObject = mysqli_query(getConnect(),"SELECT * FROM about WHERE id = '$nr'");
        if (mysqli_num_rows($resultMysqlObject) > 0) { 
            $resultArray = mysqli_fetch_assoc($resultMysqlObject);
        return $resultArray; 
        } else {
            echo "ERROR: Cannot get information for About-page: $nr.". mysqli_error(getConnect());
            return NULL;
        }
}

// print_r(getAbout(1));

//---------------CREATE FUNCTION--------------------------------------------- DONE - TEST - WORKS
 
//create About-page item

function createAbout($title, $description) {
    $title = htmlspecialchars(trim($title), ENT_QUOTES);
    $description = htmlspecialchars(trim($description), ENT_QUOTES);

    $mySQL_string = "INSERT INTO about 
                            VALUES (
                                NULL, 
                                '$title', 
                                '$description')
                                ";
    $itemCreated = mysqli_query(getConnect(), $mySQL_string);
    if (!$itemCreated) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
        return NULL;
    }
}

// createAbout('The main idea', 'Challenges to make your day unusual and positive. You can choose between various challenge sets. stuff stuff stuff');

//---------------DELETE FUNCTION--------------------------------------------- DONE - TEST - WORKS

//delete About-page item

function deleteAbout($nr) {
    $mySQL_string = "DELETE FROM about 
                            WHERE id = '$nr' 
                            LIMIT 1
                    ";
    $itemDeleted  = mysqli_query(getConnect(), $mySQL_string);
    if (!$itemDeleted ) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
        return NULL;
    }
}

// deleteAbout(1);

//---------------UPDATE FUNCTION--------------------------------------------- DONE - TEST - WORKS

//update About-page item

function updateAbout($nr, $title, $description) {
    $nr = htmlspecialchars(trim($nr), ENT_QUOTES);
    $title = htmlspecialchars(trim($title), ENT_QUOTES);
    $description = htmlspecialchars(trim($description), ENT_QUOTES);
   
    $mySQL_string = "UPDATE about
                        SET 
                        title = '$title', 
                        description = '$description'
                        WHERE id = '$nr' 
                        LIMIT 1
                        ";
    $itemUpdated = mysqli_query(getConnect(), $mySQL_string);
    if (!$itemUpdated) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
        return NULL;
    }
}

// updateAbout (2, "15 Challenge Days", "15 days of possitive challenges and great adventure shit. woop woop stuff");

//---------------GET LIST FUNCTION--------------------------------------------- DONE - TEST - WORKS

// get About-page items

function getAboutItems($count = 9999) {
    $mySQL_string = "SELECT * FROM about
                                LIMIT $count
                                ";
    $getList = mysqli_query(getConnect(), $mySQL_string);
    if (!$getList ) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
            return NULL;
    } return  $getList;
} 

// $aboutItemsObject = getAboutItems();

// $aboutItemsList = mysqli_fetch_assoc($aboutItemsObject);

// while ($aboutItemsList) {
//    print_r($aboutItemsList);
//    echo "<br>";
//    $aboutItemsList = mysqli_fetch_assoc($aboutItemsObject);
// }


