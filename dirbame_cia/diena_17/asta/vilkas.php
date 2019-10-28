<?php
include_once ('gyvunas.php');


class Vilkas extends Gyvunas {
  public $tipas = "paprastasis";
  public function printLigos(){
    echo  "$this->ligos<br />";
  }
}

// public __construct($tip, $svor, $lig){
// $this->tipas=$tip;
//     $this->svoris=$svor;
//     $this->ligos=$lig;
// }
//funkcija kuriame, kad legaliai pasiektume reiksmes, kurios nepasiekiamos is isores

?>
