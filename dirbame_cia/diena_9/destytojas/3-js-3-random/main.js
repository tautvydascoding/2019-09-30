console.log("labas");



//
// apsilimui

// 0 UZDUOTIS - pasikartoti:
// sukurti masyva 20 ilgumo ir stalcius (index) kurie yra lyginiai i pakeisti i zodi "lyginis"


// 1 UZDUOTIS:
// kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100.
// masyvo ilgis 60
var masyvas = [];
var min = 10;
var max = 100;
// let gaminiuSkaicius = (Math.random() * 90) + 10; // nuo 10 iki 100
for (var i = 0; i < 60; i++) {
    masyvas[i] =  (Math.random() * 90) + 10; // nuo 10 iki 100
}
console.log(masyvas);


// 2 UZDUOTIS:
// burtu keliu masyvo narius, su 10 % tikimybe paversti negiamais  ( padauginti is  -1)
// pvz:
// var a = Math.random(); // nuo 0 iki 1 (1- neiskaitant)
// if ( a <= 0.1) {
//     console.log( "laimejai" );
// }

// 3 UZDUOTIS:
// visus skaicius paversti teigiamas (is masyvo parts)
// 4 UZDUOTIS:
// surasti geriausia darbuotoja
// 5 UZDUOTIS:
//surasti blogiausia darbuotoja
