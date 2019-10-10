console.log("labas");

// ========js best practice & common mistakes (~2h)

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------


	// UZDUOTIS
	// 1.1 sukurti tuscia masyva "prekiautojai"
    let prekiautojai = [];
	// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
    prekiautojai[0] = "senukai";
    prekiautojai[1] = "maxima";
    prekiautojai[2] = "iki";
    prekiautojai[3] = "moki vezi";
    prekiautojai[4] = "depo";
    prekiautojai[5] = "ermitazas";
    // 1.3 isvesti i console/ekrana "prekiautojai" masyva
    console.log(  prekiautojai  );

	// 2 pervadinti pirma stalciu pvz + "ir KO"
    // prekiautojai[1] =  prekiautojai[1] + "ir KO";
    prekiautojai[1] +=  "ir KO";

    console.log( prekiautojai[1] , prekiautojai[2] , prekiautojai[3]  );
 	// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
		// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)
console.log( "pries sukeiciant:", prekiautojai  );
let t = prekiautojai[2];
prekiautojai[2] = prekiautojai[3];
prekiautojai[3] = t;
console.log( "po sukeitimo:", prekiautojai  );
	// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)
function sukeistiMasyvo2elementus(x, y) {
    let t = prekiautojai[x];
    prekiautojai[x] = prekiautojai[y];
    prekiautojai[y] = t;
}
sukeistiMasyvo2elementus(5,1);
console.log( "po sukeitimo 5,1:", prekiautojai  );
	// var prekiautojai = []; // empty array
