<?php

// UZDUOTIS 2.1
// susikurti  objektus: Monika

// UZDUOTIS 2.2
// Atspasudinti varda ir ugi naudojant
// f-ja 'manoUgis()'
// f-ja 'manoVardas()'

include("zmogus.php");

$Monika = new Zmogus();
//get ugis
echo "Mano ugis: ".$Monika->getManoUgis()."<br/>";

//get vardas
echo "Mano vardas: ".$Monika->getManoVardas()."<hr/>";

//set new ugis
$Monika->setManoUgis("164");
echo "Mano ugis po pakeitimo: ".$Monika->getManoUgis()."<br/>";

//set new vardas
$Monika->setManoVardas("Moni");
echo "Mano vardas po pakeitimo: ".$Monika->getManoVardas()."<br/>";


// UZDUOTIS 3:
// susikurti konstruktoriu

// UZDUOTIS 3.1:
// susikurti  objektus: Monika, Tadas, Jurgis (naudojant konstruktoriu)
