console.log("labas");
// ========js best practice & common mistakes (~2h)


// -------- --Array / Masyvai  Methods (~2h)--------------------
//names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

//console.log(names);
// UZDUOTIS
// pa'googlinti "javascript array Methods":  https://www.w3schools.com/js/js_array_methods.asp
// ismeginti visas komandas/ metodus
// metodas - jau esama js f-ja, kuria suprogramavo js kalbos kurejai

// metodai:
// .shift()
// .length
// .join()
// .pop()
// .slice()
// ...
// pvz    names.shift("Tomas");

// =========================================================
// SAVARANKISKA UZDUOTIS  Array
keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];


// 1. i masyvo gala ideti elmenta "butelis vandens"
keliautojas.push("butelis vandens");
console.log(keliautojas);


// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
keliautojas.unshift("ziebtuvelis");
console.log(keliautojas);

// 3. istrinti 3-cia elmenta
keliautojas.splice(2,1);
console.log(keliautojas);

// --------GERESNI UZDAVINIAI:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");
let skaiciai = [];
for (i=0; i<50; i++){
  skaiciai[i] = 0;
}
console.log(skaiciai);

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
let vienetai = [];
i=0;
while (i<50) {
  vienetai[i] = 1;
  i = i + 1;
}
console.log("su while masyvas vienetai:" + vienetai);

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// for (i=1; i<50; i=i+2){
//   skaiciai[i] = 3;
// }
// console.log(skaiciai);

for (var i=1; i < 50; i++) {
  // ar nelyginis
  if ( i % 2 == 0) {
    skaiciai[i] = 3;
  }
}
console.log("su masyvas:", skaiciai.join (","));
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....


for (i = 1; i<skaiciai.length; i++){
  if ( i %5 == 0) {
    skaiciai[i-1] = 9;
  }
}

console.log("kas penktas:", skaiciai.join (","));





//=============bootstrap---sm-md-lg-xl (30-60m)==========
