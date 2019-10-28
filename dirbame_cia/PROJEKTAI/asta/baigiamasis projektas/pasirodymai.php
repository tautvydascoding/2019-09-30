
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
      <?php

      include_once('navigacija.php');
    ?>
      <h2 class="pasirodymaih2"><br /><br /><br /><br /><br /><br />
        <i>Artimiausi koncertai ir koncertų archyvas</i></h2>
      <?php

      include_once('db-functions.php');
?>

        <div class="container">


<div class="stulpelio container" style="background-color:white;">
<div class="row">
  <div class="col-sm-12 pasirod" style="background-color:#F9F9F9;">

    <p><b><i>Būsimi renginiai</i></b>

    </p>
    <br />
<div class="row">


    <?php

  $visirenginiaiObjektas = visirenginiai();

  $renginysArray = mysqli_fetch_assoc($visirenginiaiObjektas);
  while ($renginysArray){
if ($renginysArray['metai']>=date("Y-m-d")){
?>
<div class="col-sm-2">
  <?php echo "{$renginysArray['metai']}" ?>
  </div>
  <div class="col-sm-1">
    <?php echo "{$renginysArray['valanda']}" ?>
</div>
<div class="col-sm-3">
  <?php echo "{$renginysArray['vieta']}" ?>
</div>
<div class="col-sm-3">
  <?php echo "<a href='koncerto-aprasymas.php?nr={$renginysArray['id']}'> {$renginysArray['pavadinimas'] } </a>";?>
</div>
  <div class="col-sm-2">

 <button type="button"><a href="<?php  echo $renginysArray['bilietai']?>">Pirkti bilietus</a></button>
</div>
<div class="col-sm-1">

</div>
<?php } ?>
</br>
  <?php $renginysArray = mysqli_fetch_assoc($visirenginiaiObjektas);
    }

    ?>
    </br>
</div>

  </br>
    </br>
<p><b><i>Praėję renginiai</i></b>

</p>
<br />
<div class="row">


<?php

$visirenginiaiObjektas = visirenginiai();

$renginysArray = mysqli_fetch_assoc($visirenginiaiObjektas);
while ($renginysArray){
if ($renginysArray['metai']<date("Y-m-d")){
?>
<div class="col-sm-2">
<?php echo "{$renginysArray['metai']}" ?>
</div>
<div class="col-sm-1">
<?php echo "{$renginysArray['valanda']}" ?>
</div>
<div class="col-sm-3">
<?php echo "{$renginysArray['vieta']}" ?>
</div>
<div class="col-sm-3">
<?php echo "<a href='koncerto-aprasymas.php?nr={$renginysArray['id']}'> {$renginysArray['pavadinimas'] } </a>";?>
</div>
<div class="col-sm-2">

<!-- <button type="button"><a href="<?php  echo $renginysArray['bilietai']?>">Pirkti bilietus</a></button> -->
</div>
<div class="col-sm-1">

</div>
<?php } ?>
</br>
<?php $renginysArray = mysqli_fetch_assoc($visirenginiaiObjektas);
}


?>
</br>
</div>

















  </div>



    </div>
</div>
<?php

include_once('naujienlaiskiouzsakymas.php');
?>

        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
