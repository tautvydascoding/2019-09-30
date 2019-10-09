//let arVedes = true;
//let arDuotPaskola = false;

//if(arVedes == true) {
//    arDuotPaskola = true; 
//} else {
//    arDuotPaskola = false;
//}

//if(arDuotPaskola == true) {
//   console.log('jums priklauso paskola');
//} else {
//    console.log('deja, jums paskola nepriklauso');
//}

let vardas1 = 'tomas';
let vardas2 = 'antanas';

if(vardas1 == vardas2) {
    console.log('vardai vienodi');
} else {
    console.log('vardai skirtingi');
}

if(vardas1 == 'tomas') {
    console.log('labas, tomai');
}

if(vardas1 == "tomas" && vardas2 == 'karolis') {
    console.log('tomas ir karolis');
} else {
    console.log('vardai ne tomas ir karolis');
}

if(vardas1 == 'tomas' || vardas2 == 'tomas') {
    console.log('kazkauris is vardu tomas');
}

let age = 24;

if(age < 7) {
    console.log('pliusines varles');
} else if(age >= 7 && age < 14) {
    console.log('mini telefonai');
} else if(age >= 14 && age < 18) {
    console.log('new music app');
} else if(age >= 18 && age < 24) {
    console.log('stok i sauliu sajunga');
} else if(age >= 24 && age < 65) {
    console.log('pensijos kaupimas - uzsiregistruok');
} else {
    console.log('kelione i Bristona');
}

let klienVard = 'jonas';
let vard1 = 'tomas';
let vard2 = 'paulius';
let vard3 = 'airidas';

if(klienVard == vard1) {
    console.log('masinoms 10% nuolaida');
} else if(klienVard == vard2) {
    console.log('buitinei technikai 30% nuolaida');
} else {
    console.log('5% nuolaida kelionems');
}

let klnt1 = 'bronze';
let klnt2 = 'silver';
let klnt3 = 'gold';
let klntTipas = '';

if(klntTipas == klnt1) {
    console.log('15% nuolaida');
} else if(klntTipas == klnt2) {
    console.log('30% nuolaida');
} else {
    console.log('5% nuolaida');
}






















