
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  href="libs/bootstrap/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- mano css failas  -->
        <link rel="stylesheet"  href="css/style.css">
    </head>
    <body>
            <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>
      <?php
      include_once('navigacija.php');
      include_once('db-functions.php');
      ?>
      <h2 class="pasirodymaih2" style="color:#F35211"><br /><br /><br /><br /><br /><br />
        <i>Artimiausi koncertai ir koncertų archyvas</i></h2>
        <h1 class="pasirodymaih1"></h1>

  <div class="container">


    <div class="stulpelio container" style="background-color:white;">
      <div class="row">
        <div class="col-sm-12 pasirod" style="background-color:white;">
    <!-- Ikeliame tabus, kad butu galima pasirinkti koki sarasa issivesti -->
        <div class="tab">
          <button class="tablinks" onclick="renginiuSarasas(event, 'Bus')" id="defaultOpen">Artėjantys renginiai</button>
          <button class="tablinks" onclick="renginiuSarasas(event, 'Buvo')">Praėję renginiai</button>

        </div>

          <div id="Bus" class="tabcontent">
            </br>
              <div class="row">

              <?php
            $visirenginiaiObjektas = visirenginiai();
            $renginysArray = mysqli_fetch_assoc($visirenginiaiObjektas);
            while ($renginysArray){
                ?>
                <div class="col-sm-2">
                  <?php echo "{$renginysArray['metai']} &nbsp &nbsp";
                  echo "{$renginysArray['valanda']}" ?>
                </div>

                <div class="col-sm-4">
                  <?php echo "{$renginysArray['vieta']}" ?>
                </div>
                <div class="col-sm-4">
                    <h1 class="pasirodymaih1">
                  <?php echo "<a href='koncerto-aprasymas.php?nr={$renginysArray['id']}'> {$renginysArray['pavadinimas'] } </a>";?>
                </h1></div>
                <div class="col-sm-2">

                  <button type="button"><a href="<?php  echo $renginysArray['bilietai']?>" target="_blank" >&nbsp Pirkti  bilietus &nbsp</a></button>
                </div>

  </br>
        <?php $renginysArray = mysqli_fetch_assoc($visirenginiaiObjektas);
          }  ?>
  </br>
          </div>
        </div>

<div id="Buvo" class="tabcontent">
  </br>
  <h3></h3>
  <div class="row">

      <?php
    $visirenginiaiObjektas = visipraejerenginiai();
    $renginysArray = mysqli_fetch_assoc($visirenginiaiObjektas);
    while ($renginysArray){
  ?>
  <div class="col-sm-2">
    <?php echo "{$renginysArray['metai']} &nbsp &nbsp";
     echo "{$renginysArray['valanda']}" ?>
    </div>

  <div class="col-sm-4">
    <?php echo "{$renginysArray['vieta']}" ?>
  </div>
  <div class="col-sm-4">
      <h1 class="pasirodymaih1">
    <?php echo "<a href='koncerto-aprasymas.php?nr={$renginysArray['id']}'> <i>{$renginysArray['pavadinimas'] }</i> </a>";?>
  </h1></div>
    <div class="col-sm-2">  </div>


  </br>
    <?php $renginysArray = mysqli_fetch_assoc($visirenginiaiObjektas);
      }
      ?>
  </br>
  </div>
</div>



<script>
function renginiuSarasas(evt, laikotarpis) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(laikotarpis).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>




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
