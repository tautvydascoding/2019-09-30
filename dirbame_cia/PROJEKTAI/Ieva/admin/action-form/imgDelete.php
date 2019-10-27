<?php 
    session_start();
    if ( isset( $_SESSION['user_id'] ) ) {
    ?>
<?php
include("../../config/connectToDB.php");
include('../../model/img.php');
include('../../model/challenge_images.php');

$nr = $_GET['id'];
// print_r($nr);//test

deleteIMGwithRelatedChallenges($nr);
 
deleteIMG($nr);

header("Location: ../adminPanel.php");
?>
<? } else {
        header("Location: ../adminLogin.php");
        exit;
    }
    ?>