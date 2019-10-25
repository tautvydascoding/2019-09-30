<?php

 // 2. SUSIKURTI "B" objekta
 // 3. atspausdinti visus kintamuosius (nenaudojant/nesikurti "A" objekto IR nenaudojant "echo" komandos "A" klaseje)
 
 include("B.php");

 $Barbe = new B();

//  print_r($Barbe);

echo "Plaukai: ".$Barbe->plaukuSpalva."<br>";
echo "Vardas: ".$Barbe->getName()."<br>";
echo "Yda: ".$Barbe->getSirdiesYda()."<br>";