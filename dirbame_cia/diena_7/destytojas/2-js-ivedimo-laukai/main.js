console.log("labas");




//  // UZDUOTIS 2
// sukurti ivedimo 2 laukus, naudojantis pvz 3,
// kur reikes ivesti staciakampio auksti ir ploti.
// Kai paspaudziamas mygtukas - paskaiciuojamas staciakampio plotas:
// Plotas  = x * y;

function skiciuotiPlota() {
    // console.log("veikius");  // test

    // 1. surasti ivedimo lauka  (HTML elmenta)
    let ivedimoLaukas = document.querySelector('#plotis');
    let ivedimoLaukas2 = document.querySelector('#aukstis');
    // console.log( ivedimoLaukas  ); // test
    // console.log( ivedimoLaukas2  ); // test

    // 2. paimti is ivedimo lauko ivesta reiksme
    let plotis = document.querySelector('#plotis').value;
    let aukstis = document.querySelector('#aukstis').value;

    let visasPlotas = plotis * aukstis;
    // 3. isvesti reiksme
    console.log( "visasPlotas: " + visasPlotas  ); // test
    let tekstas = "visasPlotas" + visasPlotas + " <br>";
    document.querySelector('body').innerHTML += tekstas;
}
