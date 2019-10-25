<?php

class A {
    public $name = 'abc';
    private $plaukSpalva = 'balta';
    protected $sirdiesYda = true;
}

class B extends A {
    public function getInfo() {
        echo "$this->name, $this->plaukSpalva, $this->sirdiesYda";
    }
}

// UZDUOTIS:
 // 1. sukurti dvi klases A ir B
 // "B" klase turi paveldi "A"
 // "A" klase turi kintamuosius:
 // name , plaukuSpalva, sirdiesYda
 // kurie yra "public", "private", "protected"

 // 2. SUSIKURTI "B" objekta
 // 3. atspausdinti visus kintamuosius (nenaudojant/nesikurti "A" objekto IR nenaudojant "echo" komandos "A" klaseje)


 //