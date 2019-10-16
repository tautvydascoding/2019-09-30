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
        <h1>Isijunk console (narsykleje)</h1>

<?php
  $meniu = array("home", "about", "gallery","contact","blog");
  for($i=0; $i<count($meniu); $i++){
echo $meniu[$i]."<br>";
}
$TIK = ["5.jpg", "6.png", "balionas.png", "header.jpg", "pencil_sharpener.jpg", "writing.jpg"];
echo "<img src='img/5.jpg' alt=''  />";
for($i=0; $i<count($TIK); $i++){
echo "<img src='img/$TIK[$i]' width='25%'  />";
//echo"<img src='img/{$TIK[$i]}' width='25%'  />";  dar vienas budas masyvo isvedimo
}

for($i=0; $i<10; $i++):
echo "akivaizdesnis uzdarymas (:endfor)";
endfor;

if(true):
  echo "akivaizdesnis uzdarymas (:endifs)";
  if(true):
    echo "akivaizdesnis uzdarymas (:endifs)";
  endif;
endif;

$arVedes = true;
$x = "duoti paskola";
$Y = "neduoti";
$arDuotiPaskola = ($arVedes == true) ? $x : $y; //$x yra grazinama reiksme. Cia "?" reiskia "true", o dvitaskis reiskia else

for ($i=0; $i < 4; $i++): ?>
<div class="col-3">
  <h2>  <?php echo "Antraste"; ?> </h2>
  <p>
     rasome su html </p>

</div> <!---end col-3 -->

<?php endfor; ?>

        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
