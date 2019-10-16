console.log("labuka, gal numeriuka");

// visas uzduotis atlikti naudojant js (arba jquery jeigu destytojas leidzia - sisiklausti)

// 1 uzduotis
// su js sukurti <img elementa 200x200 dydzio
// pasitikrinti su console

console.log("<img src = 'img/1.jpg' alt = 'foto' width = '200px;' height = '200px;'>");




// 1.1
// su js sukurti <header> ir <footer>
// ir ideti juos i body

$('body').append("<header> </header> <br> <footer> </footer>");
$('header').append("<img src = 'img/1.jpg' alt = 'foto' width = '200px;' height = '200px;'>");
$('footer').append("<img src = 'img/1.jpg' alt = 'foto' width = '200px;' height = '200px;'>");

// 1.2
// i <header> ir <footer> ideti <img> elementa

// 1.3
// css faile aprasyti .logo klase:
//      dydis 100x100, seselis i visas puses per 10px

// 1.4
// <img> elementui, kuris yra <header> elemente,  uzdeti klase "logo"

$('header img').addClass("logo");

// 1.5
// sukurti <main> elementa po <header> elementu  (<header></header>  <main>text</main>   <footer></footer>)

$('header').after("<br><main> gyvenimas grazus </main>");

// 1.6
// sukurti <article> elementa su viduje <h2> ir <p> elementais (irasyti ir teksto i abu)

// 1.7
//  ideti 1.6 <article> elementa (kuris laiko savyne <h2> ir <p>)  i <main> elementa

// 1.8
// perkelti LOGOTIPA i kita vieta naudojant js
// A) perkelti i footer
// B) perkelti i article ( tarp h2 ir p)
//
// ---------------------------------
// 1.9 daugiau uzduociu su perkelimu elementu append, prepend, after, before, appendTo
// ---------------------------------


// =================click=========
// 1.9.1
// paspaudus ant logo ji suanimuoti jQuery
// LOGO keliauja i desine ir virsu ekrano puse
// tampa permatomas 0.5
//

console.log("Labas222");


// _______naudojant tik js_________(create and add_class)_____
//  atlikti   uzduotis naudojant tik jQuery

// 1.1  sukurti:
// {/* <section>
//     <h1>  Tekstas </h1>
// </section> */}

//1.2 patobulinti h1 -  ant h1 elemento uzdesime klases: " bg-info  mt-5 aukstis-200" (naudojant jQuery)

// pvz:
//    <h1 class="bg-info mt-5 aukstis-200">  Tekstas </h1>


// 1.3  nuo h1 pasalinti mt-5 klase
// 1.4  paleisti komanda   toggleClass( 'aukstis-200')  -
// 1.5  vel paleisti komanda   toggleClass( 'aukstis-200')  -
// KAS pasikeite?

// 2. Patikrinti ar h1 turi klase 'bg-info':
// jeigu NETURI  uzdeti klase "bg-success"
// jeigu TURI  uzdeti klase "bg-danger"

// 3. Patikrinti ar 'section' turi klase 'aukstis-200':
// jeigu NETURI  uzdeti klase "aukstis-200"
// jeigu TURI  uzdeti klase "aukstis-500"

