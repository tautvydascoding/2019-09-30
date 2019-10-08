console.log("labas");

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

function spindulioReiksme () {
//  let ivedimoLaukas = document.querySelector('div input');
  let r = document.querySelector('div input').value;
  let plotas= Math.PI*r*r

//  console.log(plotas);
document.querySelector(".apskritimo-plotas").innerHTML = plotas;
}


//  // UZDUOTIS 2
// sukurti ivedimo 2 laukus, naudojantis pvz 3,
// kur reikes ivesti staciakampio auksti ir ploti.
// Kai paspaudziamas mygtukas - paskaiciuojamas staciakampio plotas:
// Plotas  = x * y;

function staciakampioReiksme () {
//  let ivedimoLaukas = document.querySelector('div input');
  let x = document.querySelector('#iksas').value;
  let y = document.querySelector('#ygrikas').value;
  let plotas= x*y;
  //console.log(plotas);
  document.querySelector(".staciakampio-plotas").innerHTML = plotas;
}

//// 1. zmogus iveda savo dirbta valandu skaiciu ir iveda valandini ikaini
