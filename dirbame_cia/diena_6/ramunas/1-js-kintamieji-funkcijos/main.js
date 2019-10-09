// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================

//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:

document.write(" <b class='bg-info'> Mano tekstas </b> ");
// window.alert("labas");
// alert("Viso");
// var ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);
document.querySelector('h1').innerHTML = " <b>Antraste</b> ";
document.querySelector('h1').innerHTML += "kazkas prideta";
document.querySelector('h1').style.color = "green";

//----Elemento duomenys--------
// auksto paemimas:
var aukstis = document.querySelector('h1').clientHeight;   // clientHeight includes the height and vertical padding.
console.log('aukstis:', aukstis);
var aukstis = document.querySelector('h1').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
console.log('aukstis:', aukstis);
// aukscio nustatymas:
document.querySelector("h1").style.height = "300px"; 		// change the height of a <div> element:

//=====================PASIKARTOJIMAS==================

//  1.1 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja print(15.99);

function printKaina(x) {
  console.log(x);
}
printKaina("15.99");

//  1.2 UZDUOTIS
// iskviesti f-ja print 3 kartus, kad atspausdintu 3 skirtingas kainas:  999 , 13.49, 100.05
//    vietoj x irasant, koki nors teksta pvz: printKaina( 999);

printKaina("999");
printKaina("13.49");
printKaina("100.05");

// 2.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis() {
let  x=(5+10+8+6+8)/5;
console.log(x)
}
pazymiuVidurkis();

// 2.2 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis1(x1,x2,x3,x4,x5) {
  let vidurkis=(x1+x2+x3+x4+x5)/5;
  console.log('vidurkis:',vidurkis);
}
pazymiuVidurkis1(5,6,6,6,6);
pazymiuVidurkis1(7,6,9,6,4);
pazymiuVidurkis1(10,9,9,6,4);

//=====================RETURN==================

// 1 UZDUOTIS
// A) parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// B)   f-joje  sukurti kintamaji "vardas" Tomas
// C) patikrinti ar veikia f-ja

function getVardas() {
  let vardas="Tomas";
  return vardas;
}
console.log( getVardas() );

//arba

let vardas2 = getVardas();
console.log(vardas2);

// 2 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
//  f-joje sukurti kintamaji   "pavarde" Tomauskas, "vardas" - Antanas
// patikrinti ar veikia f-ja

function getVardasPavarde() {
  let vardas="Tomas";
  let pavarde="Tomausaks";
  return vardas+pavarde;
  // arba let fullname= vardas + " " + pavarde;
  // or return fullname
}
console.log( getVardasPavarde() );

//arba

let vardasPavarde = getVardasPavarde();
console.log(vardasPavarde);

// 3 UZDUOTIS
// A) parasyti f-ja "getPelnas()", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje sukurti kintamaji "pajamos" 12500
// B) f-joje sukurti kintamaji "islaidos" 7500
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - islaidos)
// C) patikrinti ar veikia f-ja

function getPelnas() {
  let pajamos=12500;
  let islaidos=7500;
  let pelnas= pajamos - islaidos;

  return pelnas;
}

console.log( "Pelnas:" + getPelnas() )

//arba

let turtai = getPelnas();
console.log("turtai:" + turtai);

// 3.2 UZDUOTIS
// A) parasyti f-ja "getPelnas(pajamos, nuostoliai)", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - nuostoliai)
// C) patikrinti ar veikia f-ja

function getPelnas2(pajamos, nuostoliai) {
  let pelnas=pajamos-nuostoliai;
  return pelnas;
}

console.log(getPelnas2(12500, 7500));

// 4.1 UZDUOTIS
// parasyti f-ja, kuri skaiciuoja vieno mokinio pazymiu vidurki
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
//  turi "return" zodeli.

function getPazymiuVidurkis2(x1,x2,x3,x4,x5) {
  let vidurkis=(x1+x2+x3+x4+x5)/5;
  return vidurkis
}
console.log("Pazymiu vidurkis:" + getPazymiuVidurkis2(10,5,4,10,5));

// 4.2 UZDUOTIS
// parasyti f-ja, kuri skaiciuoja 6-kiu mokiniu pazymiu vidurki
// "getKlasesPazymiuVidurkis(y1, y2, y3, y4, y5, y6)"
// f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
// turi "return" zodeli.


function getKlasesPazymiuVidurkis() {
  let y1=getPazymiuVidurkis2(10,5,4,10,5);
  let y2=getPazymiuVidurkis2(10,5,4,10,5);
  let y3=getPazymiuVidurkis2(10,5,4,10,5);
  let y4=getPazymiuVidurkis2(10,5,4,10,5);
  let y5=getPazymiuVidurkis2(10,5,4,10,5);
  let sumasuma=(y1+y2+y3+y4+y5)/5;

return sumasuma
}

console.log("Klases pazymiu vidurkis:" + getKlasesPazymiuVidurkis());

// 5 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

function getH1ElementoAukstis() {
  let h1Aukstis = document.querySelector('h1').clientHeight;
  return h1Aukstis
}
console.log('aukstis:', getH1ElementoAukstis());


///////////

let valandinisIkainis = 10;
let valandosPovilas=160;
let valandosAntanas=80;
let valandosTomas=100;
let imonesPajamos=20000;
let imonesIslaidos=3400;

//////1 uzduotis

function poviloAtlyginimas() {
  let atlyginimas=valandosPovilas*valandinisIkainis
  return atlyginimas
}

console.log("Povilo atlyginimas:" + poviloAtlyginimas());

function antanoAtlyginimas() {
  let atlyginimas=valandosAntanas*valandinisIkainis
  return atlyginimas
}

console.log("Antano atlyginimas:" + antanoAtlyginimas());

function tomoAtlyginimas() {
  let atlyginimas=valandosTomas*valandinisIkainis
  return atlyginimas
}

console.log("Tomo atlyginimas:" + tomoAtlyginimas());

//// Kitaip pagal destytoja SVARBUUUUUU!!!!!!!!!!!!!
function getDarbutojoAtlyginimas(valandos) {
  let ats= valandinisIkainis * valandos;
  return ats;
}

let tomoAtlyginimas1 = getDarbutojoAtlyginimas( valandosTomas );
let poviloAtlyginimas1 = getDarbutojoAtlyginimas( valandosPovilas );
let antanoAtlyginimas1 = getDarbutojoAtlyginimas( valandosAntanas );
//console.log( "Tomo atlyginimas1:" + tomoAtlyginimas1 );


//2 UZDUOTIS
function  imonesPelnas() {
  let pelnas=imonesPajamos - imonesIslaidos - tomoAtlyginimas() - antanoAtlyginimas() - poviloAtlyginimas()
  return pelnas
}
console.log("Imones pelnas:"+ imonesPelnas());


///kitas destytojo budas

function  getImonesPelnas () {
  let ats = imonesPajamos - imonesIslaidos - tomoAtlyginimas -antanoAtlyginimas - poviloAtlyginimas;
  return ats;
}


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
