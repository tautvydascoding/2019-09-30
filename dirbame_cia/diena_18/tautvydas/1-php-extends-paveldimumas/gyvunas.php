<?php

 // UZDUOTIS 1.0:
 // sukurti klase 'Gyvunas' su kintamaisiais:
 // public 'svoris', private 'pusryciai', protected 'ligos'

class Gyvunas {
    public $svoris = -999;
    private $pusryciai = "alkanas";
    protected $ligos = "sirdies yda";

    public function printPusryciai(){
        echo "$this->pusryciai <br />";
    }
}
