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
            include("../../model/img.php");  
            $nr = $_GET['id'];
            $img = getIMG($nr);
        ?>

        <div class="row bg-dark text-white">
            <div class="col-12">
                <a href='../details-img.php?id=<?=$nr?>' class='btn btn-outline-warning m-2'> Back </a>
                <h3 class="text-center"> Image <?= $img['name'];?></h3>
            </div>
        </div>

        <div class="row text-center m-3">
            <div class="col-12">
                <img src="../../IMG/Challenges/<?= $img['name'];?>" placeholder="<?= $img['name'];?>" style="height: 250px;">
                
                <form action = "../action-form/imgUpdate.php" method = "get">
                
                    <label for = "name" class="font-weight-bold"> Name: </label>
                    <input name = "name" type = "text" id = "name" class="rounded m-1" value="<?=$img['name']?>">
                    <br>

                    <input name = "id" type = "hidden" value="<?= $img['id']?>">
                    <br>
                    <button type = "Submit" name = "updateIMG" class="btn btn-outline-success m-2 w-25">Update Image Name</button>       
                </form>
            </div>
        </div>

        <script type="text/javascript" src='../../libs/jquery-3.4.1.min.js'> </script>

        <script type="text/javascript" src='../../JS/main.js'> </script>
    </body>
</html>
