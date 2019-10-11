// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");
// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....

// let masyvas = [];

// for(let i = 0; i < 50; i++) {
//     masyvas[i] = 3;
// }

// while(masyvas.length < 50) {
//     masyvas += "1";
// }

// console.log(masyvas);

// for(let i = 0; i < masyvas.length; i++) {
//     if(i % 5 == 0) {
//         masyvas[i] = 9;
//     }
// }

// console.log(masyvas);



// ================= ========= ======== ========
 ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper",
 "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico",
  "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona",
   "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan",
 "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears",
  "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer",
   "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

// let varduIndexai = [];
// let yra = false;

// for(let i = 0; i < names.length; i++) {
//     if(names[i] == "Rico") {
//         varduIndexai += i;
//         yra = true;
//     }
// } 

// if(yra == false) {
//     console.log('nepavyko rasti, bandykite kita zodi');
// }

// if(!yra)

// console.log("rico numeis " + i);
// break

// console.log(names.indexOf("Rico"));

// console.log(varduIndexai);


// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)

// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"


// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)
// let stalciausNumeris = [];
// function getStalciausNumeris(objektas, masyvas) {
//     for(let i = 0; i < masyvas.length; i++) {
//         if(masyvas[i] == objektas) {
//             stalciausNumeris.push(i);
//         }
//     }
//     console.log(stalciausNumeris);
// }

// getStalciausNumeris("Rico", names);




// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)

// console.log(lastNames[37]);

// 4) rasti visu zmoniu vardu "Rico" pavardes

// console.log("Rico numeri: " + i);
// console.log("Rico pavarde: " lastNames[i]);

// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius
// B) isvesti ju pavardes ir vardus

for(i = 0; i < ieskomiZmones.legth; i++) {
    nr = ieskomiZmones[i];
    console.log(names[nr], lastNames[nr]);   
}


// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
