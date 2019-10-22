<?php
// UZDUOTIS 1:
// sukurti  klase: 'zmogus'
// zmogus turi: public ugis, public vardas
// f-ja 'einu()', kuri daro echo "Einu einu..."

class Zmogus {
    public $ugis = 0;
    public $vardas = "vardas";

    function einu() {
        echo $this->vardas." eina gatve ir jauciasi keistai, nes yra ".$this->ugis."cm ugio <br/>";
    }
}

