// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================



//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:

// document.write(" <b class='bg-info'> Mano tekstas </b> ");
// window.alert("labas");
// alert("Viso");
// var ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);
// document.querySelector('h1').innerHTML = " <b>Antraste</b>";

//----Elemento duomenys--------
// auksto paemimas:
// var aukstis = document.querySelector('h1').clientHeight;   // clientHeight includes the height and vertical padding.
// var aukstis = document.querySelector('h1').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.querySelector("h1").style.height = "500px"; 		// change the height of a <div> element:

//=====================PASIKARTOJIMAS==================

//  1.1 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja print(15.99);

function printKaina(x) {
    console.log(x);
}

// printKaina(15.99)

//  1.2 UZDUOTIS
// iskviesti f-ja print 3 kartus, kad atspausdintu 3 skirtingas kainas:  999 , 13.49, 100.05
//    vietoj x irasant, koki nors teksta pvz: printKaina( 999);

// printKaina(999);
// printKaina(13.49);
// printKaina(100.05);

// 2.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis() {
    let vidurkis = (5 + 10 + 8 + 6 + 8) / 5;
    return vidurkis
}

// console.log(pazymiuVidurkis());


// 2.2 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis1(x1, x2, x3, x4, x5) {
    let vidurkis = (x1 + x2 + x3 + x4 + x5) / 5;
    console.log(vidurkis);
}

// pazymiuVidurkis1(6, 7, 9, 5, 10);

//=====================RETURN==================

// 1 UZDUOTIS
// A) parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// B)   f-joje  sukurti kintamaji "vardas" Tomas
// C) patikrinti ar veikia f-ja

function getVardas() {
    let vardas = "tomas";
    return vardas;
}

// console.log(getVardas());

// 2 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
//  f-joje sukurti kintamaji   "pavarde" Tomauskas, "vardas" - Antanas
// patikrinti ar veikia f-ja

function getVardasPavarde() {
    let vardas = "tomas";
    let pavarde = "antanas";
    return "vardas " + "pavarde";
}

// console.log(getVardasPavarde());

// 3 UZDUOTIS
// A) parasyti f-ja "getPelnas()", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje sukurti kintamaji "pajamos" 12500
// B) f-joje sukurti kintamaji "islaidos" 7500
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - islaidos)
// C) patikrinti ar veikia f-ja

function getPelnas() {
    let pajamos = 12500;
    let islaidos = 7500;

    let pelnas = pajamos - islaidos;
    return pelnas;
}

// console.log(getPelnas())

// 3.2 UZDUOTIS
// A) parasyti f-ja "getPelnas(pajamos, nuostoliai)", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - nuostoliai)
// C) patikrinti ar veikia f-ja

function getPelnas1(pajamos, nuostoliai) {
    let pelnas = pajamos - nuostoliai;
    return pelnas;
}

// console.log(getPelnas1(12500, 7500))

// 4.1 UZDUOTIS
// parasyti f-ja, kuri skaiciuoja vieno mokinio pazymiu vidurki
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
//  turi "return" zodeli.

function getPazymiuVidurkis2(x1, x2, x3, x4, x5) {
    let vidurkis = (x1 + x2 + x3 + x4 + x5) / 5;
    return vidurkis;
}

// console.log(getPazymiuVidurkis2(8, 9, 4, 3, 5));


// 4.2 UZDUOTIS
// parasyti f-ja, kuri skaiciuoja 6-kiu mokiniu pazymiu vidurki
// "getKlasesPazymiuVidurkis(y1, y2, y3, y4, y5, y6)"
// f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
// turi "return" zodeli.

let y1 = getPazymiuVidurkis2();
let y2 = getPazymiuVidurkis2();
let y3 = getPazymiuVidurkis2();
let y4 = getPazymiuVidurkis2();
let y5 = getPazymiuVidurkis2();
let y6 = getPazymiuVidurkis2();

function getKlasesPazymiuVidurkis(y1, y2, y3, y4, y5, y6) {
    let vidurkis = (y1 + y2 + y3 + y4 + y5 + y6) / 6;
    return vidurkis;
}

// console.log(getKlasesPazymiuVidurkis());
// document.querySelector('h1').innerHTML = getKlasesPazymiuVidurkis();


// 5 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina
// surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

function getH1ElementoAukstis() {
    let aukstis = document.querySelector('h1').clientHeight;
    return aukstis;
}

// document.querySelector('h2').innerHTML = getH1ElementoAukstis();

// =================FOR intro  ======================

// 1 UZDUOTIS
// naudojant FOR cikla, atspausdinti  "#" tiek, kad gautusi trikampio vaizdas
// #
// ##
// ###
// ####
// #####
// ######

function trikampis() {
    for(i = 0; i <= 5; i++) {
        for(j = 0; j <=i; j++) {
            document.write('#');
        }
        document.write('</br>');
    }
}

// trikampis()


//=========== =KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos

//======= local/global or SCSS or IF or Bootstrap Layout or Frog/Garden ====

// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================

