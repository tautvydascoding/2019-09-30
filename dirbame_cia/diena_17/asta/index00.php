
<?php
// UZDUOTIS 1:
// sukurti tris klases:
class Zmogus{
  public $ugis =1;
  protected $svoris=1;
  private $pinigai=0;
  public function getpinigai(){
    echo $this->pinigai=345;
  }
};

class Moteris extends Zmogus{
  public $estrogenai=3550;
  public function getsvoris(){
    echo "$this->svoris<br />";
  }
};
class Vyras extends Zmogus{
  public $testosteronai=8600;
  public function getsvoris1(){
    echo "$this->svoris<br />";
}
}

// UZDUOTIS 1.2:
// klase 'moteris' paveldi klase 'zmogus'.
// klase  'vyras'  paveldi klase 'zmogus'

// klase 'zmogus'  turi kintamuosius: public ugis, protected svoris, private pinigai
// klase 'moteris' turi kintamaji: estrogenai = 3550
// klase 'vyras'   turi kintamaji: testosteronai = 8600

// UZDUOTIS 2:
// susikurti du objektus: Monika  ir Tadas  (vyras ir moteris, BET ne Zmogus)

$Monika = new Moteris;
$Tadas = New Vyras;

echo $Monika->estrogenai;
echo $Tadas->testosteronai;

// UZDUOTIS 2.1:
// issivesti Monikos ir Tado:
// hormono skaicius, ugis, (lengva)
//  svoris, pinigu skaicius, (sunkiau)
$Monika->getsvoris();
$Tadas->getsvoris1();

$Monika->getpinigai();
$Tadas->getpinigai();

// !!!!!!
// !!!!! atspausdinti visus kintamuosius (NEnaudojant/nesikurti "zmogus"  objekto
