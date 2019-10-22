<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet"  href="css/style.css">
    </head>
    <body>

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
    <h3> <?= $user['user_name']; ?> </h3>
    <h4> Email: <?= $user['email']; ?> </h4>
    <h4> Password: <?= $user['password']; ?> </h4>
    <h4> Name: <?= $user['name']; ?> </h4>
    <h4> Last Name: <?= $user['lname']; ?> </h4>
    <h4> Rights: <?= $user['rights']; ?> </h4>
    <h4> Registration time: <?= $user['registration_time']; ?> </h4>
    <h4> Last login: <?= $user['last_login']; ?> </h4>
</div>
<hr/>
<a href='#' class='btn btn-outline-primary'> Update </a>
<?php echo "<a href='userDelete.php?id={$user['id']}' class='btn btn-outline-danger'> Delete </a>" ?>


<?php

// echo "<a href='edit-doctor-form.php?id={$gydytojas['id']}' class='btn btn-outline-warning'> Atnaujinti </a>";
// echo ""; 

?>

    </body>
</html>