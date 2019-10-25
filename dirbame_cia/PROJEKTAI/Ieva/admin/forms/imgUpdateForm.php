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
        include("../../model/img.php");  
        
        $img = getIMG($nr);
        
        echo "<a href='../details-img.php?id=$nr' class='btn btn-outline-warning'> Back </a><hr>";

        ?>

        <img src="../../IMG/Challenges/<?= $img['name'];?>" placeholder="<?= $img['name'];?>">
        <h4> <?= $img['name'];?></h4>
        <hr>

        <form action = "../action-form/imgUpdate.php" method = "get">
           
            <label for = "name"> Name: </label>
            <input name = "name" type = "text" id = "name" value="<?=$img['name']?>">
            <br>

            <input name = "id" type = "hidden" value="<?= $img['id']?>">
            <hr>
            <button type = "Submit" name = "updateIMG" class="btn btn-outline-success">Update</button>
                
        </form>

        <hr>

        
        <script type="text/javascript" src='../../libs/jquery-3.4.1.min.js'> </script>

        <script type="text/javascript" src='../../JS/main.js'> </script>
    </body>
</html>
