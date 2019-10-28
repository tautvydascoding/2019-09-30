<?php 
    session_start();
    if ( isset( $_SESSION['user_id'] ) ) {
    ?>
<?php
include("../../config/connectToDB.php");
include("../../model/img.php");  

// print_r($_GET);//test

$nr = $_GET['id'];

$name = $_GET['name'];

updateIMG ($nr, $name);

header("Location: ../adminPanel.php");
?>
<? } else {
        header("Location: ../adminLogin.php");
        exit;
    }
    ?>
