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
        include("../model/img.php"); 
        include("../model/challenge_images.php");

        $nr = $_GET['id'];
        // print_r($id); //test
        $img = getIMG($nr);
        // print_r($user);//test
        ?>

        <a href='adminPanel.php' class='btn btn-outline-warning'> Back </a>
        <hr/>

        <div class="imgDetails">
            <img src="../IMG/Challenges/<?= $img['name'];?>" placeholder="<?= $img['name'];?>">
            <h4> <?= $img['name'];?> </h4>
            <hr>
            <h5>Used in these challenges: </h5>
             <?
             $ChallengeforIMGobject = getChallengeforImage($nr);

             $ChallengeforIMGlist = mysqli_fetch_assoc($ChallengeforIMGobject);
             
             while ($ChallengeforIMGlist) {
                echo "<h6> <a href=details-challenge.php?id={$ChallengeforIMGlist['id']}>
                {$ChallengeforIMGlist['title']}
                </a> </h6>";
             
                 $ChallengeforIMGlist = mysqli_fetch_assoc($ChallengeforIMGobject);
                 }
             
             ?> 

        </div>
        <hr/>
        
        <?php 

            echo "<a href='forms/imgUpdateForm.php?id={$img['id']}' class='btn btn-outline-primary'> Update </a>";
            echo "<a href='action-form/imgDelete.php?id={$img['id']}' class='btn btn-outline-danger'> Delete </a>";
            
        ?>


    </body>
</html>