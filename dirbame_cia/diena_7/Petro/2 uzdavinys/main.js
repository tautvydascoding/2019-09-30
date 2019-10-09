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
//console.log(document.querySelector('div input').value);
    let pi = Math.PI;

    function apskritimoPlotas(){
        let r = document.querySelector('div input').value;
        let ats = pi*r*r;
        console.log(ats);
        document.querySelector('.apskr').innerHTML = ats;
    }


    function staciakampioPlotas(){
        let a = document.querySelector('#x').value;
        let b = document.querySelector('#y').value;
        let ats1 = a*b;
        console.log(ats1);
        document.querySelector('.staciak').innerHTML = ats1;
    }







//console.log('veikiu')   ;

 //   function IsveduIconsole(){
  //  console.log('veikiu')   ; //
  //      let ivedimoLaukas = document.querySelector('div input').value;
//        console.log(ivedimoLaukas);
//}
