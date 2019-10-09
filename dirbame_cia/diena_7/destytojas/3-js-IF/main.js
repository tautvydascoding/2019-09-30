console.log("labas");
// =================if  teorija====================
// if ( true ) {
//     console.log("labas");
// }
// if(true){
// 	console.log("viso")
// }
// let x = 10;
// if (x > 20) {
//     // jei true
//     //
//     //
// } else {
//     // jei false
// }


// if ( salyga ) {
//     // jei salyga tenkinama
// }
//
// if ( salyga ) {
//     // jei salyga tenkinama
// } else {
//     // jei salyga netenkinama  / priesingu atveju
// }
//
// if (salyga) {
//
// } else if (salyga) {
//
// } else {
//     // ?
// }

//=============IF====================
// UZDUOTIS
// sukurti kintamuosius: arVedes ir arDuotiPaskola = false
// patikrinti ar zmogus vedes. Jeigu "vedes" - duoti paskola, jeigu "nevedes" - neduoti paskolos
// su console.log pranesti ar paskola zmogui bus duodama
let arVedes = false; // arba false arba true
let arDuotiPaskola = false;

if ( arVedes  == true) {
    arDuotiPaskola = true;
} else {
    arDuotiPaskola = false;
}
if ( arDuotiPaskola  == true) {
    console.log("Jums prisklauso paskola :)");
} else {
    console.log("Deja, jums neprisklauso paskola. ");
}


// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai vienodi, i konsole pranesti "vardai yra VIENODI"
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"
let  vardas1 =  "Tomas";
let  vardas2 =  "Tomas";
if (vardas1 == vardas2) {
    document.querySelector('h1').innerHTML  = "vardai vienodi <br>";
}

if (vardas1 == vardas2) {
    let textas = "vardai: " + vardas1 + " ir " + vardas2 + " sutampa! <br>";
    document.querySelector('h1').innerHTML  += textas;
}


// B)
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo
vardas1 = "Karolis";
vardas1 = "Tomas";

if (vardas1 == "Tomas") {
    document.querySelector('h1').innerHTML  += "vardas1 yra Tomas <br>";
}
// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"
// pranesti kad vardai: "Tomas ir Karolis"
// arba pranesti, kad : "vardai NE Tomas ir Karolis"
// pakeitineti vardus ir paziureti ar veikia
vardas1 = "Tomas";
vardas2 = "Karolis";

if (vardas1 == "Tomas" && vardas2 == "Karolis" ) {
    document.querySelector('h1').innerHTML  += "  Tomas ir Karolis <br>";
} else {
    document.querySelector('h1').innerHTML  += " vardai ne Tomas ir ne Karolis <br>";
}
// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba
// pranesti: "kazkuris is vardu yra Tomas"
// pakeitineti vardus ir paziureti ar veikia
vardas1 = "Tomas";

if (vardas1 == "Tomas" || vardas1 == "Karolis" ) {
    document.querySelector('h1').innerHTML  += "  vardas1 yra Tomas ARBA Karolis <br>";
} else {
    document.querySelector('h1').innerHTML  += "  vardas1 ne Tomas ir ne Karolis <br>";
}
// 1 UZDUOTIS
// turesime vartotojo amziu
// let age = 24;
// gapal ji, turesiem isvesti tam tikra reklamos teksta


// Salygos:

let age = 24;

if (age < 7) {
    console.log("Pliusines varles");
} else if (age < 14) {
    console.log( "Mini telefonai");
} else if (age < 18) {
    console.log( "new Music App");
} else {
    console.log("kelione aplink pasauli");
}

if (age < 7 || age > 65) {
    console.log("Sokoladiniai zuikuciai 20% nuolaida");
    if (age < 7) {
        console.log("Pliusines varles");
    } else {
        console.log("kelione aplink pasauli");
    }
} else if (age < 14) {
    console.log( "Mini telefonai");
} else if (age < 18) {
    console.log( "new Music App");
}  
// iki 7 metu
//      "Pliusines varles"
// nuo 7 iki 14
//      "Mini telefonai"
// nuo 14 iki 18
//      "new Music App"
// nuo 18 iki 24
//      "Stok i sauliu sajunga"
// nuo 24 iki 65
//      "Pensijos kaupimas - zusiregistruok"
// nuo 65
//      "kelione i Bristona"
// sunkesne:
//      (i 'if' vidu ideti papildoma 'if')
//      iki 7 metu ir nuo 65 metu papildomai isvesti "Sokoladiniai zuikuciai 20% nuolaida"


// 2 UZDUOTIS
// susikurti kintamaji:  klietoVardas = "Jonas"     kurio reiksme lyginsime
// sukurti 3  vardas1= "Tomas", vardas2 ="Paulius", vardas3 ="Airidas" (gimianiciu vardai , jie tures akcijas))

// kai "if"-ui   klietoVardas yra lygus vardas1 - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui   klietoVardas yra lygus vardas2 - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui   visiems kitiems - isvesti: "5% nuolaida kelionems"

// 3 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime

// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
//
