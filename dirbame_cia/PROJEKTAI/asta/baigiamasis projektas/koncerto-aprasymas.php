
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
        <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>
      <h1>Koncerto aprašymas</h1>
      <?php
      include_once('db-functions.php');
      ?>

        <div class="container">


<div class="stulpelio container" style="background-color:white;">
<div class="row" >


    <?php
    include_once('db-functions.php');

    $numeris = $_GET['nr'];

  $visirenginiaiObjektas = getRenginys($numeris);
  $renginysArray = mysqli_fetch_assoc($visirenginiaiObjektas);
  while ($renginysArray){
?>
<div class="col nuotrstulpelis">
  <img src="<?php echo $renginysArray['nuotrauka1'];?>" />&nbsp &nbsp</div>
<div class="col nuotrstulpelis" >
  <img src="<?php echo $renginysArray['nuotrauka2'];?>" /></div>
  <div class="col  nuotrstulpelis" >
<img src="<?php echo $renginysArray['nuotrauka3'];?>" /></div>
<div class="col  nuotrstulpelis" >
<img src="<?php echo $renginysArray['nuotrauka4'];?>" /></div>
</div>
<div class="row">
<div class="col-sm-12 " style="background-color:#F9F9F9;">

<?php
  echo "<b>{$renginysArray['pavadinimas']}</b></br>";

  echo nl2br($renginysArray['aprasymas']);

?>
  </div>
</br>
  <?php $renginysArray = mysqli_fetch_assoc($visirenginiaiObjektas);

    }?>

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
      }   ?>
        </br>
        </br>

  <button type="button"><a href="pasirodymai.php">&nbsp Grįžti &nbsp</a></button>
</div>

</div>
</div>

  </div>


            <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
