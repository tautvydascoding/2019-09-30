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
            include("../../config/connectToDB.php");
            include("../../model/challenges.php"); 
        ?>

        <div class="row bg-dark text-white">
            <div class="col-12">
                <a href='../adminPanel.php' class='btn btn-outline-warning m-2'> Back </a>
                <h3 class="text-center"> Create Challenge </h3>
            </div>
        </div>

        <div class="row text-center m-3">
            <div class="col-12">

                <form action = "../action-form/challengeCreate.php" method = "get">
                
                    <label for = "title" class="font-weight-bold"> Title: </label>
                    <input name = "title" type = "text" id = "title" class="rounded m-1" placeholder="Enter challenge title">
                    <br>
            
                    <textarea name="description" id = "description" class="rounded m-1" placeholder="Enter challenge description.." rows="10" cols="100"></textarea>
                    <br>

                    <label for = "tag" class="font-weight-bold"> Tag: </label>
                    
                        <input type="radio" name="tag" id="Active" value="Active" required="required">
                        <label for = "Active"> Active </label>
                        
                        <input type="radio" name="tag" id="Relaxation" value="Relaxation" required="required">
                        <label for = "Relaxation"> Relaxation </label>

                        <input type="radio" name="tag" id="Random" value="Random" required="required">
                        <label for = "Random"> Random </label>
                        
                    <br>

                    <label for = "imgID1" class="font-weight-bold"> Images for challenges: </label>
                    <select name = "imgID1" id = "imgID1">
                        <option value='none'>none</option>
                        <?php      
                                include("../../model/img.php");
                                
                                $imgObject = getIMGlist();

                                $imgList = mysqli_fetch_assoc($imgObject);

                                while ($imgList) {
                                    echo "<option value='{$imgList['id']}'>{$imgList['name']}</option>";

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

                    <input name = "id" type = "hidden" value="<?= $imgList['id']?>">
                    <br>
                    <button type = "Submit" name = "createChallenge" class="btn btn-outline-success m-2 w-25">Create New Challenge</button>
           
                </form>
            </div>
        </div>

        <script type="text/javascript" src='../../libs/jquery-3.4.1.min.js'> </script>

        <script type="text/javascript" src='../../JS/main.js'> </script>
    </body>
</html>