function setVardas1(name) {
    vardas = name + "1";
}
setVardas1("Tomas"); // sugalvoti vis kita zodi
 
function getVardas1() {
    return vardas + "1";
}
var x = getVardas1();   // arba  console.log(  getVardas1() );
console.log(  x );     // isveda: Tomas11

function setVardas2(name) {
    vardas = name + 2;
}

setVardas2('Gedas');

function getVardas2() {
    return vardas + '2';
}

console.log(getVardas2());

function setVardas3(name) {
    vardas = name + 3;
}

setVardas3('juozas');

function getVardas3() {
    return vardas +'3';
}

document.querySelector('h2').innerHTML = getVardas3();

function setVardas4(name) {
    vardas = name + 4;
}

setVardas4('kazys');

function getVardas4() {
    return vardas + '4';
}

document.querySelector('h2').innerHTML = getVardas4();

function setVardas5(name) {
    vardas = name + 5;
}

setVardas5('petras');

function getVardas5() {
    return vardas + '5';
}

document.querySelector('h2').innerHTML = getVardas5();

function setVardas6(name) {
    vardas = name + 6;
}

setVardas6('jonuska');

function getVardas6() {
    return vardas + '6';
}

document.querySelector('h2').innerHTML = getVardas6();

function setVardas7(name) {
    vardas = name + 7;
}

setVardas7('petruska');

function getVardas7() {
    return vardas + '7';
}

document.querySelector('h2').innerHTML = getVardas7();

function setVardas8(name) {
    vardas = name + 8;
}

setVardas8('aurimas');

function getVardas8() {
    return vardas + '8';
}

document.querySelector('h2').innerHTML = getVardas8();

function setVardas9(name) {
    vardas = name + 9;
}

setVardas9('mykolas');

function getVardas9() {
    return vardas + '9';
}

document.querySelector('h2').innerHTML = getVardas9();

function setVardas10(name) {
    vardas = name + 10;
}

setVardas10('johnatanas');

function getVardas10() {
    return vardas + '10';
}

document.querySelector('h2').innerHTML = getVardas10();

function setVardas11(name) {
    vardas = name + 11;
}

setVardas11('liudas');

function getVardas11() {
    return vardas + '11';
}

document.querySelector('h2').innerHTML = getVardas11();

function setVardas12(name) {
    vardas = name + 12;
}

setVardas12('arminas');

function getVardas12() {
    return vardas + 12;
}

document.querySelector('h2').innerHTML = getVardas12();

function setVardas13(name) {
    vardas = name + 13;
}

setVardas13('linas');

function getVardas13() {
    return vardas + '13';
}

document.querySelector('h2').innerHTML = getVardas13();

function setVardas14(name) {
    vardas = name + 14;
}

setVardas14('aivaras');

function getVardas14() {
    return vardas + '14';
}

document.querySelector('h2').innerHTML = getVardas14();

function setVardas15(name) {
    vardas = name + 15;
}

setVardas15('algirdas');

function getVardas15() {
    return vardas + '15';
}

document.querySelector('h2').innerHTML = getVardas15();

function setVardas16(name) {
    vardas = name + 16;
}

setVardas16('lukas');

function getVardas16() {
    return vardas + '16';
}

document.querySelector('h2').innerHTML = getVardas16();

function setVardas17(name) {
    vardas = name + 17;
}

setVardas17('marius');

function getVardas17() {
    return vardas + '17';
}

document.querySelector('h2').innerHTML = getVardas17();

function setVardas18(name) {
    vardas = name + 18;
}

setVardas18('andrius');

function getVardas18() {
    return vardas +'18';
}

document.querySelector('h2').innerHTML = getVardas18();

function setVardas19(name) {
    vardas = name + 19;
}

setVardas19('rolandas');

function getVardas19() {
    return vardas + '19'
}

document.querySelector('h2').innerHTML = getVardas19();

function setVardas20(name) {
    vardas = name + 20;
}

setVardas20(' rimvydas');

function getVardas20() {
    return vardas + '20';
}

document.querySelector('h2').innerHTML = getVardas20();

function setVardas21(name) {
    vardas = name + 21;
}

setVardas21('augustas');

function getVardas21() {
    return vardas + '21';
}

document.querySelector('h2').innerHTML = getVardas21();

function setVardas22(name) {
    vardas = name + 22;
}

setVardas22('julius');

function getVardas22() {
    return vardas + '22';
}

document.querySelector('h2').innerHTML = getVardas22();

function setVardas23(name) {
    vardas = name + 23;
}

setVardas23('vitalijus');

function getVardas23() {
    return vardas + '23';
}

document.querySelector('h2').innerHTML = getVardas23();

function setVardas24(name) {
    vardas = name + 24;
}

setVardas24('erikas');

function getVardas24() {
    return vardas + '24';
}

document.querySelector('h2').innerHTML = getVardas24();

function setVardas25(name) {
    vardas = name + 25;
}

setVardas25('vincas');

function getVardas25() {
    return vardas + '25';
}

document.querySelector('h2').innerHTML = getVardas25();