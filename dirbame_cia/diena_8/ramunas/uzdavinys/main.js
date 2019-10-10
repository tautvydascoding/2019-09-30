// ========js best practice & common mistakes (~2h)

// UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
//  pavadinimas, pravaziuota rida, kaina
// 1. isvesti masyvo duomenis
// 2. padidinti kaina: 100
// 3. padidinti rida: -50000
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
// 4.1 atspausdinti visus pakeistus masyvo duomenis
// 5. i masyva ideti papildomus duomenis: masinos metai "2004"

// sunkesne:
// html elementus: article, h2, ... susikurti su javascript/ innerHTML
// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>

//=============bootstrap---sm-md-lg-xl (30-60m)==========

let auto=["Audi", 250000, 3000];
console.log(auto);

auto[2] += 100;
console.log(auto[2]);

auto[1] += -50000;
console.log(auto[1]);

auto[3] = "Tomas";
//auto[ auto.lenght ] = "Tomas"; // teisingiausias budas ivesti naujus duomenis i paskutini stalciu

console.log(auto[3]);
console.log(auto);

auto[4] = "2004";
console.log(auto);

document.querySelector("h2").innerHTML += auto[0];
document.querySelector("div").innerHTML += "Savininko vardas:" + " " + auto[3];
document.querySelector("span").innerHTML += "Masinos metai:" + " " + auto[4];
document.querySelector("button").innerHTML += "Kaina:" + " " + auto[2];
