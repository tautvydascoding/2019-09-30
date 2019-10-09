console.log("labas");
// UZDUOTIS - f-jos return
//failo virusje sukurti kintamuosius:
//valandinisIkainis = 10
//valandos Povilas = 160
//valandos Antanas = 80
//valandos Tomas   = 100
//imones pajamos = 20000
//kitos imones islaidos = 3400
 //UZDUOTIS: sukurti  f-jas:
 //darbuotojoAtlyginimas
 //visuDarbuotojuAtlyginimai (neprivaloma f-ja)
 //imonesPelnas
 //isvesti pelna i console ar ekrana


 let valandinisIkainis = 10;
 let valandosPovilas = 160;
 let valandosAntanas = 80;
 let valandosTomas = 100;
 let imonespajamos = 20000;
 let imonesislaidos = 3400;

 function darbuotojoAtlyginimas(val){
  let atlyginimas = valandinisIkainis * val;
   return atlyginimas;
 }

 console.log("Povilo atlyginimas:" + darbuotojoAtlyginimas(valandosPovilas));
 let pirmasAtlyginimas = darbuotojoAtlyginimas(valandosPovilas);
 console.log("Antano atlyginimas" + darbuotojoAtlyginimas(valandosAntanas));
 let antrasAtlyginimas = darbuotojoAtlyginimas(valandosAntanas);
 console.log("Tomo atlyginimas" + darbuotojoAtlyginimas(valandosTomas));
let treciasAtlyginimas = darbuotojoAtlyginimas(valandosTomas);

function imonesPelnas(){
let pelnas = imonespajamos - pirmasAtlyginimas - antrasAtlyginimas - treciasAtlyginimas - imonesislaidos;
  return pelnas;
}
//jeigu reiketu skaiciuoti keliu imoniu pajamas, reiketu paduoti kintamuosius (pajamos, islaidos, atlyginimai ir t.t.)
console.log("imones pelnas" + imonesPelnas());
