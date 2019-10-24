<?php
 // UZDUOTIS 1.1
 // sukurti klase 'Vilkas' su kintamaisiais:
 // public 'tipas'
 include_once('gyvunas.php');

class Vilkas extends Gyvunas {
    public $tipas = "baltasis";
    public function __construct($tip, $svor, $lig) {
        $this->svoris = $svor;
        $this->ligos = $lig;
        $this->tipas = $tip;
    }
    // TAM KAD PASIEKTI PUSRYCIUS IR LIGAS
    // SUPORGRAMUOJAM F-JAS public:
     // public printLigos()
     // public printPusryciai()
    public function printLigos(){
        echo "$this->ligos <br />";
    }
    // niekada nepavyks isvesti private arba protected kintamuju
    // public function printPusryciai(){
    //     echo "$this->pusryciai <br />";
    // }
}



 // UZDUOTIS 1.2
 // klase 'Vilkas' paveldi klase 'Gyvunas'
