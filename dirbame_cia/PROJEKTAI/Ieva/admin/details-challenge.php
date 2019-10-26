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
            $challenge = getChallenge($nr);
        ?>

        <div class="row bg-dark text-white">
            <div class="col-12">
                <a href='adminPanel.php' class='btn btn-outline-warning m-2'> Back </a>
                <h3 class="text-center"> Challenge Details: </h3>
            </div>
        </div>

        <div class="row text-center m-3">
            <div class="col-12">
                <div class="challengeDetails">
                    <h3> <?= $challenge['title'];?> </h3>
                    <h5> <span class="text-primary"> <?= $challenge['description']; ?> </span></h5>
                    <?
                        $IMGforChallengeObject = getImagesforChallenge($nr);
                        $IMGforChallengeList = mysqli_fetch_assoc($IMGforChallengeObject);

                        while ($IMGforChallengeList ) {
                            echo "<img src='../IMG/Challenges/{$IMGforChallengeList['name']}' placeholder='{$IMGforChallengeList['name']}' style='height: 150px; margin: 2px;'>";
                        
                            $IMGforChallengeList = mysqli_fetch_assoc($IMGforChallengeObject);
                }
                    ?>
                    <h4> Tag: <span class="text-primary"><?= $challenge['tag']; ?> </span></h4>
                    <h4> Creation time: <span class="text-primary"><?= $challenge['creation_time']; ?> </span></h4>
                    
                </div>
            </div>       
        </div>
   
        <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <?php 
                    echo "<a href='forms/challengeUpdateForm.php?id={$challenge['id']}' class='btn btn-outline-primary m-2 w-25'> Update </a>";
                    ?>
                </div>  
                <div class="col-12 d-flex justify-content-center">
                    <?php 
                    echo "<a href='action-form/challengeDelete.php?id={$challenge['id']}' class='btn btn-outline-danger m-2 w-25'> Delete </a>";
                    ?>
                </div> 
        </div>
    </body>
</html>