var masinosBagazine = ["atsarginisRatas", "kastuvas", "gesintuvas", "virve", "uzkurimoLaidai", "krokodilas"];

console.warn("console blogai atvaizduoja isskleistus masyvus, bet gerai atvaizduoja skliaustuose []");


// =====sukurti masyva 100 elementu ilgio naudojant FOR
//===== sukurti masyva 100 elementu ilgio naudojant WHILE


// ————————————pasikartojimas f-ju ir while————————————————————————

// Uzduotis:
// 1A) susikurti funkcija, kuri atspasudina i konsole skaiciu kuri paduodate
function atspausdinaBelenka(abcd) {
    console.log(abcd);
}

atspausdinaBelenka('eina sau');
// 1B) Paleisti funkcija 20 kartu

for(var i = 0; i < 20; i++) {
    atspausdinaBelenka('eina sau');
}

// 2) susikurti funkcija, kuri spausdina paduota skaiciu, kai paduodama reiksme (jeigu niekas nepaduodama:
// spausdina "-1")

function spausdinaSkaiciu(skaicius) {
    if(skaicius != undefined) {
        console.log(skaicius);
    } else {
        console.log(-1);
    }
}

spausdinaSkaiciu()
//------------while break-- uzduotis:----------------------------


//  sukurti nauja masyva uzpildyta, atsitiktiniais skaiciais
// var nuoVienoIkiSimto = Math.floor(Math.random() * 100);
skaiciai = [];

function uzpiltMasyva() {
    for(var i = 0; i < 50; i++) {
        skaiciai.push(Math.floor(Math.random() * 100));
    }
}

uzpiltMasyva();

console.log(skaiciai);

// ——————————— Object ————————————————
// Uzduotis
// 1:  susiskurti darbuotojo "worker" obj., kuris saugo varda, pavarde, amziu, pagamintu detaliu skaiciu
// 2. sukurti “workers”  masyva. Masyvas, kuriame saugomi objektai. Kiekvienas obj saugo visa informacija
// apie konkretu darbuotoja:
    //    A) paleisti cikla ir uzpildyti "workers" masyva darbuotoju duomenimis (amzius ir pagamintu detaliu skaicius - burtu keliu)
   //	HINT: // !!!!! var naudojame, kad RAM'e / atmintyje sukurtu nauja kintamaji
// 3. sukurti f-ja, kuri i konsole atspausdiname masyva (pilna objektu)

let Worker = {
    vardas: "",
    pavarde: "",
    amzius: 0,
    pagDetSk: 0 
};

let visiDarbuotojai = [];
let darbuotojuMatrica = [['Jonas', 'Jonaitis', 30, 200], ['Petras', 'Petraitis', 25, 250], ['Gedas', 'Gedaitis', 40, 150],
['Sarunas', 'Sarunaitis', 50, 400]];

function darbObjektai(mtrx) {
    for(var i = 0; i < mtrx.length; i++) {
        for(var j = 0; j < mtrx[i].length; j++) {
            console.log(mtrx[j]);
        }
    }
}



// apsilimui

var masyvas = [62, 51, 81, 91, 69, 73, 18, 36, 2, 48, 76, 55, 52, 42, 50, 91, 55, 4, 90, 26, 68, 82, 55, 27,
     54, 89, 68, 66, 76, 35, 34, 55, 8, 49, 77, 86, 80, 14, 52, 69, 84, 80, 7, 58, 99, 16, 96, 22, 80, 95];
var min = 10;
var max = 100;
// 0 UZDUOTIS - pasikartoti:
// sukurti masyva 20 ilgumo ir stalcius (index) kurie yra lyginiai i pakeisti i zodi "lyginis"

// for(var i = 0; i < masyvas.length; i++) {
//     if(i % 2 == 0) {
//         masyvas[i] = "lyginiai";
//     }
// }

// console.log(masyvas);

// 1 UZDUOTIS:
// kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100.
// masyvo ilgis 60

skaiciai1 = [];

function uzpiltMasyva1() {
    for(var i = 0; i < 60; i++) {
        skaiciai1.push(Math.floor(Math.random() * (100-10) + 10));
    }
}

uzpiltMasyva1();

console.log(skaiciai1);

// 2 UZDUOTIS:
// burtu keliu masyvo narius, su 10 % tikimybe paversti negiamais  ( padauginti is  -1)
// pvz:
// var a = Math.random(); // nuo 0 iki 1 (1- neiskaitant)
// if ( a <= 0.1) {
//     console.log( "laimejai" );
// }
function proncentiniai() {
    for(var i = 0; i < skaiciai1.length; i++) {
        var rand = Math.random();
        if(rand <= 0.1) {
            skaiciai1[i] *= -1; 
        }
    }
}

proncentiniai();

console.log(skaiciai1);


// 3 UZDUOTIS:
// visus skaicius paversti teigiamas (is masyvo parts)
// 4 UZDUOTIS:
// surasti geriausia darbuotoja
// 5 UZDUOTIS:
//surasti blogiausia darbuotoja