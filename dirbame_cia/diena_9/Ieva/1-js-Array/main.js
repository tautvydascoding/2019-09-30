console.log("labas, kokia grazi diena");

// =================taisyklingas Array copy  =================
// var array = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
// var kopijaNEGERAI =  array; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
// var kopija1 = array.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
// var kopija2 = array.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy

// ================= ========= ======== ========
 ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];


// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
var i = 0;


for (i = 0; i < names.length; i++) {
    if (names[i]==="Rico") {
        console.log(i, names[i]);
    }
}

console.log(names[47]);

for (i = 0; i < names.length; i++) {
    if (names[i]==="Rico") {
        console.log(i, names[i]);
        break;
    } 
}


// while irgi galima, bet reiktu pagalbinio kintamojo


// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"

// var busena = "Neradau";


// for (i = 0; i < names.length; i++) {
//     if (names[i]===) {
//         busena = "Rico";
//         break;
//   }
// }

// if (busena === "Rico") {
//     console.log(busena);
// }

let arRadom = false;
let name1 = "Ripo";

for (i = 0; i < names.length; i++) {
    if (names[i]===name1) {
        arRadom = true;
        console.log("nr: ", i);
        break;
    }
}

if (arRadom == false) { //!arRadom
    console.log("Nepavyko rasti...Bandykite kita zodi");
}

// 2 UZDUOTIS (f-ja ieskom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)



function getStalciausNumeris(ieskomasTekstas) {
    for (i = 0; i < names.length; i++) {
        if (names[i]===ieskomasTekstas) {
            return i;
        }
    } 
}

console.log(getStalciausNumeris('Freida'));

let nr = getStalciausNumeris('Freida');
let freidosPavarde = lastNames[nr];
console.log('freidos pavarde: ' + freidosPavarde);

/// II budas
// ieskomasTekstas = "Rico";

for (i = 0; i < names.length; i++) {
    if (names[i]== "Rico") {
        console.log("Freidos nr: "  + i);
        console.log("Freidos pavarde: " + lastNames[i])
        break;
    }
}

// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)



// 4) rasti visu zmoniu vardu "Rico" pavardes

for (i = 0; i < names.length; i++) {
    if (names[i]== "Rico") {
        console.log("Freidos nr: "  + i);
        console.log("Freidos pavarde: " + lastNames[i])
        }
}


// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius

ieskomiZmones = [2, 16, 17, 18, 19, 25];

for (i = 0; i < ieskomiZmones.length; i++) {
    console.log(ieskomiZmones[i]);

}


//su ciklu numeriukus 

// B) isvesti ju pavardes ir vardus


for (i = 0; i < ieskomiZmones.length; i++) {
    let nr2 = ieskomiZmones[i];
    console.log(nr2);
    console.log("vardas: "  + names[nr2]);
    console.log("pavarde: " + lastNames[nr2]);
}

/// II budas

// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
