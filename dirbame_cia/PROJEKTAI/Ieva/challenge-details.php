<?php require("header.php");?>

<?php

    include("config/connectToDB.php");
    include("model/challenges.php");  

    $nr = $_GET['id'];
    // print_r($id); //test
    $challenge = getChallenge($nr);
    //print_r($challenge);//test

?>

    <a href='page_adminPanel.php' class='btn btn-outline-warning'> Back </a>
    <hr/>

    <div class="challengeDetails">
        <h3> <?= $challenge['title'];?> </h3>
        <h4> Tag: <?= $challenge['tag']; ?> </h4>
        <h4> Description: </h4>
        <h5> <?= $challenge['description']; ?> </h5>
        <h4> Creation time: </h4>
        <h5> <?= $challenge['creation_time']; ?> </h5>

    </div>
    <hr/>

<?php 

            // echo "<a href='userUpdateForm.php?id={$challenge['id']}' class='btn btn-outline-primary'> Update </a>";
            echo "<a href='challengeDelete.php?id={$challenge['id']}' class='btn btn-outline-danger'> Delete </a>";
            
        ?>

    </body>
</html>