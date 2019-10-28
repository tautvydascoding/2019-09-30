<?php 
    session_start();
    if ( isset( $_SESSION['user_id'] ) ) {
    ?>
<?php
include("../../config/connectToDB.php");
include('../../model/users.php');

$nr = $_GET['id'];
// print_r($nr);//test

deleteUser($nr);

header("Location: ../adminPanel.php");
?>
<? } else {
        header("Location: ../adminLogin.php");
        exit;
    }
    ?>