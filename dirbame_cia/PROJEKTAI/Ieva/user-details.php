<?php require("header.php");?>

        <?php

        include("config/connectToDB.php");
        include("model/users.php");  

        $nr = $_GET['id'];
        // print_r($id); //test
        $user = getUser($nr);
        // print_r($user);//test
        ?>

        <a href='page_adminPanel.php' class='btn btn-outline-warning'> Back </a>
        <hr/>

        <div class="userDetails">
            <h3> <?= $user['user_name'];?> </h3>
            <h4> Email: <?= $user['email']; ?> </h4>
            <h4> Password: <?= $user['password']; ?> </h4>
            <h4> Name: <?= $user['name']; ?> </h4>
            <h4> Last Name: <?= $user['lname']; ?> </h4>
            <h4> Rights: <?= $user['rights']; ?> </h4>
            <h4> Registration time: <?= $user['registration_time']; ?> </h4>
            <h4> Last login: <?= $user['last_login']; ?> </h4>
        </div>
        <hr/>
        
        <?php 

            echo "<a href='userUpdateForm.php?id={$user['id']}' class='btn btn-outline-primary'> Update </a>";
            echo "<a href='userDelete.php?id={$user['id']}' class='btn btn-outline-danger'> Delete </a>";
            
        ?>


    </body>
</html>