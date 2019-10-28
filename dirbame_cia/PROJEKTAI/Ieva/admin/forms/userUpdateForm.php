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
        <link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../CSS/style.css">
    </head>
    <body>

        <?php
            include("../../config/connectToDB.php");
            include("../../model/users.php");  
            $nr = $_GET['id'];
            $user = getUser($nr);
        ?>

        <div class="row bg-dark text-white">
            <div class="col-12">
                <a href='../details-user.php?id=<?=$nr?>' class='btn btn-outline-warning m-2'> Back </a>
                <h3 class="text-center"> User <?= $user['user_name'];?></h3>
            </div>
        </div>
        <div class="row text-center m-3">
            <div class="col-12">
                
                <form action = "../action-form/userUpdate.php" method = "get">
                
                    <label for = "user_name" class="font-weight-bold"> User Name: </label>
                    <input name = "user_name" type = "text" id = "user_name" class="rounded m-1" value="<?=$user['user_name']?>">
                    <br>
                    
                    <label for = "email" class="font-weight-bold"> Email: </label>
                    <input name = "email" type = "email" id = "email" class="rounded m-1" value="<?=$user['email']?>">
                    <br>

                    <label for = "name" class="font-weight-bold"> Name: </label>
                    <input name = "name" type = "text" id = "name" class="rounded m-1" value="<?=$user['name']?>">
                    <br>

                    <label for = "lname" class="font-weight-bold"> Last Name: </label>
                    <input name = "lname" type = "text" id = "lname" class="rounded m-1" value="<?=$user['lname']?>">
                    <br>


                    <label for = "rights"class="font-weight-bold"> Rights: </label>
                    <input type="radio" name="rights" value="default" checked> Default
                    <input type="radio" name="rights" value="admin"> Admin

                    <input name = "id" type = "hidden" value="<?= $user['id']?>">
                    <br>
                    <button type = "Submit" name = "updateUser" class="btn btn-outline-success m-2 w-25">Update User</button>
                        
                </form>
            </div>
        </div>

        
        <script type="text/javascript" src='../../libs/jquery-3.4.1.min.js'> </script>

        <script type="text/javascript" src='../../JS/main.js'> </script>
    </body>
</html>
<? } else {
        header("Location: ../adminLogin.php");
        exit;
    }
    ?>