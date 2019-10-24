<?php

// UZDUOTIS 1.
// susikurti f-jas kurios :
// 1. pakeicia 'testosterono' kieki
// 2. isveda 'testosrerono' kieki


// UZDUOTIS 2  (private-protected skirtumas)
// Vyras klases viduje atspausdinti:
// f-ja printVyroDuomenys()
// ugi, pusrycius, turtas
// kur gausite klaida? Kurio kintamojo neiseina atspausdinti?

include_once ("Zmogus.php");

class Vyras  extends Zmogus {
    private $testosteronas = 6122;
    public function setTestosteronas ($testosteronas){
        $this->testosteronas = $testosteronas;
    }
    public function getTestosteronas (){
        return $this->testosteronas;
    }
    public function printVyroDuomenys(){
        echo $this->ugis;
        echo $this->turtas;
        echo $this->getPusryciai();
    }
}