<h2>Sveinukus uzsiregistravus</h2>

<?php
 
    print_r(   $_GET  ); // globalus
    $vard = $_GET['vardas'];   // atributo 'name="vardas"' reiksme
    $pavd = $_GET['pavarde'];
    $telef = $_GET['tel'];    // <input type="number" name="tel"
      echo "Jusu vardas: $vard, pavarde: $pavd,  telefonas: $telef  <br />";
 ?>
