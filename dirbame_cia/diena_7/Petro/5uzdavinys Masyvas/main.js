// ========js best practice & common mistakes (~2h)

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------


// UZDUOTIS
// 1.1 sukurti tuscia masyva "prekiautojai"
// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
// 1.3 isvesti i console/ekrana "prekiautojai" masyva

// 2 pervadinti pirma stalciu pvz + "ir KO"
// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)

var prekiautojai = []; // empty array
prekiautojai [0] = 'senukai';
prekiautojai [1] = 'maxima';
prekiautojai [2] = 'norfa';
prekiautojai [3] = 'bmw';
prekiautojai [4] = 'mazda';
console.log(prekiautojai );
console.log(prekiautojai [0], prekiautojai [2],prekiautojai [3]);

let x = prekiautojai [2];
prekiautojai [2] = prekiautojai [3];
prekiautojai [3] = x;

console.log(prekiautojai );

function sukeisti_vietomis(a,b){
    if (a<0 || b>prekiautojai.length){
        console.log("ivesta netinkama reiksme")
    }
    else {
        let x = prekiautojai [a];
        prekiautojai [a] = prekiautojai [b];
        prekiautojai [b] = x;

        console.log("po sukeitimo :", prekiautojai);
    }
    }
sukeisti_vietomis(0,1);
sukeisti_vietomis(-5,4);