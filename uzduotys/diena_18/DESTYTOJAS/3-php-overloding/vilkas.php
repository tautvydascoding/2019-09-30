<?php


require_once( 'vilkas.php');


class Vilkas  extends Gyvunas {
    function test() {
        $this->valgyti();
    }
    function miegoti() {
        echo "V miega";
    }

} // END class
$pilkasis = new Vilkas();
$pilkasis->miegoti();
$pilkasis->daugintis(); // ERROR
$pilkasis->valgyti(); // ERROR
