<?php
session_start();
require_once('../config/connectToDB.php');
$password = $_POST['password'];
$email = $_POST['email'];

    $cryptedEmail = mysqli_real_escape_string(getLoginDB(), $email );
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "SELECT * FROM users
                    WHERE email = '$cryptedEmail'; ";


    $result = mysqli_query(getLoginDB(),  $query);

    $resultArray = mysqli_fetch_assoc($result);
    $hashed_password = $resultArray['password'];

if(password_verify($password, $hashed_password)) {
  header("Location: admin_panel.php");
  $_SESSION['user_id'] = $resultArray['id'];
  $_SESSION['user_name'] = $resultArray['name'];

} else {
  $errors = [];
  array_push($errors, "Wrong password or e-mail");
  $printErrors = implode("<br />", $errors);
  header("Location: ..\admin\admin_panel_login.php?errors=$printErrors");
}
 ?>