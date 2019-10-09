console.log("labas");

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
for (var i = 0; i < 30; i++) {
    console.log("Azuolas" + i);
}


// 1.1 UZDUOTIS
// isvesti i ekrana "<h3> Azuolas </h3>" su document.write arba innerHTML
// for (var i = 0; i < 30; i++) {
//     document.querySelector('body').innerHTML += "<h3>Azuolaas</h3>";
// }

// 1.2 UZDUOTIS
// (HTML faile susikurti <article> elementa)
// isvesti 40 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba
// for (var i = 0; i < 40; i++) {
//     document.querySelector('article').innerHTML += "<h2>Aaaaaa</h2>";
// }
// 1.3 UZDUOTIS
// (HTML faile susikurti <ul> elementa)
// isvesti 6 kartu zodi "<li> elementas 1 </li> " i <ul> elementa su  innerHTML pagalba
for (var i = 0; i < 6; i++) {
    // console.log( document.querySelector('ul') );
    document.querySelector('ul').innerHTML += "<li>elementas 1</li>";
}
// 1.4 UZDUOTIS
// (HTML faile susikurti <header> elementa)
// isvesti 10 kartu zodi "<p> Aprasymas x </p> " i <header> elementa su  innerHTML pagalba (kur x - yra skaicius "i" nuo 0 iki 9 atsisrandantis automatiskai)
for (var i = 0; i < 10; i++) {
    let tekstas = "<p> Aprasymas" + i + " </p> ";
    document.querySelector('header').innerHTML  +=  tekstas;
}
// 1.5 UZDUOTIS
// (HTML faile susikurti <div> elementa)
// isvesti 6 kartu zodi "<li> elementas X </li> " i <div> elementa su  innerHTML pagalba (kur x - yra skaicius "i" nuo 1 iki 6 atsisrandasntis automatiskai)
for (var i = 1; i < 7; i++) {
    let tekstas = "<li> elementas" + i + " </li> ";
    document.querySelector('div').innerHTML  +=  tekstas;
}
// 2.0 UZDUOTIS
// sukurti f-ja "print()", kuri  i browser langa atspausdins  teksta "atspausdintas su f-ja" (panaudojanti document.write arba innerHTML)
function print() {
    console.log("sveikuciai");
}
print();
print();
print();
// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)
function printX(xx) {
    document.querySelector('body').innerHTML += xx + "<br>";
}
printX("MIltai");
printX("Pelesinis suris");
// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu
for (var i = 0; i < 20; i++) {
    printX("vynuoges");
}
// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// PATARIMAS:
// pabandyti  isideti nuotrauka i HTML faila, jie pavyks tada nusikopijuoti ir ideti i js faila
for (var i = 0; i < 12; i++) {
    printX( '<img src="5.jpg"   width="200px" height="200px" >');

}
// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
function  piestiEilute(eilutesIlgis) {
    let eil = "";
    for (var i = 0; i < eilutesIlgis; i++) {
        eil += "-";   // eil = eil + "-";
    }
    console.log( eil );
}
function  spausdintiStulpeli(eilutesIlgis) {
    for (var i = 0; i < eilutesIlgis; i++) {
        console.log( i + "|" );
    }
}
piestiEilute(30);
console.log("vardas |  pavarde | amzius");
piestiEilute(20);
spausdintiStulpeli(10);
piestiEilute(10);

// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)




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
