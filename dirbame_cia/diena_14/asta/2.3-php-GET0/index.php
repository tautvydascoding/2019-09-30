<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>nnn</title>
  </head>
  <body>
    <h1> Poliklinika - visis gydytojai</h1>
    <?php

    include_once('db-functions.php');

$visigydytojaiObjektas = getdoctors();

$gydytojasArray = mysqli_fetch_assoc($visigydytojaiObjektas);
while ($gydytojasArray){
  //print_r($gydytojasArray);
  echo "<a href='doctor.php?nr={$gydytojasArray['id']}'>
              {$gydytojasArray['name']}  {$gydytojasArray['lname']}
       </a> <br />";
  $gydytojasArray = mysqli_fetch_assoc($visigydytojaiObjektas);
}
     ?>
  </body>
</html>

<a href='#'>VARDAS PAVARD</a>
