<?php
// UZDUOTIS 3:
// susikurti objekta klases A

// UZDUOTIS 3.2:
// 1. atspausdinti svori
// 2. pakeisti svori i 90
// 3. atspausdinti svori

include("A.php");

$deze = new A();

$deze->getSvoris();

$deze->setSvoris(90);

$deze->getSvoris();
