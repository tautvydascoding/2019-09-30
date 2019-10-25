<?php

 // UZDUOTIS:
 // 1. sukurti dvi klases A ir B
 // "B" klase turi paveldi "A"
 // "A" klase turi kintamuosius:
 // name , plaukuSpalva, sirdiesYda
 // kurie yra "public", "private", "protected"

 // 2. SUSIKURTI "B" objekta
 // 3. atspausdinti visus kintamuosius (nenaudojant/nesikurti "A" objekto IR nenaudojant "echo" komandos "A" klaseje)

 class A{
     
     public $plaukuSpalva = "blondine";
     protected $name = "Anastasija";
     private $sirdiesYda = "sirdute liudi";

     public function getName() {
        return $this->name; 
    }

    public function getSirdiesYda() {
        return $this->sirdiesYda; 
    }
 }