<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>challenge yourself</title>
        <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../CSS/style.css">
    </head>
    <body>

<?php

    include("../config/connectToDB.php");
    include("../model/challenges.php");  
    include("../model/challenge_images.php");

    $nr = $_GET['id'];
    // print_r($id); //test
    $challenge = getChallenge($nr);
    //print_r($challenge);//test

?>

    <a href='adminPanel.php' class='btn btn-outline-warning'> Back </a>
    <hr/>

    <div class="challengeDetails">
        <h3> <?= $challenge['title'];?> </h3>
        <h4> Tag: <?= $challenge['tag']; ?> </h4>
        <h4> Description: </h4>
        <h5> <?= $challenge['description']; ?> </h5>
        <h4> Challenge images: </h4>
        <?
            
            $IMGforChallengeObject = getImagesforChallenge($nr);

            $IMGforChallengeList = mysqli_fetch_assoc($IMGforChallengeObject);
        
            while ($IMGforChallengeList ) {
                echo "<img src='../IMG/Challenges/{$IMGforChallengeList['name']}' placeholder='{$IMGforChallengeList['name']}' style='height: 150px; margin: 2px;'>";
              
        
                $IMGforChallengeList = mysqli_fetch_assoc($IMGforChallengeObject);
                }

        ?>
        <h4> Creation time: </h4>
        <h5> <?= $challenge['creation_time']; ?> </h5>

    </div>
    <hr/>

<?php 

            echo "<a href='forms/challengeUpdateForm.php?id={$challenge['id']}' class='btn btn-outline-primary'> Update </a>";
            echo "<a href='action-form/challengeDelete.php?id={$challenge['id']}' class='btn btn-outline-danger'> Delete </a>";
            
        ?>

    </body>
</html>