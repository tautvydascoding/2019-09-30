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

        echo "<a href='../adminPanel.php' class='btn btn-outline-warning'> Back </a><hr>";
?>

        <h3> Create new image</h3>

        <form action = "../action-form/imgCreate.php" method = "get">
           
            <label for = "name"> Title: </label>
            <input name = "name" type = "text" id = "name" placeholder="Enter img name..">
            <br>

            <button type = "Submit" name = "createIMG" class="btn btn-outline-success">Create</button>

        </form>

        <hr>

        <script type="text/javascript" src='../../libs/jquery-3.4.1.min.js'> </script>

        <script type="text/javascript" src='../../JS/main.js'> </script>
    </body>
</html>
