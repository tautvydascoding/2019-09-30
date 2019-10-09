console.log("labas");
// ========js best practice & common mistakes (~2h)

// UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
let masina = [];
//  pavadinimas, pravaziuota rida, kaina
masina[0] = "Audi";
masina[1] = 20000;
masina[2] = 3000;
// 1. isvesti masyvo duomenis
console.log(masina);

// 2. padidinti kaina: 100
masina[2] = masina[2] + 100;
console.log(masina[2]);
// 3. padidinti rida: -50000
masina[1] = masina[1] + 50000;
console.log(masina[1]);

// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
masina[masina.length] = "Tomas"; //idejimas i paskutini laisva stalciu
console.log(masina);

// 4.1 atspausdinti visus pakeistus masyvo duomenis
console.log(masina[2], masina[1], masina[3]);

// 5. i masyva ideti papildomus duomenis: masinos metai "2004"
masina[4] = 2004;

// sunkesne:
// html elementus: article, h2, ... susikurti su javascript/ innerHTML

// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>
document.querySelector('body').innerHTML = "<article><article>"; //taip galima susikurti pvz article paragrafa, nelendant i html
document.querySelector('article').innerHTML += "<h2>" + masina[0] + "</h2>";
document.querySelector('article').innerHTML += "<div>" + masina[3] + "</div>";
document.querySelector('article').innerHTML += "<span>" + masina[4] + "</span>";
document.querySelector('article').innerHTML += "<button>" + masina[2] ;

console.log(masina.join(" #"));   //sujungia visus masyvo sukeistiMasyvo2elementus
masina.shift(); //istrina pirma ir paslenka visus
console.log(masina);
delete masina[1]; //istrinti tik stalciaus index reiksmes
masina.unshift("as masyvo priekyje"); //ideda i prieki ir paslenka
//2 - nurodo nuo kur; 0 - nurodo kiek istrinti stalciu, "naujas" - kokius iterpti naujus stalcius
masina.splice(2, 0, "naujas", "naujas2", "naujas3");
console.log(masina);

masina.splice(3,2); // nuo 3 index istrinsiu 2 stalciaus

masina.splice(3,1,"pakeistas kitas"); // nuo 3 istrinsiu ir idesiu
//=============bootstrap---sm-md-lg-xl (30-60m)==========

let puse=masina.slice(5); //nuo 5 iki galo
let puse1=masina.slice(2,6); //nuo 2 iki6
let puse2=masina.slice(-2); //2 paskutiniai
