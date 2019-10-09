

// UZDUOTIS - f-jos return
//failo virusje sukurti kintamuosius:
 //   valandinisIkainis = 10
//valandos Povilas = 160
//valandos Antanas = 80
//valandos Tomas   = 100
//imones pajamos = 20000
//kitos imones islaidos = 3400
//UZDUOTIS: sukurti  f-jas:
//darbuotojoAtlyginimas
//visuDarbuotojuAtlyginimai
//imonesPelnas
//isvesti pelna i console ar ekrana


//KAI YRA VIENA IMONE

let valandinisIkainis = 10;

function getdarbuotojjoAtlyginimas(valandos) {
    let atlyginimas = valandinisIkainis * valandos;
    return atlyginimas;
}
let povilas = getdarbuotojjoAtlyginimas(160);
let antanas = getdarbuotojjoAtlyginimas(80);
let tomas = getdarbuotojjoAtlyginimas(100);

let imonesPajamos = 20000;
let kitosImonesIslaidos = 3400;

function getImonesPelnas(){
    let pelnas = imonesPajamos - kitosImonesIslaidos - povilas - antanas - tomas;
    return pelnas;
}
console.log(getImonesPelnas());


//KAI YRA KELIOS IMONES



//function getdarbuotojjoAtlyginimas(valandos) {
//    let atlyginimas = valandinisIkainis * valandos;
//    return atlyginimas;
//}
//let povilas = getdarbuotojjoAtlyginimas(160);
//let antanas = getdarbuotojjoAtlyginimas(80);
//let tomas = getdarbuotojjoAtlyginimas(100);

//let imonesPajamos = 20000;
//let kitosImonesIslaidos = 3400;

//function getImonesPelnas(){
    let pelnas = imonesPajamos - kitosImonesIslaidos - povilas - antanas - tomas;
    return pelnas;
//}
console.log(getImonesPelnas());