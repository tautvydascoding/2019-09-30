<?php
include_once ("Gyvynas.php");

class Vilkas extends Gyvunas
{
    public $tipas = 'geras';

    public function printPusryciai(){
            echo $this->pusryciai;
        }
}

