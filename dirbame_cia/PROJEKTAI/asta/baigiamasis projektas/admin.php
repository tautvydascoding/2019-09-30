<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Svetainės administravimas</title>
  </head>
  <body>
    <h1> Svetainės administravimo įrankis</h1>

    <?php include_once('db-functions.php'); ?>

    <p><b>Įvekite naują koncertą</b></p>

    <form   action="koncertoRegitracija.php" method="get">
      <input type="text" name="pavadinimas" placeholder="Iveskite koncerto pavadinimą"><br /><br />
           <textarea name="aprasymas" rows="8" cols="80" placeholder="Įveskite koncerto aprašymą"></textarea>
            <button type="Submit">Siųsti</button>

         </form>
<br />
  <p><b>Įvesti naują renginį</b></p>


  <p>Pairinkite koncerto pavadinimą</p>
<!-- forma koncerto ivedimui -->
<form   action="renginioRegistracija.php" enctype="multipart/form-data" method="get">
  <select name="manopasirinkimas">

  <?php
  $visirenginiaiObjektas = visikoncertai();
  $renginysArray = mysqli_fetch_assoc($visirenginiaiObjektas);
  while ($renginysArray){
  ?>
  <option value=<?php echo "{$renginysArray['id'] } "?>><?php echo "{$renginysArray['pavadinimas'] } "?></option>

  <?php $renginysArray = mysqli_fetch_assoc($visirenginiaiObjektas);
  }

  ?>
  </select>
  <input type="date" name="metai" placeholder="Iveskite koncerto datą formatu Y-M-D">
  <input type="time" name="valanda" placeholder="Iveskite laiką formatu H-M-S">
  <input type="text" name="vieta" placeholder="Iveskite renginio vietą">
  <input type="text" name="bilietai" placeholder="Iveskite bilietų platintojus, formatu https://www.tiketa.lt">
               <button type="Submit">Siųsti</button>

     </form>

       <p><b>Įveskite koncerto nuotraukas</b></p>

       <form   action="nuotraukuivedimas.php" method="POST" enctype="multipart/form-data">
         <select name="nuotraukupasirinkimas">

         <?php
         $visirenginiaiObjektas = visikoncertai();
         $renginysArray = mysqli_fetch_assoc($visirenginiaiObjektas);
         while ($renginysArray){
         ?>
         <option value=<?php echo "{$renginysArray['id'] } "?>><?php echo "{$renginysArray['pavadinimas'] } "?></option>

         <?php $renginysArray = mysqli_fetch_assoc($visirenginiaiObjektas);
         }

         ?>
         </select>
         <input type="file" name="file[]" placeholder="Ikelkite nuotrauka">
         <input type="file" name="file[]" placeholder="Ikelkite nuotrauka">
         <input type="file" name="file[]" placeholder="Ikelkite nuotrauka">
         <input type="file" name="file[]" placeholder="Ikelkite nuotrauka">
         <input type="file" name="file[]" placeholder="Ikelkite nuotrauka">

                      <button type="Submit">Įkelti</button>

            </form>


  </body>
</html>
