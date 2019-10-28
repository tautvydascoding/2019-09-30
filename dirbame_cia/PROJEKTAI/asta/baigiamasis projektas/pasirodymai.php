
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
    <!-- Ikeliame tabus, kad butu galima pasirinkti koki sarasa issivesti -->
    <!-- <div class="tab">
      <button class="tablinks" onclick="rusiuotisarasa(event, 'busimi')">Būsimi pasirodymai</button>
      <button class="tablinks" onclick="rusiuotisarasa(event, 'praeje')">Praėję pasirodymai</button>

    </div> -->

    <!-- <div id="busimi" class="tabcontent">
      <h3>Būsimi renigniai</h3>
      <p>London is the capital city of England.</p>
    </div>

    <div id="praeje" class="tabcontent">
      <h3>Praėję renginiai</h3>
      <p>Paris is the capital of France.</p>
    </div> -->

<div class="row">


    <?php

  $visirenginiaiObjektas = visirenginiai();

  $renginysArray = mysqli_fetch_assoc($visirenginiaiObjektas);
  while ($renginysArray){
    
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

</br>
  <?php $renginysArray = mysqli_fetch_assoc($visirenginiaiObjektas);
    }


    ?>
    </br>
</div>
<!-- <a href='renginiai.php?nr=$renginysArray['id']'> -->

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
