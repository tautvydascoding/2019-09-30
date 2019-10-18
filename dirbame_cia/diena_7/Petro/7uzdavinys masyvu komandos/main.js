// ========js best practice & common mistakes (~2h)


// -------- --Array / Masyvai  Methods (~2h)--------------------
names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log(names);
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

let masyvas = [];
for (var i = 0; i<50 ; i++){
    masyvas[i] = 0;
}
console.log(masyvas);

let masyvaswhile = [];
let k = 0;
    while (k<20){
    masyvaswhile [i] = 1;
    k++;

    }
 console.log("masyvas su while: ",   masyvaswhile);

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....


for (var i = 0; i<50 ; i++){
    if (i % 2 == 1){
        masyvas [i] = "3";
    }

}
console.log(masyvas);

// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....

//=============bootstrap---sm-md-lg-xl (30-60m)==========


for (var i = 1; i<masyvas.length ; i++){
    if (i % 5 == 0){
        masyvas [i-1] = "9";
    }

}
console.log(masyvas);
