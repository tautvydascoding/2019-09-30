<?php
class Zmogus {
    public $ugis = 0;
    private $pusryciai = 'kiausiniene';
    protected $turtas = 'namas';
    public function vyropusryciai(){
      echo "$this->pusryciai<br />";
    }
}

class Vyras  extends Zmogus {
    private $testosteronas = 6122;

public function printTestosteronas(){

  echo "$this->testosteronas<br />";
}
public function setTestosteronas($x){

  $this->testosteronas=$x;
}
public function printVyroDuomenys(){
  echo "$this->ugis<br/>";
    echo "$this->turtas<br/>";
      $this->vyropusryciai();

}

}


// UZDUOTIS 0.
// susikurti objekta VYRAS

$Vyras = new Vyras();
// UZDUOTIS 1.
// susikurti f-jas kurios :
// 1. pakeicia 'testosterono' kieki
// 2. isveda 'testosrerono' kieki

$Vyras->printTestosteronas();
$Vyras->setTestosteronas(2345);
$Vyras->printTestosteronas();

$Vyras->printVyroDuomenys();



// UZDUOTIS 2  (private-protected skirtumas)
// Vyras klases viduje atspausdinti:
// f-ja printVyroDuomenys()
// ugi, pusrycius, turtas
// kur gausite klaida? Kurio kintamojo neiseina atspausdinti?

// UZDUOTIS 3 (atspausdinti kintamaji, kurio neleido 2 uzdavinys)
// klases viduje (atspekite kurios) sukurti f-ja, kuri prieina prie privataus kintamojo . ir ji atspausdina
