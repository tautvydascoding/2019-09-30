console.log("labutuka, gal butuka");

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

for (var i=0; i<30; i++) {
    console.log("Azuolas");
}
// 1.1 UZDUOTIS
// isvesti i ekrana "<h3> Azuolas </h3>" su document.write arba innerHTML

//for (var i=0;i<30;i++) {document.querySelector('body').innerHTML += "<h3> Azuolas </h3>";
//}


// 1.2 UZDUOTIS
// (HTML faile susikurti <article> elementa)
// isvesti 40 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba

// for (var i=0; i<40; i++) {
//     document.querySelector('article').innerHTML += "<h2> Na tai?</h2> ";
// }

// 1.3 UZDUOTIS
// (HTML faile susikurti <ul> elementa)
// isvesti 6 kartu zodi "<li> elementas 1 </li> " i <ul> elementa su  innerHTML pagalba

for (var i = 1; i < 7; i++) {
    document.querySelector('ul').innerHTML += "<li> elementas " + i + "</li> ";
}
// 1.4 UZDUOTIS
// (HTML faile susikurti <header> elementa)
// isvesti 10 kartu zodi "<p> Aprasymas x </p> " i <header> elementa su  innerHTML pagalba (kur x - yra skaicius "i" nuo 0 iki 9 atsisrandantis automatiskai)

for (var x = 0; x <= 6 ; x++) {
    document.querySelector('header').innerHTML += "<p> Aprasymas " + x + "</p>";
}

// 1.5 UZDUOTIS
// (HTML faile susikurti <div> elementa)
// isvesti 6 kartu zodi "<li> elementas X </li> " i <div> elementa su  innerHTML pagalba (kur x - yra skaicius "i" nuo 1 iki 6 atsisrandasntis automatiskai)

for (var i = 1; i <= 6; i++) {
    document.querySelector('div').innerHTML += `<li> elementas ${i} </li> `;
    
}

// 2.0 UZDUOTIS
// sukurti f-ja "print()", kuri  i browser langa atspausdins  teksta "atspausdintas su f-ja" (panaudojanti document.write arba innerHTML)

function print() {
    document.querySelector('div.uzd2').innerHTML = "atspausdintas su f-ja";
}

print()

// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)


function printX(tekstas) {
    document.querySelector('div.uzd3').innerHTML += tekstas + '<br>';
}

printX("Zuikiai");

// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu

for (var i = 0; i < 15; i++) {
    printX(" Taip, tai as, tavo tekstas");
}


// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// PATARIMAS:
// pabandyti  isideti nuotrauka i HTML faila, jie pavyks tada nusikopijuoti ir ideti i js faila

for (var i = 0; i < 12; i++) {
    printX(" <img src = 'IMG/potato.jpg'/ alt = 'potato'> ");
}

// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)


function spausdintiStulpeli(stulpelis) {
    for (var i = 0; i < stulpelis ; i++) {
    document.querySelector('div.uzd4').innerHTML += "|";
    }
}

 function piestiEilute(eilutesIlgis) {
    for (var i = 1; i < eilutesIlgis ; i++) {
        document.querySelector('div.uzd4').innerHTML += "<br>" + i + "-";     
    }
 }

    spausdintiStulpeli(4);
    piestiEilute(10);


        // console.log("-");  


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


var kiekMenesiu = 10 * 12; //120
var menAtlyginimas = 680;
var algosPokytis = 1.01;  // 1%


for (i = 0; i<=kiekMenesiu; i++) {
    function algaPo10Metu() {
       var algosPokytis1 = algosPokytis**i; 
       var naujasAtlyginimas = menAtlyginimas*algosPokytis1;
       return naujasAtlyginimas;
    }
console.log(algaPo10Metu());  
}


// return Math.round(naujasAtlyginimas);

// ==============SCSS============================

//========= local/global or Frog/Garden ======/
