console.log("Labas rytas");

// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================


//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:

document.write("<b class='bg-info'> Mano tekstas mmm</b>"); // rasomas dokumento apacioje, narsykleje randa
document.write("Viso"); 

//window.alert("labas");  //geriau nenaudot, nebent sau pasitikrinimui.
//alert("Viso"); //geriau nenaudot, nebent sau pasitikrinimui.
//var ivestasTekstas = prompt("Ivestkite savo varda");
//console.log(ivestasTekstas);
document.querySelector('h1').innerHTML += " <b>Cats Cats Cats</b>"; // Patariama naudoti
document.querySelector('h1').style.color="green";

//----Elemento duomenys--------
// auksto paemimas:
var aukstis = document.querySelector('h1').clientHeight;   // clientHeight includes the height and vertical padding.
var aukstis = document.querySelector('h1').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
console.log('aukstis',aukstis);

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
printKaina(15.99);

//  1.2 UZDUOTIS
// iskviesti f-ja print 3 kartus, kad atspausdintu 3 skirtingas kainas:  999 , 13.49, 100.05
//    vietoj x irasant, koki nors teksta pvz: printKaina( 999);

printKaina(999);
printKaina(13.49);
printKaina(100.05);

// 2.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

 function pazymiuSuma1() {
     let vidurkis= (5+10+8+6+8)/5;
     console.log('vidurkis',vidurkis);
 }
pazymiuSuma1();

// 2.2 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis(x1,x2,x3,x4,x5) {
    let vidurkis=(x1+x2+x3+x4+x5)/5;
        console.log('cia vidurkis',vidurkis);
    }
pazymiuVidurkis(5, 10, 8, 6, 8);


//=====================RETURN==================

// 1 UZDUOTIS
// A) parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// B)   f-joje  sukurti kintamaji "vardas" Tomas
// C) patikrinti ar veikia f-ja

let vardas = 'Ieva';

function getVardas () {
    let vardas = 'Kara';
    return vardas;
}

let ats=getVardas();
console.log(ats);

//arba tiesiog console.log( getVardas());

// 2 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
//  f-joje sukurti kintamaji   "pavarde" Tomauskas, "vardas" - Antanas
// patikrinti ar veikia f-ja

function getVardasPavarde() {
    let vardas = 'Antanas';
    let pavarde = 'Tomauskas';
    return vardas + ' ' + pavarde;
}

console.log(getVardasPavarde());

// 3 UZDUOTIS
// A) parasyti f-ja "getPelnas()", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje sukurti kintamaji "pajamos" 12500
// B) f-joje sukurti kintamaji "islaidos" 7500
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - islaidos)
// C) patikrinti ar veikia f-ja

function getPelnas() {
    let pajamos = 12500;
    let islaidos = 7500;
    let pelnas = pajamos-islaidos;
    return pelnas;
}

console.log("pelnas:" + getPelnas());

// 3.2 UZDUOTIS
// A) parasyti f-ja "getPelnas(pajamos, nuostoliai)", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - nuostoliai)
// C) patikrinti ar veikia f-ja


function getPelnas1(pajamos, nuostoliai) {
    return pajamos-nuostoliai;
}

console.log('pelnas2: '+ getPelnas1(5000, 2500));

// 4.1 UZDUOTIS
// parasyti f-ja, kuri skaiciuoja vieno mokinio pazymiu vidurki
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
//  turi "return" zodeli.

function getPazymiuVidurkis2(x1, x2, x3, x4, x5) {
    let vidurkis = (x1 + x2 + x3 + x4 + x5)/5;
    return vidurkis;
}

console.log('Pazymiu vidurkis: ' + getPazymiuVidurkis2(9,8,9,6,10));

// 4.2 UZDUOTIS
// parasyti f-ja, kuri skaiciuoja 6-kiu mokiniu pazymiu vidurki
// "getKlasesPazymiuVidurkis(y1, y2, y3, y4, y5, y6)"
// f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
// turi "return" zodeli.

function getKlasesPazymiuVidurkis() {
    let y1 = getPazymiuVidurkis2(8,8,8,8,8);
    let y2 = getPazymiuVidurkis2(10,10,10,10,10);
    let y3 = getPazymiuVidurkis2(9,9,9,9,9);
    let vidurkis = (y1 + y2 + y3)/3;
    return vidurkis;
    
}

