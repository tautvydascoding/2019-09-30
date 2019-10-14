console.log("labas");

//  NaN  - Not a Number
//   ( taisymas - bandai atlinkti matematinius veiksmus ne su skaiciumi)
//   gali buti jusu x = undefined (neturiu duomenu)
//   gali budi judu x = "99" (string)
//
// not defined x - kintamasis 'x' nerastas (rasybos klaidos arba jis local)
// not defenind function spausdinti - nerasta f-ja (rasybos klaidos)
// syntax error - pamirsote ";" "," ")"  (sioje arba auksciau eilute)
// index  tomas - to stalciaus masyve nera


console.log("labas");

// ================= ========= ======== ========
 ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];
// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
for (var i = 0; i < names.length; i++) {
    if(names[i] == "Rico") {
        console.log("Rico numeri: " + i);
        break; // nutraukia/isjungia visa Cikla
        // continue;
        // console.log("si eilute neivyks"); // niekada neivyks
    }
}

// 1B) papildyti ^: jeigu tokio vardo neranda,
// isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"
let arRadom = false;
for (var i = 0; i < names.length; i++) {
    if(names[i] == "Rico") {
        arRadom = true;
        console.log("Rico numeri: " + i);
        break; // nutraukia/isjungia visa Cikla
    }
}
if (arRadom == false) {   // if( !arRadau )
    console.log("Nepavyko rasti...Bandykite kita zodi");
}
// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi ,
// ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)
function getStalciausNumeris( ieskomasTekstas) {
    if(ieskomasTekstas != null && ieskomasTekstas != undefined && ieskomasTekstas.length > 0) {
        for (var i = 0; i < names.length; i++) {
            if(names[i] == ieskomasTekstas) {
                return i;  // nutruksta
            }
        }
    } else {
        return "Blogai ivedei. Pabandyk vel";
    }
}
console.log(    getStalciausNumeris('Rico')  );
console.log(    getStalciausNumeris('Sybil')  );
// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
let nr = getStalciausNumeris('Freida');
console.log("freidos pavarde: " + lastNames[nr]  );

// ARBA


// 4) rasti visu zmoniu vardu "Rico" pavardes
// ieskomasTekstas = 'Rico';
for (var i = 0; i < names.length; i++) {
    if(names[i] == 'Rico') {
        console.log( "Rico nr: " + i);
        console.log( "Rico pavarde: " + lastNames[i]);
    }
}


// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius
for (var i = 0; i < ieskomiZmones.length; i++) {
    console.log(ieskomiZmones[i]);
}
// B) isvesti ju pavardes ir vardus
// ilgas
for (var i = 0; i < names.length; i++) {
    for (var k = 0; k < ieskomiZmones.length; k++) {
        if (i == ieskomiZmones[k]) {
            console.log( 'vardas: ' + names[i]);
        }
    }
}
//trumpas
for (var i = 0; i < ieskomiZmones.length; i++) {
    nr = ieskomiZmones[i];
    console.log( names[nr],   lastNames[nr] );
}

// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
