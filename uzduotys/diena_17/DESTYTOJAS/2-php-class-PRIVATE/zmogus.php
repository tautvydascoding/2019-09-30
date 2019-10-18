<?php



/**
 *
 */
class Zmogus {
    private $vardas = "bevardis";
    private $ugis = -999;

    function __construct($x=-888, $y="nera" ){
        $this->ugis = $x;
        $this->vardas = $y;
    }
    public function setUgis($x) {
        $this->ugis = $x;
    }
    public function getUgis() {
        return $this->ugis;
    }
}
