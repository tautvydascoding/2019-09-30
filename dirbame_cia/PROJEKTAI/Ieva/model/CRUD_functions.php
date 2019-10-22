<?php 

//prisijungimas

$debug_mode = 0;

define('MYSQL_VARTOTOJAS', 'root');
define('MYSQL_SLAPTAZODIS', 'root');
define('DB_VARDAS', 'challenge_yourself');
define('DB_HOST', 'localhost');

$connection = mysqli_connect(DB_HOST, MYSQL_VARTOTOJAS, MYSQL_SLAPTAZODIS, DB_VARDAS);

function getConnect() {
    global $connection, $debug_mode; 
    if ($connection) {
        if ($debug_mode > 1) {
             echo "Successfully connected to database <br>";  
           } 
           return $connection;
        } else {
            echo "ERROR: Cannot connect to databases:".mysqli_connect_error();
}    
}

getConnect();

//---------------GET FUNCTION------------------------------------------DONE - TEST
//get user

function getUser($nr) {
    $resultMysqlObject = mysqli_query(getConnect(),"SELECT * FROM users WHERE id = '$nr'");
        if ($resultMysqlObject) { //mysqli_num_rows($rezultataiMysqlObjektas) > 0, ar is viso yra eiluciu
            $resultArray = mysqli_fetch_assoc($resultMysqlObject);
        return $resultArray; 
        } else {
            echo "ERROR: Cannot get user: $nr.". mysqli_error(getConnect());
            return NULL;
        }
}

//get challenge

function getChallenge($nr) {
    $resultMysqlObject = mysqli_query(getConnect(),"SELECT * FROM challenges WHERE id = '$nr'");
        if ($resultMysqlObject) { //mysqli_num_rows($rezultataiMysqlObjektas) > 0, ar is viso yra eiluciu
            $resultArray = mysqli_fetch_assoc($resultMysqlObject);
        return $resultArray; 
        } else {
            echo "ERROR: Cannot get challenge: $nr.". mysqli_error(getConnect());
            return NULL;
        }
}

//get suggestion

function getSuggestion($nr) {
    $resultMysqlObject = mysqli_query(getConnect(),"SELECT * FROM suggested_challenges WHERE id = '$nr'");
        if ($resultMysqlObject) { //mysqli_num_rows($rezultataiMysqlObjektas) > 0, ar is viso yra eiluciu
            $resultArray = mysqli_fetch_assoc($resultMysqlObject);
        return $resultArray; 
        } else {
            echo "ERROR: Cannot get suggested challenge: $nr.". mysqli_error(getConnect());
            return NULL;
        }
}

//get about text

function getAbout($nr) {
    $resultMysqlObject = mysqli_query(getConnect(),"SELECT * FROM about WHERE id = '$nr'");
        if ($resultMysqlObject) { //mysqli_num_rows($rezultataiMysqlObjektas) > 0, ar is viso yra eiluciu
            $resultArray = mysqli_fetch_assoc($resultMysqlObject);
        return $resultArray; 
        } else {
            echo "ERROR: Cannot get information for About-page: $nr.". mysqli_error(getConnect());
            return NULL;
        }
}

//---------------CREATE FUNCTION--------------------------------------------- NOT FINISHED

//create user (for registration) -----KAIP KODUOJASI PASSWORD??????????????????????????? AR TEISINGAI NAUDJAMAS NOW?

function createUser ($user_name, $email, $password, $name, $lname) {
    $mySQL_string = "INSERT INTO users 
                            VALUES (NULL, '$user_name', '$email', '$password', '$name', '$lname', '0', NOW(), NOW())";
    $itemCreated = mysqli_query(getConnect(), $mySQL_string);
    if (!$itemCreated) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
        return NULL;
    }
}

//create challenge

function createChallenge($title, $description, $tag) {////img_id
    $mySQL_string = "INSERT INTO doctors 
                            VALUES (NULL,'$title','$description','$tag')";///img_id
    $itemCreated = mysqli_query(getConnect(), $mySQL_string);
    if (!$itemCreated) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
        return NULL;
    }
}

//create suggestion (for suggestion input) /////pagalvoti ar prideti id, ar uzteks user_id. kaip su inner join?

function createSuggestion($user_id, $suggestion) {
    $mySQL_string = "INSERT INTO doctors 
                            VALUES ('$user_id','$suggestion')";
    $itemCreated = mysqli_query(getConnect(), $mySQL_string);
    if (!$itemCreated) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
        return NULL;
    }
}

//create About-page item

function createAbout($title, $description) { ///// gal padaryti papildoma stulpeli su show??????
    $mySQL_string = "INSERT INTO about 
                            VALUES (NULL, '$title', '$description')";
    $itemCreated = mysqli_query(getConnect(), $mySQL_string);
    if (!$itemCreated) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
        return NULL;
    }
}

//---------------DELETE FUNCTION--------------------------------------------- DONE - TEST

//delete user

function deleteUser($nr) {
    $mySQL_string = "DELETE FROM users 
                            WHERE id = '$nr' 
                            LIMIT 1
                    ";
    $itemDeleted = mysqli_query(getConnect(), $mySQL_string);
    if (!$itemDeleted ) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
        return NULL;
    }
}

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

//---------------UPDATE FUNCTION---------------------------------------------//NOT STARTED

//update user (ir admin(tik teises) my profile(password, name, lname))

function updateUser ($nr, $name, $lname) {
    $mySQL_string = "UPDATE users 
                        SET name = '$name', lname = '$lname' 
                        WHERE id = '$nr' 
                        LIMIT 1
                    ";
    $itemUpdated = mysqli_query(getConnect(), $mySQL_string);
    if (!$itemUpdated) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
        return NULL;
    }
}

// update challenge

//update suggestion (NEREIKIA)

//update about

//---------------GET LIST FUNCTION---------------------------------------------//NOT STARTED

// get user list

function getUsers($count = 9999) {
    $mySQL_string = "SELECT * FROM users LIMIT $count";
    $getList = mysqli_query(getConnect(), $mySQL_string);
    if (!$getList ) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
            return NULL;
    } return  $getList;
} 


// $gydytojuSarasas = getDoctors();

// $gydytojas_Array = mysqli_fetch_assoc($gydytojuSarasas);

// while ($gydytojas_Array) {
//    print_r($gydytojas_Array);
//    echo "<br>";
//    $gydytojas_Array = mysqli_fetch_assoc($gydytojuSarasas);
// }