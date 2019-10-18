

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

console.log("------UZDUOTIS 1.0-------");
let darbuotojas1 = ["Jonas", "Jonaitis","1980","Inspektorius"];
let darbuotojas2 = ["Ona", "Onute","1980","sekretore"];
let darbuotojas3 = ["Kestas", "Kerta","2001","pavaduotojas"];
let visiDarbuotojai = [];
visiDarbuotojai [0] = darbuotojas1;
visiDarbuotojai [1] = darbuotojas2;
visiDarbuotojai [2] = darbuotojas3;
console.log(visiDarbuotojai);

// UZDUOTIS 1.0
// isvesti visa informacija apie pirma darbuotoja (NEnaudojant FOR cikla)

console.log(visiDarbuotojai[0][0]);
console.log(visiDarbuotojai[0][1]);
console.log(visiDarbuotojai[0][2]);
console.log(visiDarbuotojai[0][3]);


// UZDUOTIS 1.1
// isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)

console.log("------UZDUOTIS 1.1-------");
for (var i=0; i<visiDarbuotojai[0].length; i++){
    console.log(visiDarbuotojai[0][i]);
}

// UZDUOTIS 1.2
// isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)
console.log("------UZDUOTIS 1.2-------");
for (var i=0; i<visiDarbuotojai.length; i++){
    console.log("Vardas: ", visiDarbuotojai[i][0]);
}


// UZDUOTIS 1.3
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)

console.log("------UZDUOTIS 1.3-------");
for (var i=0; i<visiDarbuotojai.length; i++){
    console.log("Darbuotojas: ", visiDarbuotojai[i][0] , visiDarbuotojai[i][1], visiDarbuotojai[i][2], visiDarbuotojai[i][3]);
}

// UZDUOTIS 1.4
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)

console.log("------UZDUOTIS 1.4-------");

for (var i=0; i<visiDarbuotojai.length; i++){
    for ( var t=0; t<visiDarbuotojai[i].length; t++){
        console.log(visiDarbuotojai[i][t]);
    }
    console.log("------------");
}


// PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
// 1.5) surasti jauniausia darbuotoja

console.log("------UZDUOTIS 1.5-------");
let jauniausias = 1;
let darbuotojoNr = 0;
for(i=0; i<visiDarbuotojai.length; i++){
    if (visiDarbuotojai[i][2]>jauniausias){
        jauniausias = visiDarbuotojai [i][2];
        darbuotojoNr = i;
        }

}
console.log (visiDarbuotojai[darbuotojoNr][0]);


// 1.6) surasti seniausia darbuotoja

console.log("------UZDUOTIS 1.6-------");
let seniausias = 1;
let sdarbuotojoNr = 0;
for(m=0; m<visiDarbuotojai.length; m++){
    if (visiDarbuotojai[m][2]<jauniausias){
        seniausias = visiDarbuotojai [m][2];
        sdarbuotojoNr = m;
    }

}
console.log (visiDarbuotojai[sdarbuotojoNr][0]);





// 1.6) apskaiciuoti darbuotoju amziaus vidurki

let suma = 0;
for (var i=0; i < visiDarbuotojai.length; i++){
    suma += (new Date().getFullYear()) =
}






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
