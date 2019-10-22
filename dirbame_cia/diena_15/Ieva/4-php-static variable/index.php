<?php

echo "Static:";
function test() {
    static $a = 0; // visada uzgrobta vieta serveryje, geriau nenaudoti
    echo $a;
    $a++;
}

test();
test();
test();
test();
echo "<br> <br> Rekursija: <br>";

// rekursija (pati funkcija viduje saves iskviecia save(reikia if'u))
function rekursija() {
    static $i = 0; //tik viena karta(pirma) isaukiama
    $i++; 
        if ($i < 10) {
        echo $i."<br/>";
        rekursija(); 
    }
}

rekursija(); //naudojama keistiems uzdaviniams, pvz kad jei neprisijungia prie serverio, uz kazkiek laiko vel bandys jungtis, iki kol prisijungs