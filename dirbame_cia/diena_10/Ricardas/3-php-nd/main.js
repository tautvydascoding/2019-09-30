// UZDUOTIS 1
// pakeisti visus h1 tekstus i "Antraste nr: XX" ( vietoj "xx" isvesti skaiciu, kelinta tai antrate)

$('h1').eq(0).text("Antraste nr: 1");
$('h1').eq(1).text("Antraste nr: 2");
$('h1').eq(2).text("Antraste nr: 3");

//  UZDUOTIS 2
// pakeisti visus h2 tekstus, kurie yra "section" elemente.
// pakeisti i "Pakeista antraste "

$('section h2').text('antraste');

// UZDUOTIS 3
// i console atspausdinti "li" elemento, kurio klase "reklama" - teksta

// console.log($('li.wreklama').text());

// UZDUOTIS 4
// i console atspausdinti  visus "li" tekstus

// console.log($('li').text());

//-------advance --------

// UZDUOTIS 5
// sukeisti vietomis "li" elementu "about" ir "gallery" (naujant jQuery)

$('li:nth-child(1)').after($('li.wreklama'));

//------ atributes--------------------------
// UZDUOTIS 6
// surasti <li class='reklama'> ir jam ideti dar viena atributa: style='color: red'   (naujant jQuery)

$('li.wreklama').attr('style','color: red');

// UZDUOTIS 7
// A. visiems "li" elementams pridete atributa: class='nav-item '   (naujant jQuery)
// B. pirmam "li" elementui uzddeti dar viena klase: "active"

$('li').attr('class', 'navi-item');
// $('li:first-child').attr('class', 'active');
$('li:first-child').addClass('active');

// UZDUOTIS 8
//   su jquery uzpildyti form'a uz vartotoja:
//  visiems "input" elementams pridete atributa: value=' xxx '   (naujant jQuery)
//  ivesti vardas: 'Tomas'
//  ivesti pastas: 'a@a.lt'

$('input').attr('value', 'xxx');
$('input:first-child').val('Tomas'); 
$('input:last-child').val('a@a.lt');

// _______naudojant tik js_________(create and add_class)_____
//  atlikti   uzduotis naudojant tik jQuery

// 1.1  sukurti:
//<section>
//    <h1>  Tekstas </h1>
//</section>

$('body').append('<section></section>');
$('section:last-child').append('<h1> Tekstas </h1>');

//1.2 patobulinti h1 -  ant h1 elemento uzdesime klases: " bg-info  mt-5 aukstis-200" (naudojant jQuery)

$('section h1').addClass('bg-info mt-5 aukstis-200');

// pvz:
//   <h1 class="bg-info mt-5 aukstis-200">  Tekstas </h1>

// 1.3  nuo h1 pasalinti mt-5 klase

$('section h1').removeClass('mt-5');

// 1.4  paleisti komanda   toggleClass( 'aukstis-200')

$('section h1').toggleClass('aukstis-200');

// 1.5  vel paleisti komanda   toggleClass( 'aukstis-200')

$('section h1').toggleClass('aukstis-200');

// KAS pasikeite?

// 2. Patikrinti ar h1 turi klase 'bg-info':
// jeigu NETURI  uzdeti klase "bg-success"
// jeigu TURI  uzdeti klase "bg-danger"

$('section h1').addClass('bg-success');

// 3. Patikrinti ar 'section' turi klase 'aukstis-200':
// jeigu NETURI  uzdeti klase "aukstis-200"
// jeigu TURI  uzdeti klase "aukstis-500"

$('section h1').addClass('aukstis-500');

// UZDUOTIS
// 1.0
// kaip perkelti klase 'h3' po 'h4'

$('aside h4').after($('aside h3'));

// 1.1
// kaip perkelti klase 'reklama' virs 'section'

$('aside').before($('aside > h2.wreklama'));

// 1.2
// kaip perkelti 'h3' po 'div'

$('div').after($('aside > h3'));

// 1.3
// kaip perkelti 'h4' i  'nav' vidu

$('nav').prepend($('aside > h4'));

// 1.4
// kaip perkelti 'h5'  virs  'article'

$('article').before($('aside > h5'));

// 1.5
// kaip perkelti 'section'  po  'article'

$('article').after($('aside'));

// UZDUOTIS 1:
// SUKURTI DVI F-JAS:
// viena pasisveikina "sveikinuosi()"
// kita atsisveikina "atsisveikinu()"

// UZDUOTIS 1.1
// patobulinti f-ja, kuri sveikinasi, kad ji papildoma argumenta "callback"  / "iskviestiPabaigusDarbus"

// UZDUOTIS 1.2
// iskviesti pasisveikinimo f-ja, ir jai padduoti atsisveikino f-ja

// function sveikinuosi(funkcija) {
//     console.log('labas');
//     funkcija;
// }

// sveikinuosi(atsisveikinu());

// function atsisveikinu() {
//     console.log('viso');
// }

// visas uzduotis atlikti naudojant js (arba jquery jeigu destytojas leidzia - sisiklausti)

// 1 uzduotis
// su js sukurti <img elementa 200x200 dydzio
// pasitikrinti su console

document.querySelector('body').innerHTML += '<img width="200px" height="200px"></img>';

// 1.1
// su js sukurti <header> ir <footer>
// ir ideti juos i body

const head = document.createElement('header');
document.body.prepend(head);
document.querySelector('body').innerHTML += '<footer></footer>';

// 1.2
// i <header> ir <footer> ideti <img> elementa

document.querySelector('header').innerHTML += '<img></img>';
document.querySelector('footer').innerHTML += '<img></img>';

// 1.3
// css faile aprasyti .logo klase:
//      dydis 100x100, seselis i visas puses per 10px

// 1.4
// <img> elementui, kuris yra <header> elemente,  uzdeti klase "logo"

document.querySelector('header>img').classList.add('.logo');

// 1.5
// sukurti <main> elementa po <header> elementu  (<header></header>  <main>text</main>   <footer></footer>)

const mainas = document.createElement('main');
document.querySelector('header').after(mainas);

// 1.6
// sukurti <article> elementa su viduje <h2> ir <h2> elementais (irasyti ir teksto i abu)

document.querySelector('body').innerHTML += '<article><h2>Atraste</h2><p>Textas</p></article>';

// 1.7
//  ideti 1.6 <article> elementa (kuris laiko savyne <h2> ir <p>)  i <main> elementa

const art = document.querySelector('article')[1];
document.main.appendChild(art); ///>>>>>>>???????????????

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
