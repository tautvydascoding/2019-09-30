console.log("labas");

function skaiciuojuPlota(){

  let ivedimoLaukas = document.querySelector('div input').value;
  console.log(ivedimoLaukas);
plotas = Math.PI * ivedimoLaukas * ivedimoLaukas;
console.log(plotas);
}

skaiciuojuPlota();

function skaiciuojuPlota1(){
  let ivedimasPloto=document.querySelector('#aukstis').value;
  let ivedimasAukscio=document.querySelector('input[name="plotis"]').value;
  console.log(ivedimasPloto, ivedimasAukscio);
  plotas1 = ivedimasPloto * ivedimasAukscio;
  console.log(plotas1);
  document.querySelector('body').innerHTML += plotas1;
}
//function isveduVardaPavarde();{
  //let ivedimasvardo=document.querySelector('#vardas').value;
  //let ivedimasvardo=document.querySelector('#vardas').value;
  //ocument.querySelector('body').innerHTML += plotas1;
}

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
//
//
//
//  // UZDUOTIS 2
// sukurti ivedimo 2 laukus, naudojantis pvz 3,
// kur reikes ivesti staciakampio auksti ir ploti.
// Kai paspaudziamas mygtukas - paskaiciuojamas staciakampio plotas:
// Plotas  = x * y;
