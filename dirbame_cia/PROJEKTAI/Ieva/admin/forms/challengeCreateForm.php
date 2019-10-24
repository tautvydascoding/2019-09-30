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

        echo "<a href='../adminPanel.php' class='btn btn-outline-warning'> Back </a><hr>";

?>
        
        <h3> Create new challenge</h3>

        <form action = "challengeCreate.php" method = "get">
           
            <label for = "title"> Title: </label>
            <input name = "title" type = "text" id = "title" placeholder="Enter challenge title">
            <br>
            
            <label for="description">Description:</label><br>
            <textarea name="description" id = "description" placeholder="Enter challenge description.." rows="10" cols="100"></textarea>
            <br>

            <label for = "tag"> Tag: </label>
            <select name = "tag" id = "tag">
                <option value="Active">Active</option>
                <option value="Relaxation">Relaxation</option>
                <option value="Random">Random</option>
            </select>
            <br>

            <label for = "img"> Images for challenges: </label>
            <select name = "rights" id = "rights">
                <option value="default">Default</option>
                <option value="admin">Admin</option>
            </select>

            <input name = "id" type = "hidden" value="<?= $challenge['id']?>">
            <hr>
            <button type = "Submit" name = "updateUser" class="btn btn-outline-success">Update</button>
                

        </form>

        <br>
        <hr>

        
        <script type="text/javascript" src='../../libs/jquery-3.4.1.min.js'> </script>

        <script type="text/javascript" src='../../JS/main.js'> </script>
    </body>
</html>
