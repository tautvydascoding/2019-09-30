

Susikurti 2 failus:

template-preke.php
index.php


// UZDUOTIS:
// 1: sukurti "template-preke.php" faila
// h2 (antraste)
// p (aprasymas)
// button (Kaina)

// 2) sukurti index.php su "<!Doctype html body" (ideti container ir row su bootatrap)

// 2.2) index.php
// sukurti kintamuosius:
// $kaina = ...;
// $antraste = ...;
// $aprasymas = ...;
// 3) template-preke.php faile   isvesti kintamuosius $kaina, $antraste, $aprasymas
pvz
<h2> <?php echo $antraste;  ?> </h2>
// 3.2) index.php faile!! - paleisti FOR cikla 6 kartus include('template-preke.php');
