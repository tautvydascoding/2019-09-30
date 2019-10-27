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
        <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../CSS/style.css">
    </head>
    <body>

        <?php
            include("../config/connectToDB.php");
            include("../model/img.php"); 
            include("../model/challenge_images.php");

            $nr = $_GET['id'];
            $img = getIMG($nr);
        ?>

        <div class="row bg-dark text-white">
            <div class="col-12">
                <a href='adminPanel.php' class='btn btn-outline-warning m-2'> Back </a>
                <h3 class="text-center"> Image Details: </h3>
            </div>
        </div>

        <div class="row text-center m-3">
            <div class="col-12">
                <div class="imgDetails">
                    <img src="../IMG/Challenges/<?= $img['name'];?>" placeholder="<?= $img['name'];?>" style="height: 250px;">
                    <h4> <?= $img['name'];?> </h4>
                    <h5> Image is used in these challenges: </h5>
                    <?
                        $ChallengeforIMGobject = getChallengeforImage($nr);

                        $ChallengeforIMGlist = mysqli_fetch_assoc($ChallengeforIMGobject);
                        
                        while ($ChallengeforIMGlist) {
                            echo "<a href=details-challenge.php?id={$ChallengeforIMGlist['id']} class='font-weight-bold'>
                            {$ChallengeforIMGlist['title']}
                            </a>";
                            echo ". ";
                        
                            $ChallengeforIMGlist = mysqli_fetch_assoc($ChallengeforIMGobject);
                            }
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <?php 
                    echo "<a href='forms/imgUpdateForm.php?id={$img['id']}' class='btn btn-outline-primary m-2 w-25'> Update </a>";
                ?>
            </div>
            <div class="col-12 d-flex justify-content-center">
                    <?php
                    echo "<a href='action-form/imgDelete.php?id={$img['id']}' class='btn btn-outline-danger m-2 w-25'> Delete </a>";    
                    ?>
            </div>
        </div>

    </body>
</html>
<? } else {
        header("Location: adminLogin.php");
        exit;
    }
    ?>