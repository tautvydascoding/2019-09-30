console.log("labas");
//==============TEORIJA ++ / -- ==========
    var x = 10;
    x = x + 3;  // x = 13
    x += 3;     // tas pats kad x = x + 3;
    x++;       //  tas pats kas x = x + 1;

//=============FOR   LOOP====================
// teo:  https://www.w3schools.com/js/js_loop_for.asp
//  https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration

// 1 UZDUOTIS
// isvesti 30 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)
// for (var i = 0; i < 30; i++){
//   console.log('Azuolas');
// }

// 1.1 UZDUOTIS
// isvesti i ekrana "<h3> Azuolas </h3>" su document.write arba innerHTML
//}
// 1.2 UZDUOTIS
// (HTML faile susikurti <article> elementa)
// isvesti 40 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba
for (var i = 0; i < 40; i++){
document.querySelector('article').innerHTML += "<h2>Berzas</h2>";
}
// 1.3 UZDUOTIS
// (HTML faile susikurti <ul> elementa)
// isvesti 6 kartu zodi "<li> elementas 1 </li> " i <ul> elementa su  innerHTML pagalba
//for (var i = 0; i<6; i++){
//document.querySelector('ul').innerHTML += "<li>elementas 1</li>";
//}
for (var i = 0; i<6; i++){
  document.querySelector('ul').innerHTML += "<li>elementas 1</li>";
}
// 1.4 UZDUOTIS
// (HTML faile susikurti <header> elementa)
// isvesti 10 kartu zodi "<p> Aprasymas x </p> " i <header> elementa su  innerHTML pagalba (kur x - yra skaicius "i" nuo 0 iki 9 atsisrandantis automatiskai)

//NEVEIKIA TEISINGAI
for (var x = 0; x<10; x++){
document.querySelector('header').innerHTML += "<p>Aprasymas" + x + "</p>";
}

// 1.5 UZDUOTIS
// (HTML faile susikurti <div> elementa)
// isvesti 6 kartu zodi "<li> elementas X </li> " i <div> elementa su  innerHTML pagalba (kur x - yra skaicius "i" nuo 1 iki 6 atsisrandasntis automatiskai)

for (var x = 1; x < 7; x++){
document.querySelector('div').innerHTML += "<li> elementelis " + x + "</li>";
}
// 2.0 UZDUOTIS
// sukurti f-ja "print()", kuri  i browser langa atspausdins  teksta "atspausdintas su f-ja" (panaudojanti document.write arba innerHTML)

function print(){
  document.querySelector('div').innerHTML += "atspausdintas su f-ja";
}
print();

// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)

function printX(xx){
  document.querySelector('div').innerHTML += xx;
}
printX('atspausdinta atspausdinta');

// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu


for (var x = 0; x < 100; x++){
  printX('atspausdinta atspausdinta atspausdinta');

}

// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// PATARIMAS:
// pabandyti  isideti nuotrauka i HTML faila, jie pavyks tada nusikopijuoti ir ideti i js faila

//Nepavyko...

for (var x = 0; x < 12; x++){
  printX('<img class="" src="picture.jpg" height="100" weight="100" alt="">');
  }

// 4 UZDUOTIS
// 4 UZDUOTIS
// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)




// ----------------------------
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |


function piestiEilute(x){
  for (i = 0; i < x; i++){
document.querySelector('body').innerHTML += "-";
console.log(i);
  }
}
piestiEilute(30);

function spausdintiStulpeli(x){
   for (i = 0; i<x; i++){
 document.querySelector('body').innerHTML += "<br>" + "|" + "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp" + "|" + "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp" + "|" + "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp" + "|" + "<br> ";
 console.log(i);
   }
 }
 document.querySelector('body').innerHTML += "<br>" + "vardas |  pavarde | amzius" + "<br>";
 piestiEilute(30);
 spausdintiStulpeli(20);

//  piestiEilute(20);
//  document.querySelector('body').innerHTML = "vardas |  pavarde | amzius";


// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur)
// var kiekMenesiu = 10 * 12;
// var menAtlyginimas = 680;
// var algosPokytis = 1;  // 1%

var metai = 10;
var kiekMenesiu = 12;
var menAtlyginimas = 680;
var algosPokytis = 1;

function kiekuzdirbsim (metai, kiekMenesiu, menAtlyginimas, algosPokytis){
  for (i=0; i<metai; i++){
  menAtlyginimas = menAtlyginimas + (menAtlyginimas * algosPokytis / 100 - menAtlyginimas);
}
}
kiekuzdirbsim (metai, kiekMenesiu, menAtlyginimas, algosPokytis);





// ==============SCSS============================

//========= local/global or Frog/Garden =======
