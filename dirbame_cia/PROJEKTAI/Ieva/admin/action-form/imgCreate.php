<?php 
    session_start();
    if ( isset( $_SESSION['user_id'] ) ) {
    ?>
<?php 
include("../../config/connectToDB.php");
include("../../model/img.php");    

$name = $_GET['name'];

createIMG ($name);

// PHP redirect
header("Location: ../adminPanel.php");
?>
<? } else {
        header("Location: ../adminLogin.php");
        exit;
    }
    ?>