console.log('return atsakymas: ' + getKlasesPazymiuVidurkis());

// 5 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

function getH1ElementoAukstis() {
    let aukstis = document.querySelector('h1').clientHeight;
    return aukstis;
}

console.log('H1 aukstis ' + getH1ElementoAukstis());

// =================FOR intro  ======================

// 1 UZDUOTIS
// naudojant FOR cikla, atspausdinti  "#" tiek, kad gautusi trikampio vaizdas
// #
// ##
// ###
// ####
// #####
// ######

//=========== =KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos

//======= local/global or SCSS or IF or Bootstrap Layout or Frog/Garden ====

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

//  1.2 UZDUOTIS
// iskviesti f-ja print 3 kartus, kad atspausdintu 3 skirtingas kainas:  999 , 13.49, 100.05
//    vietoj x irasant, koki nors teksta pvz: printKaina( 999);

// 2.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

// 2.2 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)


//=====================RETURN==================

// 1 UZDUOTIS
// A) sukurti kintamaji "vardas" Tomas
// B) parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// C) patikrinti ar veikia f-ja

// 2 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
//  f-joje sukurti kintamaji   "pavarde" Tomauskas, "vardas" - Antanas
// patikrinti ar veikia f-ja

// 3 UZDUOTIS
// A) parasyti f-ja "getPelnas()", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje sukurti kintamaji "pajamos" 12500
// B) f-joje sukurti kintamaji "islaidos" 7500
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - islaidos)
// C) patikrinti ar veikia f-ja

// 3.2 UZDUOTIS
// A) parasyti f-ja "getPelnas(pajamos, nuostoliai)", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - nuostoliai)
// C) patikrinti ar veikia f-ja


// 4 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")



// 5 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

// =================FOR intro  ======================

// 1 UZDUOTIS
// naudojant FOR cikla, atspausdinti  "#" tiek, kad gautusi trikampio vaizdas
// #
// ##
// ###
// ####
// #####
// ######

//=========== =KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos

//======= local/global or SCSS or IF or Bootstrap Layout or Frog/Garden ====


// UZDUOTIS - f-jos return
// failo virusje sukurti kintamuosius:
// valandinisIkainis = 10
// valandos Povilas = 160
// valandos Antanas = 80
// valandos Tomas   = 100
// imones pajamos = 20000
// kitos imones islaidos = 3400
//  UZDUOTIS: sukurti  f-jas:
//  darbuotojoAtlyginimas
//  visuDarbuotojuAtlyginimai (neprivaloma f-ja)
//  imonesPelnas
//  isvesti pelna i console ar ekrana

let valandinisIkainis = 10;
let valandosPovilas = 160;
let valandosAntanas = 80;
let valandosTomas   = 100;
let imonesPajamos = 20000;
let kitosImonesIslaidos = 3400;

//Uzduotis 1 sukurti f-ja darbuotojoAtlyginimas:

function getDarbuotojoAtlyginimas(darbuotojoValandos) {
    let atlyginimas = darbuotojoValandos * valandinisIkainis;
    return atlyginimas;
}

let atlyginimasPovilas = getDarbuotojoAtlyginimas (valandosPovilas);
let atlyginimasAntanas = getDarbuotojoAtlyginimas(valandosAntanas);
let atlyginimasTomas = getDarbuotojoAtlyginimas (valandosTomas);

console.log('Povilas: ' + atlyginimasPovilas + ' Antanas: ' + atlyginimasAntanas + ' Tomas: ' + atlyginimasTomas);  

function getVisuDarbuotojuAtlyginimai() {
    let visuAtlyginimai = atlyginimasPovilas + atlyginimasAntanas + atlyginimasTomas;
    return visuAtlyginimai;
}

let visuDarbuotojuAtlyginimas = getVisuDarbuotojuAtlyginimai();

console.log('Visu darbuotoju atlyginimai: ' + visuDarbuotojuAtlyginimas);

function getImonesPelnas() {
    let pelnas = imonesPajamos - kitosImonesIslaidos - visuDarbuotojuAtlyginimas;
    return pelnas
}

console.log('Imones pelnas: ' + getImonesPelnas());