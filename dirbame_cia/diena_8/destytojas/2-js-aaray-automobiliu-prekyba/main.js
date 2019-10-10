console.log("labas");

// ========js best practice & common mistakes (~2h)

// UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
//  pavadinimas, pravaziuota rida, kaina
let auto = ['audi', 250000, 3000];
// 1. isvesti masyvo duomenis
console.log(auto);
// 2. padidinti kaina: 100
auto[2] += 100;
// 3. padidinti rida: -50000
auto[1] += -50000;
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
auto[3] = "Tomas";
// auto[   auto.length   ] = "Tomas"; // idejimas i pakutini liasva stalciu

// 4.1 atspausdinti visus pakeistus masyvo duomenis
console.log( auto );
// 5. i masyva ideti papildomus duomenis: masinos metai "2004"
auto[ 4 ]  = 2004;
// auto[ auto.length ] = 2004;

// sunkesne:
// html elementus: article, h2, ... susikurti su javascript/ innerHTML
// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>
document.querySelector('body').innerHTML += '<article style="border: solid red 1px"></article>';
document.querySelector('article').innerHTML += '<h2>' + auto[ 0 ] + '</h2>';
document.querySelector('article').innerHTML += '<div> savininko vardas:' + auto[ 5 ] + '</div>';
document.querySelector('article').innerHTML += ' <button> ' + auto[ 2 ] + '</button>';



console.log(     auto.join("  #")     );
 auto.shift( ); // INSTRINA PRIMA & PASLENKA visus
 console.log(auto);
 delete auto[1];  // istrinti tik stalcaius (index) reiksme
 console.log(auto);
 auto.unshift( "as masyvo priekyje"); // idejimas i prieki ir paslenka

// 2 - nuo kur (index) ;
// 0 - kiek istrinti stalciu
// "naujas", "naujas2", "naujas3" - kokius naujys stalcius iterpsiu
auto.splice(2, 0, "naujas", "naujas2", "naujas3");
console.log(auto);
//=============bootstrap---sm-md-lg-xl (30-60m)==========
auto.splice(3, 2); // nuo 3 index istrinsiu 2 stalcius
auto.splice(3, 1, "pakeistas i kita"); // replace -   3 index istrinsiu ir idesiu "..."
