<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>challenge yourself</title>
        <link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../CSS/style.css">
    </head>
    <body>
        <?php
       
        $nr = $_GET['id'];
        // print_r($nr); //test
        include("../../config/connectToDB.php");
        include("../../model/challenges.php");
        include('../../model/challenge_images.php');  
        include("../../model/img.php");
        
        $challenge = getChallenge($nr);
       
        echo "<a href='../details-challenge.php?id=$nr' class='btn btn-outline-warning'> Back </a><hr>";

        ?>
        
        <h3><?= $challenge['title'];?></h3>

        <form action = "../action-form/challengeUpdate.php" method = "get">
            <label for = "title"> Title: </label>
            <input name = "title" type = "text" id = "title" value='<?= $challenge['title'];?>'>
            <br>
            
            <label for="description">Description:</label><br>
            <textarea name="description" id = "description" rows="10" cols="100"><?= $challenge['description'];?></textarea>
            <br>

            <!--checked="checked" ideti kaip atribute kad butu pazymetas by default-->
            <label for = "tag"> Tag: </label> <br>
               
                <input type="radio" name="tag" id="Active" value="Active" <?php if ($challenge['tag']=="Active"){echo "checked='checked'";} ?>>
                <label for = "Active"> Active </label> <br>
                
                <input type="radio" name="tag" id="Relaxation" value="Relaxation" <?php if ($challenge['tag']=="Relaxation"){echo "checked='checked'";} ?>>
                <label for = "Relaxation"> Relaxation </label><br>

                <input type="radio" name="tag" id="Random" value="Random"<?php if ($challenge['tag']=="Random"){echo "checked='checked'";} ?>>
                <label for = "Random"> Random </label>
                
            <br>

 

            <!--selected='selected'getIMGforChallenge($nr)-->
            <label for = "imgID1"> Images for challenges: </label>
            <select name = "imgID1" id = "imgID1">

                <option value='none'>none</option>
                <?php   
                        $imgObject = getIMGlist();

                        $imgList = mysqli_fetch_assoc($imgObject);
                        
                        $selected='';
                        $arRadomCHIMG=false;
                        while ($imgList) {

                            $IMGforChallengeObject = getImagesforChallenge($nr);

                            $IMGforChallengeList = mysqli_fetch_assoc($IMGforChallengeObject);
                            
                         
                        
                            echo $IMGforChallengeList['id']."<br>";

                            while ($IMGforChallengeList &&  $arRadomCHIMG==false ) {

                                if ($imgList['id']==$IMGforChallengeList['id']) {
                                    $selected = "selected='selected'";
                                    $arRadomCHIMG = true;
                                    break;
                                }
                                
                                $IMGforChallengeList = mysqli_fetch_assoc($IMGforChallengeObject);
            
                            }
                            echo "<option value='{$imgList['id']}' $selected>{$imgList['name']}</option>";
                            $selected = "";
                            $imgList = mysqli_fetch_assoc($imgObject);                            
                        }

                ?>                 
            </select>
            
            <select name = "imgID2" id = "imgID2">
                <option value='none'>none</option>
                <?php  
                    $imgObject = getIMGlist();

                    $imgList = mysqli_fetch_assoc($imgObject);
                    
                        while ($imgList) {
                        echo "<option value='{$imgList['id']}'>{$imgList['name']}</option>";

                        $imgList = mysqli_fetch_assoc($imgObject);
                    }
                        
                ?>                 
            </select>

            <select name = "imgID3" id = "imgID3">
                <option value='none'>none</option>
                <?php  
                    $imgObject = getIMGlist();

                    $imgList = mysqli_fetch_assoc($imgObject);

                    while ($imgList) {
                    echo "<option value='{$imgList['id']}'>{$imgList['name']}</option>";

                    $imgList = mysqli_fetch_assoc($imgObject);
                }
                ?>                 
            </select>

            <input name = "id" type = "hidden" value="<?= $challenge['id'];?>">

            <button type = "Submit" name = "updateChallenge" class="btn btn-outline-success">Update</button>

        </form>
            <div>
        <?php 
            
            $imgObject = getIMGlist();

            $imgList = mysqli_fetch_assoc($imgObject);
            
            while ($imgList) {
                echo $imgList['id'];
                echo "<br>";
                   
                $imgList = mysqli_fetch_assoc($imgObject);                            
            }

//----------------
            $IMGforChallengeObject = getImagesforChallenge($nr);

            $IMGforChallengeList = mysqli_fetch_assoc($IMGforChallengeObject);
        
            while ($IMGforChallengeList ) {
                print_r($IMGforChallengeList);
                echo $IMGforChallengeList['id'];
                echo $IMGforChallengeList['name']; 
                echo "<br>";
        
                $IMGforChallengeList = mysqli_fetch_assoc($IMGforChallengeObject);
                }


            ?>
            </div>


        <script type="text/javascript" src='../../libs/jquery-3.4.1.min.js'> </script>

        <script type="text/javascript" src='../../JS/main.js'> </script>
    </body>
</html>
