//==============TEORIJA ++ / -- ==========
    // var x = 10;
    // x = x + 3;  // x = 13
    // x += 3;     // tas pats kad x = x + 3;
    // x++;       //  tas pats kas x = x + 1;

//=============FOR   LOOP====================
// teo:  https://www.w3schools.com/js/js_loop_for.asp
//  https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration

// 1 UZDUOTIS
// isvesti 30 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)


// for (var i = 0; i < 30; i++) {
//   console.log("Azuolas" + i);
// }

// 1.1 UZDUOTIS
// isvesti i ekrana "<h3> Azuolas </h3>" su document.write arba innerHTML
// for (var i = 0; i < 30; i++) {
//   document.querySelector("h3").innerHTML += "azuolas";
// }

// 1.2 UZDUOTIS
// (HTML faile susikurti <article> elementa)
// isvesti 40 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba

// for (var i = 0; i < 30; i++) {
//   document.querySelector("article").innerHTML += "<h2>azuolas</h2>";
// }
// 1.3 UZDUOTIS
// (HTML faile susikurti <ul> elementa)
// isvesti 6 kartu zodi "<li> elementas 1 </li> " i <ul> elementa su  innerHTML pagalba

// for (var i = 0; i < 6; i++) {
// //  console.log( document.querySelector('ul')); - pasitirkinti ar turi duoenis ul siuo atveju
//   document.querySelector("ul").innerHTML += "<li> elementas 1 </li> ";
// }

// 1.4 UZDUOTIS
// (HTML faile susikurti <header> elementa)
// isvesti 10 kartu zodi "<p> Aprasymas x </p> " i <header> elementa su  innerHTML pagalba (kur x - yra skaicius "i" nuo 0 iki 9 atsisrandantis automatiskai)

// for (var i = 0; i < 10; i++) {
//   document.querySelector("header").innerHTML += "<p> Aprasymas" + i + "</p>";
// }
// 1.5 UZDUOTIS
// (HTML faile susikurti <div> elementa)
// isvesti 6 kartu zodi "<li> elementas X </li> " i <div> elementa su  innerHTML pagalba (kur x - yra skaicius "i" nuo 1 iki 6 atsisrandasntis automatiskai)
// for (var i = 1; i < 6; i++) {
//   document.querySelector("div").innerHTML += "<li> elementas " + i + "</li>";
// }

// 2.0 UZDUOTIS
// sukurti f-ja "print()", kuri  i browser langa atspausdins  teksta "atspausdintas su f-ja" (panaudojanti document.write arba innerHTML)
// function print() {
//   document.querySelector("div.vid").innerHTML = "atspausdintas su f-ja";
// }
//   print();


// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)

// function printX(x) {
//   var tekstas=x;
//   document.querySelector("p").innerHTML += tekstas;
// }
// printX("paduodu xx teksta");

// let xa="paduodu xx teksta";
// function printX() {
// document.querySelector("p").innerHTML = xa;
// }
// printX()
// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu

// for (var i = 0; i < 20; i++) {
//   printX("labas");
// };

// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// PATARIMAS:
// pabandyti  isideti nuotrauka i HTML faila, jie pavyks tada nusikopijuoti ir ideti i js faila

// for (var i = 0; i < 12; i++) {
//   printX('<img src="rose.jpg" alt="">');
// };

// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)

// function piestiEilute(x) {
//   var  bruksnys=x;
//   for (var i = 0; i < 16; i++) {
//     document.querySelector("div.eilute").innerHTML += bruksnys;
//   }
// }
// piestiEilute('--');
//
// piestiEilute('--');

function piestiEilute(eilutesIlgis) {
  let eil = "";
  for (var i = 0; i < eilutesIlgis; i++) {
    eil += "-"; //eil = eil + "-";
  }
  console.log( eil );
}

function spausdintiStulpeli(eilutesIlgis) {
  for (var i = 0; i < eilutesIlgis; i++) {
    console.log("|");
  }
}

piestiEilute(30);
console.log( "vardas| pavarde | amzius");
piestiEilute(30);
spausdintiStulpeli(10);

// ----------------------------
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |


// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur)
// var kiekMenesiu = 10 * 12;
// var menAtlyginimas = 680;
// var algosPokytis = 1;  // 1%

// ==============SCSS============================

//========= local/global or Frog/Garden =======
