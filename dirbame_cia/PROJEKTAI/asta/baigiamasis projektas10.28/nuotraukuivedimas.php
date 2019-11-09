<?php
include('db-functions.php');
print_r($_POST);
$nuotrauka1 = $_FILES['file']['name'][0];//teatrodiena.jpg
$nuotrauka2 = $_FILES['file']['name'][1];
$nuotrauka3 = $_FILES['file']['name'][2];
$nuotrauka4 = $_FILES['file']['name'][3];
$nuotrauka5 = $_FILES['file']['name'][4];
//print_r($nuotrauka1);
//echo "<br />";

$nuotraukupasirinkimas = $_POST['nuotraukupasirinkimas'];


for ($i=0; $i<5; $i++){
$target_dir = "img/"; // kur
$target_file = $target_dir . basename($_FILES['file']['name'][$i]); // koki faila
print_r($target_file);
if (move_uploaded_file($_FILES['file']["tmp_name"][$i], $target_file)) {
echo "The file ". basename( $_FILES['file']['name'][$i]). " has been uploaded.";
} else {
//echo "Sorry, there was an error uploading your file.";
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
// }
}
//papildyti ikelima dar kitais tikrinimais


issaugotinaujasnuotraukas($nuotrauka1, $nuotrauka2, $nuotrauka3, $nuotrauka4, $nuotrauka5, $nuotraukupasirinkimas );

?>
<h2>Jūs sėkmingai įkėlėte nuotraukas</h2> -->
<?php
header('refresh:3; url=admin.php');
?>
