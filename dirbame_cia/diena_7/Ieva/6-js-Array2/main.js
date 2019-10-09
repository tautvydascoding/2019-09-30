console.log("Na jau vakareja");

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

// 0 uzd

let masina = ['Volvo', 200000, 2700];

// 1 uzd
console.log('Masinos duomenys: ', masina);

console.log('Pavadinimas:', masina[0]);
console.log('Rida:', masina[1]);
console.log('Kaina:', masina[2]);

// 2 uzd

masina[2] = masina[2] + 100;

console.log(masina[2]);

// 3 uzd

masina[1] = masina [1] + 50000;

console.log(masina[1]);

// 4 uzd

masina[3] = "Marija";

// 4.1 uzd

console.log('Naujas masyvas:', masina);

// 5 uzd

masina[4] = 2005;

console.log('Su metais masyvas:', masina)

// sunkesne:
// html elementus: article, h2, ... susikurti su javascript/ innerHTML

document.querySelector('body').innerHTML += "<article> </article>";

document.querySelector('article').innerHTML += "<h2>" + masina[0] + "</h2>";

document.querySelector('article').innerHTML += "<div> Savininko vardas: " + masina[3] + "</div>";

document.querySelector('article').innerHTML += `<span> Masinos metai: ${masina[4]} Rida: ${masina[1]} </span> `;

document.querySelector('article').innerHTML += `<button type="button"> Kaina ${masina[2]}</button> `

// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>
