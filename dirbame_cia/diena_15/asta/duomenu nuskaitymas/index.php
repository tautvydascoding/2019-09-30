<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- mano css failas visada pats zemiausias -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet"  href="css/style.css">
    </head>
    <body>
        <h1>Failas nuskaitytas:</h1>
        <?php
        $preke = "";
        $prekesmasyvas = [];
        $i = 0;
$myfile = fopen("prekes.txt", "r") or die ("Unable to open file!");
while (!feof($myfile)){

//  echo fgets($myfile)."<br>";
  $preke = fgets($myfile); //fgets nskaito is failo viena eilute

  $prekesmasyvas[$i] = explode(";",$preke);//i matrica idedame vienos prekes masyva
  $i ++;

}
fclose($myfile);
  print_r($prekesmasyvas);
  for ($i=0; $i<count($prekesmasyvas); $i++){
    echo "<h2>{$prekesmasyvas[$i][0]}</h2>";
    echo "<p>{$prekesmasyvas[$i][1]}</p>";
  }





?>





        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
