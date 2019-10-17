<?php

require_once("zmogus.php");

class Vyras  extends Zmogus {
    private $testosteronas = 6122;

    public function printiVisiDuomenys() {
        echo " <br />";
        echo " <br />";
        echo "testostoronas yra: $this->testosteronas <br />";
        echo "ugis yra: $this->ugis <br />";
        echo "turtas yra: $this->turtas <br />";
        echo "pusryciai yra: " .  $this->getPusryciai() .  "<br />";
    }

    public function getTestosteronas() {
        return $this->testosteronas;
    }
    public function setTestosteronas($xx) {
        $this->testosteronas = $xx;
    }
}
