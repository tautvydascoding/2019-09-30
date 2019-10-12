// let theMatrix = [];
// let preke1 = ['pele', 10, 'labai gera'];
// let preke2 = ['kate', 11, 'labai negera'];
// let preke3 = ['pelekate', 21, 'nelabai gera'];

// theMatrix[0] = preke1;
// theMatrix[1] = preke2;
// theMatrix[2] = preke3;

// console.log(theMatrix);



// =================svarbus patarimai===================:
// ARRAY: jeigu naudoji FOR || while cikla, tai negalvojant masyve naudoti "i" (pvz.: myArray[i])
// FOR:   "for (i = 0; i < x; i++) {"  - nesusijusi su uzdaviniu (skirtas apeit masyva/ ivykdyti daug kartu kazka)
// matricas  - visada nusipiesti ant popieriaus eskiza su testiniais duomenimis
// matrica narys paimamas: myMatrica[x][y]   x- stulpelis; y - eilute
// matrica - pasitikritni ar nereik x ir y sukeisti vietomis (ar nesuklydai kuris stulpelis ir kuris eilute )
// matricos ilgis daznai skiriasi nuo plocio.
//  pvz.:
 // for ( i < eiluciuSkaicius)
 //    for ( k < stulpeliuSkaicius)
 // =================// =================// ========



// UZDUOTIS 1.0
// A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
// B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
// C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas
// D. sukurti masyva 'visiDarbuotojai'
// E.   i masyva 'visiDarbuotojai'  ideti visus dartuotoju masyvus
// UZDUOTIS 1.0
// isvesti visa informacija apie pirma darbuotoja (NEnaudojant FOR cikla)
// UZDUOTIS 1.1
// isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)
// UZDUOTIS 1.2
// isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)
// UZDUOTIS 1.3
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)
// UZDUOTIS 1.4
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)

// PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
// 1.5) surasti jauniausia darbuotoja
// 1.6) surasti seniausia darbuotoja
// 1.6) apskaiciuoti darbuotoju amziaus vidurki

let darbuotojas1 = ['Jonas', 'Jonaitis', 1980, 'Inspektorius'];
let darbuotojas2 = ['Ona', 'Onute', 1980, 'sekretore'];
let darbuotojas3 = ['Kestas', 'Kerta', 2001, 'pavaduotojas'];
let visiDarbuotojai = [];

visiDarbuotojai[0] = darbuotojas1;
visiDarbuotojai[1] = darbuotojas2;
visiDarbuotojai[2] = darbuotojas3;

document.querySelector('h1').innerHTML = visiDarbuotojai[0];

// for(var i = 0; i < visiDarbuotojai.length; i++) {
//     console.log(visiDarbuotojai[0]);
//     break;
// }

// for(var i = 0; i < visiDarbuotojai.length; i++) {
//     console.log(visiDarbuotojai[i][0]);
// }

// for(var i = 0; i < visiDarbuotojai.length; i++) {
//     console.log(visiDarbuotojai[i]);
// }

// for(var i = 0; i < visiDarbuotojai.length; i++) {
//     for(var j = 0; j < visiDarbuotojai[i].length; j++) {
//         console.log(visiDarbuotojai[i][j]);
//     }
//      console.log('-----------------------------');
// }

function jauniausias(matrica) {
    let amzius = 0;
    let darbuotojoNr = 0;
    for(var i = 0; i < matrica.length; i++) {
        if(amzius < matrica[i][2]) {
            amzius = matrica[i][2];
            darbtuotojoNr = i;
        }
    }
    console.log(visiDarbuotojai[darbuotojoNr][0]); /////////////
    console.log(amzius);
}

jauniausias(visiDarbuotojai);

function seniausias(matrica) {
    let amzius = 9999;
    for(var i = 0; i < matrica.length; i++) {
        if(amzius > matrica[i][2]) {
            amzius = matrica[i][2];
        }
    }
    console.log(amzius);
}

seniausias(visiDarbuotojai);


function amziausVidurkis(matrica) {
    let tempAge = 0;
    for(var i = 0; i < matrica.length; i++) {
        tempAge += (new Date().getFullYear()) - matrica[i][2];
    }
    console.log(tempAge / matrica.length);
}

amziausVidurkis(visiDarbuotojai);




// UZDUOTIS 2 --------------
// sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
// Antraste, img pavadinimas, kaina, prekes aprasymas

// 2.A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
// butu gerai, jei kainos butu nuo 10 iki 200 eur (ivairios)
// 2.B. i masyva visosPrekes, ideti "preke" masyva
// 2.C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach(PHP kalba)) ir bootstrap dizaina

// nuotrauka (javascript kalbai)
// let x = "<img src='img/1.jpg' alt='medziginis fotelis'>";

// 2  budai nuotraukoms (PHP kalbai)
// printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
// printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);



// PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
// 3.1 surikiuoti prekes pagal kaina didejanciai
// 3.2 atrinkti prekias iki 100 eur
// sukurti visu prekiu masyvo kopija: i ja sudeti prekias iki 100 naudojant for arba foreach( PHP f-ja)
// 3.3 suapvalinti prekiu kainas , kad nebutu centu  google convert variable into integer
