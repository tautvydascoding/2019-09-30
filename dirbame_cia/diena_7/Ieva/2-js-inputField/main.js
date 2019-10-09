console.log("labas, as ryklys");

// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================

//============== =========
// UZDUOTIS 1
// sukurti ivedimo lauka, naudojantis pvz 3,
// kur reikes ivesti apskritimo spinduli ,,R".
// Kai paspaudziamas mygtukas - paskaiciuojamas apskritimo plotas: Plotas = pi * R*R
// pi = Math.PI;

function printApskritimoPlotas() {
    let R = document.querySelector('div input').value;
    let plotas = Math.PI * R * R;
    console.log (plotas);
}


//  // UZDUOTIS 2
// sukurti ivedimo 2 laukus, naudojantis pvz 3,
// kur reikes ivesti staciakampio auksti ir ploti.
// Kai paspaudziamas mygtukas - paskaiciuojamas staciakampio plotas:
// Plotas  = x * y;

function printStaciakamioPlotas() {
    let plotis = document.querySelector('input[name = "plotis1"]').value;
    // //console.log(plotis); 
    let aukstis = document.querySelector('input[name = "aukstis"]').value;
    // console.log(aukstis); 
    let plotas = plotis * aukstis;
    document.querySelector('p.ATS').innerHTML += "musu plotas: " + plotas + '<br>';
}

