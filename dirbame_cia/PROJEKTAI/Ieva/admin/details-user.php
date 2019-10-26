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
            include("../model/users.php");  

            $nr = $_GET['id'];
            $user = getUser($nr);
        ?>

        <div class="row bg-dark text-white">
            <div class="col-12">
                <a href='adminPanel.php' class='btn btn-outline-warning m-2'> Back </a>
                <h3 class="text-center"> User Details: </h3>
            </div>
        </div>
        
        <div class="row text-center m-3">
            <div class="col-12">
                <div class="userDetails">
                    <h3> <?= $user['user_name'];?> </h3>
                    <h4> Email: <span class="text-primary"><?= $user['email']; ?></span></h4>
                    <h4> Password: <span class="text-primary"><?=$user['password']; ?></span> </h4>
                    <h4> Name: <span class="text-primary"><?= $user['name']; ?></span></h4>
                    <h4> Last Name: <span class="text-primary"><?= $user['lname']; ?></span> </h4>
                    <h4> Rights: <span class="text-primary"><?= $user['rights']; ?></span> </h4>
                    <h4> Registration time: <span class="text-primary"><?= $user['registration_time']; ?></span> </h4>
                    <h4> Last login: <span class="text-primary"><?= $user['last_login']; ?></span> </h4>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <?php 
                    echo "<a href='forms/userUpdateForm.php?id={$user['id']}' class='btn btn-outline-primary m-2 w-25'> Update </a>";
                ?>
            </div>  
            <div class="col-12 d-flex justify-content-center">
                <?php echo "<a href='action-form/userDelete.php?id={$user['id']}' class='btn btn-outline-danger m-1 w-25'> Delete </a>";
                ?>
            </div>
        </div>

    </body>
</html>