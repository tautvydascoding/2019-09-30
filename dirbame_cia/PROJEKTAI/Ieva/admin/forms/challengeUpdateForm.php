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
        
        $user = getUser($nr);
        // print_r( $user ); //test
        echo "<a href='details-challenge.php?id=$nr' class='btn btn-outline-warning'> Back </a><hr>";

        ?>
        
        <h3> <?= $user['user_name'];?></h3>

        <form action = "userUpdate.php" method = "get">
           
            <label for = "user_name"> User Name: </label>
            <input name = "user_name" type = "text" id = "user_name" value="<?=$user['user_name']?>">
            <br>
            
            <label for = "email"> Email: </label>
            <input name = "email" type = "email" id = "email" value="<?=$user['email']?>">
            <br>

            <label for = "name"> Name: </label>
            <input name = "name" type = "text" id = "name" value="<?=$user['name']?>">
            <br>

            <label for = "lname"> Last Name: </label>
            <input name = "lname" type = "text" id = "lname" value="<?=$user['lname']?>">
            <br>

            <label for = "rights"> Rights: </label>
            <select name = "rights" id = "rights">
                <option value="default">Default</option>
                <option value="admin">Admin</option>
            </select>

            <input name = "id" type = "hidden" value="<?= $user['id']?>">
            <hr>
            <button type = "Submit" name = "updateUser" class="btn btn-outline-success">Update</button>
                

        </form>

        <br>
        <hr>

        
        <script type="text/javascript" src='../../libs/jquery-3.4.1.min.js'> </script>

        <script type="text/javascript" src='../../JS/main.js'> </script>
    </body>
</html>
