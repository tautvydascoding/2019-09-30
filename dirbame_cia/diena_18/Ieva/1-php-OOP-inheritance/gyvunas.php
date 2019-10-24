<?php
// sukurti klase 'Gyvunas' su kintamaisiais:
 // public 'svoris', private 'pusryciai', protected 'ligos'
 
class Gyvunas{
    public $svoris = 0;

    private $pusryciai = "nam nam";

    protected $ligos = "ligu nera";

    public function printPusryciai() {
        echo "pusryciai: $this->pusryciai <br>";
    }

}
