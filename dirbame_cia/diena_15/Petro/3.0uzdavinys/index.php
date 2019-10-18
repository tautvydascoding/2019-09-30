<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- mano css failas visada pats zemiausias -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet"  href="css/style.css">
</head>
<body>
    <h1>Poliklinika</h1>
    <?php
    include_once('db_functions.php');
    $visiGydytojai_Objektas = getDoctors();
//print_r($visiGydytojai_Objektas);
//    su while ciklu atspausdinsim visus gydytu masyvus
    $gydytojas_Masyvas = mysqli_fetch_assoc($visiGydytojai_Objektas);

while ($gydytojas_Masyvas){

    echo "<a href='doctor.php?nr={$gydytojas_Masyvas['id']}'>
            {$gydytojas_Masyvas['name']}  {$gydytojas_Masyvas['lname']} </a>";
    //    print_r($gydytojas_Masyvas);
    echo '<br>';
    $gydytojas_Masyvas = mysqli_fetch_assoc($visiGydytojai_Objektas);
}


?>



<!--    <a href="#">VARDAS PAVARDE</a>-->
<!--<script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>-->
<!-- mano js failas visada pats zemiausias -->
<!--<script type="text/javascript" src='main.js'> </script>-->
</body>
</html>
