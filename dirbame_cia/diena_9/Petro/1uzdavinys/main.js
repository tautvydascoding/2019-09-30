console.log("labas");

// =================taisyklingas Array copy  =================
var array = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
var kopijaNEGERAI =  array; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
var kopija1 = array.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
var kopija2 = array.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy

// ================= ========= ======== ========
ieskomiZmones = [2, 16, 17, 18, 19, 25];

var vardai = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];


// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)

let pavyko = false;
let ieskomasVardas = "Sybil"
for (var i=0 ; i < vardai.length ; i++){
    if (vardai[i] ==ieskomasVardas){
        pavyko = true;
        console.log("Rico numeris" + i);
        break;
    }

}

if (pavyko == false) { // kitas variantas ( !pavyko )
    console.log("Nepavyko rasti...Bandykite kita zodi");
    }


// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"


// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// ji suranda  jo vieta masyve (stalciaus numeri) ir si numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)


function getStalciausNumeris (ieskomasZodis){
    for (var i=0; i<vardai.length; i++) {
        if ( vardai[i] == ieskomasZodis) {

            return i;
        }

    }

}

console.log(getStalciausNumeris('Piper'))


// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)

// let nr = getStalciausNumeris('Freida');
// console.log("Freidos pavarde:" + lastNames[nr]);


let ivedamasVardas = "Freida";
for (var i = 0; i<vardai.length; i++) {
    if (vardai[i] == ivedamasVardas) {
        console.log(i);
        console.log(lastNames[i]);

    }
}

// 4) rasti visu zmoniu vardu "Rico" pavardes
// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius
// B) isvesti ju pavardes ir vardus
//ilgas variantas nebaigtas:
// for(var i = 0; i<vardai.length; i++){
//     for (var k = 0; k<ieskomiZmones.length; k++)
//         if (i == ieskomiZmones[k]);
// }


// trumpas variantas

for(var i = 0; i<ieskomiZmones.length; i++){
    console.log(ieskomiZmones[i],vardai[ieskomiZmones[i]],lastNames[ieskomiZmones[i]]);

}


// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
