<?php

include("gyvunas.php");

 // UZDUOTIS 1.1
 // sukurti klase 'Vilkas' su kintamaisiais:
 // public 'tipas'

class Vilkas extends Gyvunas{

    public $tipas = "tipas";

    public function printLigos() {
        echo "vilko ligos: $this->ligos <br>";
    }

    // function printPusryciai(); {
    //     echo "Vilko pusryciai: $this->puryciai <br>";
    // }
}

 // UZDUOTIS 1.2
 // klase 'Vilkas' paveldi klase 'Gyvunas'

