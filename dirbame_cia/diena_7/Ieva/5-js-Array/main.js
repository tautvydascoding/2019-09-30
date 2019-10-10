console.log("labytis");

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------


	// UZDUOTIS
	// 1.1 sukurti tuscia masyva "prekiautojai"
	// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
	// 1.3 isvesti i console/ekrana "prekiautojai" masyva

    let prekiautojai = [];

    prekiautojai[0] = "senukai";
    
    console.log(prekiautojai[0]);

    prekiautojai[1] = "depo";

    console.log(prekiautojai[1]);

    prekiautojai[2] = "ermitazas";

    console.log(prekiautojai[2]);

    console.log(prekiautojai);

    prekiautojai[3] = "katinukai";

    console.log(prekiautojai[3]);

    console.log(prekiautojai);

    // 2 pervadinti pirma stalciu pvz + "ir KO"
    
    prekiautojai[1] += " ir KO";

    console.log(prekiautojai[1]);

    console.log('pries: ' + prekiautojai );

 	// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
		// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

    let pagalbinis = prekiautojai[2];
    console.log(pagalbinis);

    prekiautojai [2] = prekiautojai [3];

    prekiautojai [3] = pagalbinis;

    console.log('po: ' + prekiautojai);
    
    // 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)
    
function sukeistiMasyvo2elementus(x,y) {
    let pagalbinis = prekiautojai[x];
    prekiautojai [x] = prekiautojai [y];
    prekiautojai [y] = pagalbinis;
}
sukeistiMasyvo2elementus(0,1);

console.log('bandom: ' + prekiautojai );


	// var prekiautojai = []; // empty array
