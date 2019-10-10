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

auto = ["Mazda", 200000, 5000];
console.log(auto);
auto[2] += 100;
console.log(auto);
auto[1] += -5000;
console.log(auto);
auto[3] = "Tomas";
console.log(auto);
auto[ auto.length ] = "2004";
console.log(auto);

document.querySelector('body').innerHTML = "<article> </article>";
document.querySelector('article').innerHTML = "<h2> pavadinimas " + auto[0] + "</h2>";
document.querySelector('article').innerHTML += "<div> savininko vardas " + auto[3] + "</div>";
document.querySelector('article').innerHTML += "<span> masinos metai " + auto[4] + "Rida:" + auto[1] +"</span>";
// document.querySelector('article').innerHTML += "<div> <button type='button'> masinos kaina " + auto[2] +"</button></div>";
