<?php

//include("../config/connectToDB.php");// - include in every file.

//---------------GET FUNCTION------------------------------------------DONE - TEST - WORKS

function getUser($nr) {
    $resultMysqlObject = mysqli_query(getConnect(),"SELECT * FROM users WHERE id = '$nr'");
        if (mysqli_num_rows($resultMysqlObject) > 0) {
            $resultArray = mysqli_fetch_assoc($resultMysqlObject);
        return $resultArray; 
        } else {
            echo "ERROR: Cannot get user: '$nr'.". mysqli_error(getConnect());
            return NULL;
        }
}

// print_r(getUser(4));

//---------------CREATE FUNCTION--------------------------------------------- DONE - TEST - WORKS

//create user (for registration)

function createUser ($user_name, $email, $password, $name, $lname) {
    $user_name = htmlspecialchars(trim($user_name), ENT_QUOTES); 
    $email = htmlspecialchars(trim($email), ENT_QUOTES);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $name = htmlspecialchars(trim($name), ENT_QUOTES);
    $lname = htmlspecialchars(trim($lname), ENT_QUOTES);

    $mySQL_string = "INSERT INTO users 
                            VALUES (
                                NULL, 
                                '$user_name', 
                                '$email', 
                                '$password', 
                                '$name', 
                                '$lname', 
                                'default', 
                                NOW(), 
                                NOW())
                                ";
    $itemCreated = mysqli_query(getConnect(), $mySQL_string);
    if (!$itemCreated) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
        return NULL;
    }
}


//createUser ('IevaAdmin', 'ieva@admin.com', 'slaptazodis, 'Ieva','Gaja'); 


//kodavimas - kurimo ir atnaujinimo metu
// koduoti viska, slaptazodziui reiketu
// $password = md5( $password); //senovinis budas
// $password = md5(md5( $password."5"));// siek tiek geresnis
// prisiloginimui if (pas destytoja 5uzd)

//---------------DELETE FUNCTION--------------------------------------------- DONE - TEST - WORKS

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

// deleteUser(1);

//---------------UPDATE FUNCTION--------------------------------------------- DONE - TEST - WORKS

//update user (admin)

function updateUserAdmin ($nr, $user_name, $email, $name, $lname, $rights) {
    $nr = htmlspecialchars(trim($nr), ENT_QUOTES);
    $user_name = htmlspecialchars(trim($user_name), ENT_QUOTES);
    $email = htmlspecialchars(trim($email), ENT_QUOTES);
    $name = htmlspecialchars(trim($name), ENT_QUOTES);
    $lname = htmlspecialchars(trim($lname), ENT_QUOTES);
    $rights = htmlspecialchars(trim($rights), ENT_QUOTES);

    $mySQL_string = "UPDATE users 
                        SET 
                            user_name = '$user_name',
                            email = '$email',
                            name = '$name', 
                            lname = '$lname', 
                            rights = '$rights' 
                        WHERE id = '$nr' 
                        LIMIT 1
                        ";
    $itemUpdated = mysqli_query(getConnect(), $mySQL_string);
    if (!$itemUpdated) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
        return NULL;
    }
}

// updateUserAdmin(3, 'Juozas44', 'jonas@jonaitis.com', 'Juozas', 'Juozaitis', 'default');


// update user my profile(password, name, lname);

function updateUserProfile ($nr, $email, $name, $lname, $password) {
    $email = htmlspecialchars(trim($email), ENT_QUOTES);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $name = htmlspecialchars(trim($name), ENT_QUOTES);
    $lname = htmlspecialchars(trim($lname), ENT_QUOTES);

    $mySQL_string = "UPDATE users 
                        SET 
                            name = '$name', 
                            lname = '$lname', 
                            password = '$password' 
                        WHERE id = '$nr' 
                        LIMIT 1
                        ";
    $itemUpdated = mysqli_query(getConnect(), $mySQL_string);
    if (!$itemUpdated) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
        return NULL;
    }
}

// updateUserProfile (4, 'emailas', 'Ona', 'Onute', 'test456');

//---------------GET LIST FUNCTION--------------------------------------------- DONE - TEST - WORKS

// get user list

function getUsers($count = 9999) {
    $mySQL_string = "SELECT * FROM users 
                            LIMIT $count
                            ";

    $getList = mysqli_query(getConnect(), $mySQL_string);
    if (!$getList ) {
        echo "ERROR. My SQl syntax errors: ".mysqli_error(getConnect());
            return NULL;
    } return  $getList;
} 

// test---------------------
// $userObject = getUsers();

// $usersList = mysqli_fetch_assoc($userObject);

// while ($usersList) {
//    print_r($usersList);
//    echo "<br>";
//    $usersList = mysqli_fetch_assoc($userObject);
// }

