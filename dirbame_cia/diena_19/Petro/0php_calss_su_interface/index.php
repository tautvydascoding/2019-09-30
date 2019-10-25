<?php
include_once ("A.php");
// UZDUOTIS 3:
// susikurti objekta klases A

// UZDUOTIS 3.2:
// 1. atspausdinti svori
// 2. pakeisti svori i 90
// 3. atspausdinti svori

$automobilis = new A();
//echo $automobilis->svoris;
echo $automobilis->setSvoris(500);
echo $automobilis->getSvoris();



