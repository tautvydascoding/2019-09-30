console.log("labas");
// ========js best practice & common mistakes (~2h)

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------


	// UZDUOTIS
	// 1.1 sukurti tuscia masyva "prekiautojai"

  let prekiautojai = [];

	// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
  prekiautojai[0] = "senukas";
prekiautojai[1] = "depo";
  prekiautojai[2] = "maxima";
  prekiautojai[3] = "silas";
  prekiautojai[4] = "iki";
  prekiautojai[5] = "ikea";
	// 1.3 isvesti i console/ekrana "prekiautojai" masyva
console.log(prekiautojai);

	// 2 pervadinti pirma stalciu pvz + "ir KO"
  prekiautojai[0] = prekiautojai[0] + "ir KO";
  console.log(prekiautojai[0]);

 	// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
		// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)
    prekeivis = prekiautojai[1];
    prekiautojai[1]=prekiautojai[2];
    prekiautojai[2]=prekeivis;
    console.log(prekiautojai[1], prekiautojai[2]);

	// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)
function sukeistiMasyvo2elementus(x, y){
  prekeivis = prekiautojai[x];
    prekiautojai[x]=prekiautojai[y];
    prekiautojai[y]=prekeivis;
  }
sukeistiMasyvo2elementus(4, 5);
console.log(prekiautojai);
