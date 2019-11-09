
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
      include_once('db-functions.php');
?>
  <h2 class="galerijah2" style="color:#F35211"><br /><br /><br /><br /><br /><br />
    <i>Koncertų akimirkos</i></h2>
        <div class="container">


<div class="stulpelio container" style="background-color:white;">
<div class="row">
  <div class="col-sm-12 " style="background-color:#F9F9F9;">

<p>
  <br /><br />
 <a href="https://soundcloud.com/user-545844746/akvile-only-hope">Paklausykit Akvilės atliekamos dainos "Only hope"</a>
 <br />
 <br />
</p>


    <?php

  $visirenginiaiObjektas = getRenginioNuotraukos();

  $nuotraukosArray = mysqli_fetch_assoc($visirenginiaiObjektas);
  while ($nuotraukosArray){

  echo "Koncerto <b>{$nuotraukosArray['pavadinimas']}</b> nuotraukos" ?><br/>

</br/>
   <img src="<?php echo $nuotraukosArray['nuotrauka2'];?>" />
   <img src="<?php echo $nuotraukosArray['nuotrauka1'];?>" />
   <img src="<?php echo $nuotraukosArray['nuotrauka3'];?>" />
   <img src="<?php echo $nuotraukosArray['nuotrauka4'];?>" />
   <img src="<?php echo $nuotraukosArray['nuotrauka5'];?>" />

</br>
</br>
  <?php $nuotraukosArray = mysqli_fetch_assoc($visirenginiaiObjektas);
    }


    ?>


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
