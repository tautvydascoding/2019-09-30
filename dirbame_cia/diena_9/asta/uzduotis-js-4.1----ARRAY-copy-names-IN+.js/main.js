console.log("labas");
console.log("labas");

// =================taisyklingas Array copy  =================
// var array = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
// var kopijaNEGERAI =  array; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
// var kopija1 = array.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
// var kopija2 = array.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy

// ================= ========= ======== ========
var ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];



// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
for (var i=0; i < names.length; i++){

  if(names[i] == "Rico"){
    console.log("Riko nr:" + i);
     break;
  }
}

// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"
var rado = -1;
for (let i=0; i < names.length; i++){
  if(names[i] == "Povilas"){
    rado = i;
    console.log(i);
     break;
  }
}
if (rado == -1){
  console.log("nepavyko rasti");
}

// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)

function getStalciausNumeris (vardas, masyvas){
  for (var i=0; i < masyvas.length; i++){
    if(names[i] == vardas){
          return i;
          }
      }
}
console.log(getStalciausNumeris ("Anh", names));

//dar sukurti, kad visus surastu ir sujungtu i viena masyva ir ji isvesti.
//
// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
for (var i=0; i < names.length; i++){

  if(names[i] == "Freida"){
    console.log(lastNames[i]);
     break;
  }
}
// 4) rasti visu zmoniu vardu "Rico" pavardes
let visiRico = [];
for (var i=0; i < names.length; i++){

  if(names[i] == "Rico"){
    visiRico.push (lastNames[i]);
  }
  }
console.log("visos Rico pavardes" + visiRico);




// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];

// A) atspausdinti visus numerius
// B) isvesti ju pavardes ir vardus
let visinumeriai = [];
for (var i=0; i < ieskomiZmones.length; i++){

    visinumeriai.push (ieskomiZmones[i]);
  }
console.log("visi ieskomi numeriai" + visinumeriai);


let visiIeskomi = [];

  for (var i=0; i < ieskomiZmones.length; i++){
n = ieskomiZmones[i];
      visiIeskomi.push (names[n]);
      visiIeskomi.push (lastNames[n]);
  }
console.log(visiIeskomi);

//kitas variantas

for (var i=0; i < ieskomiZmones.length; i++){
n = ieskomiZmones[i];
console.log(names[n], lastNames[n]);}



// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
