console.log("labas as krabas");

// 0 UZDUOTIS - pasikartoti:
// sukurti masyva 20 ilgumo. skaicius, kurie yra lyginiai i pakeisti i zodi "lyginis"
var masyvasApsilimui = []; 
for (var i = 0; i < 20; i++) {
    masyvasApsilimui [i] = 1;
 }

 console.log("masyvas apsilimui: ", masyvasApsilimui);

 
 for (var i = 0 ; i < masyvasApsilimui.length; i++) {
     if (i % 2 == 0) {
        masyvasApsilimui[i] = 'lyginis';
     }
 }

 console.log("masyvas apsilimui su lyginiais skaiciais: ", masyvasApsilimui);
 
// 1 UZDUOTIS:
// kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100.
// masyvo ilgis 60

var masyvas = [];
var min = 10;
var max = 100;

for (var i = 0; i < 60; i++) {
    masyvas[i] = Math.round((Math.random()*(max - min))+min);
   }

console.log("60skaiciu masyvas: ", masyvas);

// 2 UZDUOTIS:
// burtu keliu masyvo narius, su 10 % tikimybe paversti negiamais  ( padauginti is  -1)
// pvz:
// var a = Math.random(); // nuo 0 iki 1 (1- neiskaitant)
// if ( a <= 0.1) {
//     console.log( "laimejai" );
// }


for (var i = 0; i < masyvas.length; i++) {
   var a = Math.random(); 
        if (a < 0.1) {
            masyvas[i] =  masyvas[i] * (-1);
    }
}

console.log("masyvas su neigiamais skaiciais: ", masyvas);

// 3 UZDUOTIS:
// visus skaicius paversti teigiamas (is masyvo parts)

for (i = 0; i < masyvas.length; i++) {
    if (masyvas[i] < 0) {
        masyvas [i] = masyvas[i] * (-1);
    }
}

console.log('masyvas su teigiamais skaaiciais: ', masyvas);

// 4 UZDUOTIS:
// surasti geriausia darbuotoja

    var pagalbinis = 0;

    for (i = 0; i < masyvas.length; i++) {
        if (pagalbinis < masyvas[i]) {
            pagalbinis = masyvas[i];
        }
    }

    console.log('didziausias skaicius: ', pagalbinis);
    
// 5 UZDUOTIS:
//surasti blogiausia darbuotoja

pagalbinis = 0;

    for (i = 0; i < masyvas.length; i++) {
        if (masyvas[i] <= pagalbinis) {
            pagalbinis = masyvas[i];
        }
    }

    console.log('maziausias skaicius: ', pagalbinis);