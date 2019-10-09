console.log("labas");

// UZDUOTIS - f-jos return
// failo virusje sukurti kintamuosius:
// valandinisIkainis = 10
// valandos Povilas = 160
// valandos Antanas = 80
// valandos Tomas   = 100
// imones pajamos = 20000
// kitos imones islaidos = 3400
 // UZDUOTIS:
 // 1) sukurti  f-ja: getDarbuotojoAtlyginimas
 // 1.2) paleisti tiek kartu kiek turime darbuotoju
 // 2) sukurti  f-ja: getImonesPelnas
 // 2.2) isvesti apskaiciuota pelna i console ar ekrana
 let valandinisIkainis = 10;

 let valandosPovilas = 160;
 let valandosAntanas = 80;
 let valandosTomas   = 100;

 let imonesPajamos = 20000;
 let imonesIslaidos = 3400;

function getDarbuotojoAtlyginimas(valandos) {
    let ats = valandinisIkainis * valandos;
    return ats;
}
let tomoAtlyginimas   = getDarbuotojoAtlyginimas( valandosTomas);
let antanoAtlyginimas = getDarbuotojoAtlyginimas( valandosAntanas);
let poviloAtlyginimas = getDarbuotojoAtlyginimas( valandosPovilas);
// console.log(  "tomo atlygis: " + tomoAtlyginimas );

function getImonesPelnas( ) {
    let ats =  imonesPajamos - imonesIslaidos - tomoAtlyginimas - antanoAtlyginimas - poviloAtlyginimas;
    return ats;
}
let imonesPelnas = getImonesPelnas( );
console.log(  "  pelnas: " + imonesPelnas );
