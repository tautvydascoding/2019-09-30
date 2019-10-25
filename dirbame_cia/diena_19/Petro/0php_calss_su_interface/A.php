<?php
include_once ("Z.php");



// UZDUOTIS 2:
// sukurti klase 'A'
// kuri turi kintamaji:  svoris =100

// UZDUOTIS 2.2:
//   klase 'A' turi panaudoti interface 'Z'

class A implements Z {
    public $svoris =100;
    public function setSvoris($x){
       $this->svoris = $x;
    }
    public function getSvoris(){
        echo $this-> svoris;
    }
}

// UZDUOTIS 3:
// susikurti objekta klases A

// UZDUOTIS 3.2:
// 1. atspausdinti svori
// 2. pakeisti svori i 90
// 3. atspausdinti svori

