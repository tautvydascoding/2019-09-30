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

  echo "

              {$gydytojasArray['name']} <a href='doctor.php?nr={$gydytojasArray['id']}'> {$gydytojasArray['lname']}

      </a> "; ?>
      <button class='btn btn-outline-danger' type="button"><a href='doctor.php?nr=<?php echo $gydytojasArray['id']?>'>Atnaujinti</a></button>;
       <button type="button"><a href='trintiGydytoja.php?nr=<?php echo $gydytojasArray['id']?>'>Trinti</a></button>;
     </br>;
       <?php

  $gydytojasArray = mysqli_fetch_assoc($visigydytojaiObjektas);
}

     ?>

<a href='doctor.php?nr=$gydytojasArray['id']'>
     <!--
     $gyt = getDoctor(6);
     <form   action="registracija.php" method="get">
            <input type="text" name="vardas" value="<?php echo $gyt['name'] ?> >
            <input type="text" name="pavarde" value="<?php echo $gyt['lname'] ?>>

     </form>
<!---Registracija-->
<h1>Naujo Gydytojo registracija</h1>
     <form   action="registracija.php" method="get">
            <input type="text" name="vardas" placeholder="Iveskite varda">
            <input type="text" name="pavarde" placeholder="Iveskite pavarde">
            <button type="Submit">Registracija</button>

          </form>


   <!-- <button type="button"><a href='naujasGydytojas.php?vardas=TOMAS&pavarde=KARCIAUSKIS'>Registruotis</a></button>;
     <button type="button"><a href='trintiGydytoja.php?nr=19'>Trinti</a></button>; -->




  </body>
</html>
