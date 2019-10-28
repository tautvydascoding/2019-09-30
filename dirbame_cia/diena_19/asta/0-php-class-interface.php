<?php
// UZDUOTIS 1:
// sukurti interface 'Z'
// kuris turi f-jas:
//   setSvoris($x)
//   getSvoris()
 include_once('interface.php');

// UZDUOTIS 2:
// sukurti klase 'A'
// kuri turi kintamaji:  svoris =100
class A implements Z {
  public $svoris = 100;
  public function setSvoris($x){
    $this->svoris = $x;
  }
  public function getSvoris(){
    echo "$this->svoris";
  }
}

// UZDUOTIS 2.2:
//   klase 'A' turi panaudoti interface 'Z'

// UZDUOTIS 3:
// susikurti objekta klases A
$B = new A();
$B->getSvoris();
$B->setSvoris(90);
$B->getSvoris();


// UZDUOTIS 3.2:
// 1. atspausdinti svori

// 2. pakeisti svori i 90
// 3. atspausdinti svori
