
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  href="libs/bootstrap/css/bootstrap.min.css">
        <!-- mano css failas visada pats zemiausias -->
        <link rel="stylesheet"  href="css/style.css">
    </head>
    <body>
      <h1>koncerto aprašymas</h1>
      <?php

      include_once('db-functions.php');
?>

        <div class="container">


<div class="stulpelio container" style="background-color:white;">
<div class="row">


    <?php
    include_once('db-functions.php');

    $numeris = $_GET['nr'];
    //print_r($numeris);  //renginio id DBazeje

  $visirenginiaiObjektas = getRenginys($numeris);

  $renginysArray = mysqli_fetch_assoc($visirenginiaiObjektas);
  while ($renginysArray){
?>
<div class="col-sm-4 " style="background-color:#F9F9F9;">
<img src="<?php echo $renginysArray['nuotrauka1'];?>" />
</div>
<div class="col-sm-8 " style="background-color:#F9F9F9;">
<?php
  echo "<b>{$renginysArray['pavadinimas']}</b> </br> {$renginysArray['aprasymas']}"

?>

  </div>
</br>
  <?php $renginysArray = mysqli_fetch_assoc($visirenginiaiObjektas);

    }



?>
</div>
<div class="row">
<div class="col-sm-12 " style="background-color:#F9F9F9;">

</br>
<p><b>Artimiausi renginiai:</b></p>
<?php
    $visirenginiaiObjektas = getRenginioVietos($numeris);

    $renginysArray = mysqli_fetch_assoc($visirenginiaiObjektas);
    while ($renginysArray){
    if ($renginysArray['metai']>=date("Y-m-d")){
    echo "{$renginysArray['metai']} {$renginysArray['valanda']} {$renginysArray['vieta']}";
  }
    ?>

    </br>
    <?php $renginysArray = mysqli_fetch_assoc($visirenginiaiObjektas);
      }


      ?>
        </br>
          </br>
          
  <button type="button"><a href="pasirodymai.php">Grįžti</a></button>
</div>

</div>
</div>

</p>
</p>
</p>

  </div>


    </div>
</div>




        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
