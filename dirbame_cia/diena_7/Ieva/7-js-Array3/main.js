console.log("labas, labuka");

// -------- --Array / Masyvai  Methods (~2h)--------------------
// names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// console.log(names);
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
// .splice()
// ...
// pvz    names.shift("Tomas");

// SAVARANKISKA UZDUOTIS  Array
keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// 1. i masyvo gala ideti elmenta "butelis vandens"

keliautojas.push("butelis vandens");

console.log( keliautojas);

// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"

keliautojas.unshift("ziebtuvelis");

console.log( keliautojas);

// 3. istrinti 3-cia elmenta

keliautojas.splice(3,1);

console.log( keliautojas);

// --------GERESNI UZDAVINIAI:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

let skaiciukai = [];

for (var i = 0; i < 50; i++) {
    skaiciukai[i] = 0; ///skaiciukai.push(0); 
}

console.log(skaiciukai);

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;


// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....

// I BUDAS
// for (var i = 1; i < 50; i+=2) {
//     skaiciukai[i] = 3;
// }
// console.log(skaiciukai);

// II BUDAS
// for (var i = 1; i < 50; i++) {
//     skaiciukai[i] = 3;
//     i++
// }


//III BUDAS
for (var i = 0; i < 50; i++) {
  if (i % 2 == 1) {
      skaiciukai[i] = 3;
  }
}

console.log(skaiciukai);


// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....
