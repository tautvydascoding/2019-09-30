<?php 

include("../../config/connectToDB.php");
include("../../model/img.php");    

$name = $_GET['name'];

createIMG ($name);

// PHP redirect
header("Location: ../adminPanel.php");