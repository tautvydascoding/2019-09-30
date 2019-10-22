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




    <form action="naujasGydytojas.php" method="get">
        <input type="text" name="vardas" placeholder="jusu vardas">  Kurti Nauja</input>
        <br>
        <input type="text" name="pavarde" placeholder="jusu pavarde">  Kurti Nauja</input>
        <br>
        <input type="submit" value="Sukurti gydytoja">


    </form>
    <br>


    <form action="trintiGydytoja.php" method="get">
        <input type="text" name="id" placeholder="gydytojo id">  Istrinti gydytoja</input>
        <br>
        <input type="submit" value="Istrinti gydytoja">
    </form>
    <br>

    <!-- index.php faile, isvesti visus gydytojus panaudojant while ir getDoctors(); -->

    <?php
    include ('db_functions.php');
    $visiGydytojaiMYSQL_Objektas = getDoctors();

// su fetch paimam pirma MYSQL objekto eilute ir paverciam i tvarkinga pirmos eilutes masyva
$gydytojas_Masyvas = mysqli_fetch_assoc($visiGydytojaiMYSQL_Objektas);


// su while ciklu atspausdinsim visus gydytu masyvus
while ($gydytojas_Masyvas){
    print_r($gydytojas_Masyvas['name'].$gydytojas_Masyvas['lname']);
    echo "<h3> {$gydytojas_Masyvas['name']} {$gydytojas_Masyvas['lname']}</h3>";
    echo "<br>";
    $gydytojas_Masyvas = mysqli_fetch_assoc($visiGydytojaiMYSQL_Objektas);
}



    ?>



<!--    <a href="#">VARDAS PAVARDE</a>-->
<!--<script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>-->
<!-- mano js failas visada pats zemiausias -->
<!--<script type="text/javascript" src='main.js'> </script>-->
</body>
</html>
