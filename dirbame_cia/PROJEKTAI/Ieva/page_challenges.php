<?php 
    session_start();
    if ( isset( $_SESSION['user_id'] ) ) {
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>challenge yourself</title>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>
        <!--Header-->
        <?php include("header.challenges.php");?>
        <section> 
            <div class="">
                    <?php
                        include("config/connectToDB.php");
                        include("model/challenges.php");

                        $challengeObject = getChallengesActive();

                        $challengesList = mysqli_fetch_assoc($challengeObject);

                        while ($challengesList) {
                        echo $challengesList['id']." ";
                        echo " ".$challengesList['title']." ";
                        echo $challengesList['tag']."<br>";
                        
                        $challengesList = mysqli_fetch_assoc($challengeObject);
                        }
                    ?>
            </div>

        </section>
        <?php include("footer_user.php");?> 

<? } else {
        header("Location: adminLogin.php");
        exit;
    }
?>