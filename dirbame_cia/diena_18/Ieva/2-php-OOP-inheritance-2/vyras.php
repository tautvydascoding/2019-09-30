<?php

include("zmogus.php");

class Vyras extends Zmogus {
    private $testosteronas = 6122;

    public function setTestosterone($testo) {
        $this->testosteronas = $testo;
    }

    public function printTestosterone() {
        echo "Testosteronas: $this->testosteronas <br>";
    }

    public function printVyroDuomenys() {
        echo "ugis: ".$this->ugis."<br>";             
        echo "turtas: ".$this->turtas."<br>";
        echo "pusryciai: ".$this->getPusryciai()."<br>";
    }
}
//  $this->pusryciai, // nes private

// UZDUOTIS 1.
// susikurti f-jas kurios :
// 1. pakeicia 'testosterono' kieki
// 2. isveda 'testosrerono' kieki

// UZDUOTIS 2  (private-protected skirtumas)
// Vyras klases viduje atspausdinti:
// f-ja printVyroDuomenys()
// ugi, pusrycius, turtas
// kur gausite klaida? Kurio kintamojo neiseina atspausdinti?

// UZDUOTIS 3 (atspausdinti kintamaji, kurio neleido 2 uzdavinys)
// klases viduje (atspekite kurios) sukurti f-ja, kuri prieina prie privataus kintamojo . ir ji atspausdina
