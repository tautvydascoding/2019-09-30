<?php


require_once("vyras.php");

$Jonas = new Vyras();
// echo $Jonas->testosteronas; // KLAIDA
echo $Jonas->getTestosteronas(); //
echo $Jonas->setTestosteronas(5000); //
echo $Jonas->getTestosteronas(); //
echo"<br />"; //
echo"<br />"; //
echo $Jonas->ugis; //
echo $Jonas->getPusryciai(); //
echo $Jonas->printiVisiDuomenys(); //
