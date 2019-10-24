<?php

// include("../config/connectToDB.php"); //- include in every file.

//-------------------GET FUNCTION----------------------------------// DONE - TEST - WORKS
// get img

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

//---------------CREATE FUNCTION--------------------------------------------- DONE - TEST - WORKS

//create img (upload to DB)

function createIMG ($name) {
    $name = htmlspecialchars(trim($name), ENT_QUOTES);

    $mySQL_string = "INSERT INTO img 
                            VALUES (
                                NULL, 
                                '$name')
                                ";
    $itemCreated = mysqli_query(getConnect(), $mySQL_string);
    if (!$itemCreated) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
        return NULL;
    }
}


// createIMG("neraFoto.jpg"); 

//---------------DELETE FUNCTION--------------------------------------------- DONE - TEST - WORKS

function deleteIMG($nr) {
    $mySQL_string = "DELETE FROM img 
                            WHERE id = '$nr' 
                            LIMIT 1
                            ";
    $itemDeleted = mysqli_query(getConnect(), $mySQL_string);
    if (!$itemDeleted ) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
        return NULL;
    }
}

// deleteIMG(6);

//---------------UPDATE FUNCTION--------------------------------------------- // DONE - TEST - WORKS

//update img name

function updateIMG ($nr, $name) {
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

//--------------------GET LIST FUNCTION-------------------------------// DONE - TEST - WORKS

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

//test----------------------
// $imgObject = getIMGlist();
// $imgList = mysqli_fetch_assoc($imgObject);

// while ($imgList) {
//    print_r($imgList);
//    echo "<br>";

//  $imgList = mysqli_fetch_assoc($imgObject);
// }
