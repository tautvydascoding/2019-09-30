<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    include('static.php');
    // $Monika = new Zmogus();
    // $Monika->ugis = 155;
    // $Monika->vardas = 'Monika';
    // $Tadas = new Zmogus();
    // $Tadas->ugis = 180;
    // $Tadas->vardas = 'Tadas';
    // $Kestas = new Zmogus();
    // $Kestas->ugis = 179;
    // $Kestas->vardas = 'Kestas';

    // echo "$Monika->vardas, $Monika->ugis";
    // echo "$Tadas->vardas, $Tadas->ugis";
    // $Tadas->einu();

    // $Monika = new Zmogus();
    // $Monika->setManoVardas('Monika');
    // $Monika->setManoUgis(155);
    // print_r($Monika->getManoVardas());
    // echo "<br>";
    // print_r($Monika->getManoUgis());
   
    $Monika = new Zmogus();
    
    print_r($Monika->getManoVardas());
    print_r($Monika->getManoUgis());
    ?>
</body>
</html>