console.log( " Labas ");

// UZDUOTYS PRIES TESTAS JS IR JQUERY
// 0. html faile isideti
<body>
   <header>
   		<h1>  Antraste </h1>
   </header>

   <footer>
   		<h4>  Antraste 1 </h4>
   		<h4>  Antraste 2 </h4>
   		<h4>  Antraste 3 </h4>
   		<h4>  Antraste 4 </h4> 
   		&copy 1990
   </footer>
</body>
// 1. su js  pakeisti 'header' H1 teksta i " Pakeistas su js"
// 2. su jQury  pakeisti 'footer' H2 teksta i " Pakeistas su JQ"
// 3. su jQuery paimti  'footer' h1 tekta ir atspausdinti i console



// UZDUOTYS
// 1. su jQury    sukurti elementa 'section' su tekstu 'mano tekstas'
// 2. su jQury   elementa 'section' ideti i HTML faila su jquery tarp 'header' ir 'footer'


// UZDUOTYS
// 1. uzdeti klase 'bg-info' ant visu h4
// 2. uzdeti klase bg-warning ant 'header'
// 3. uzdeti atributa 'width=30%' ant 'header'














//  ========SPRENDIMAS=============
// 1. su js  pakeisti 'header' H1 teksta i " Pakeistas su js"
document.querySelector('header h1').innerHTML = " Pakeistas su js";

// 2. su jQury  pakeisti 'footer' H2 teksta i " Pakeistas su JQ"
$('footer h2').text(  " Pakeistas su JQ"  );

// 3. su jQuery paimti  'footer' h1 tekta ir atspaudinti i console
var x = $('footer h1').html();  // nenurodziuzs nieko kliausteliuose - paimam duomenis
console.log(  "footerio h1 yra:" , x);

// 4.  su jQuery pakeisti  'input' ivedimo  'value'reiksme (pvz: .val('tomas'))

// UZDUOTYS
// 1. su jQury sukurti elementa 'section' su tekstu 'mano tekstas'
// var blokas = $('<section> mano tekstas </section>');
// arba
var blokas = $('<section></section>').text("mano tekstas");
// 2. su jQury   'section' ideti i 'body'
$('body').append(  blokas  );

// 3. su jQury   'section' ideti i 'header'
 blokas.appendTo('header');

 // 4. su jQury   'section' ideti tarp 'header' ir 'footer'
 // KA              KUR
blokas.insertAfter( 'header'); // perkialia visa elementa i nauja vieta
// note:
blokas.after( 'header'); // !!! po bloku - sukurs ir ides teksta "header"

// 5. su jQury   'footer h4' ideti virs 'header'
$('footer h4').insertBefore( 'header');


// UZDUOTYS
// 1. uzdeti klase 'bg-info' ant visu h4
$('h4').addClass( 'bg-info' );
// $('h4').toggleClass( 'bg-info' );

// 2. uzdeti klase bg-warning ant 'header'
$('header').addClass( 'bg-warning' );
// 3. uzdeti atributa 'width=30%' ant 'header'
$('header').attr(  'width', '30%');

// 4. nuimti klase bg-warning nuo 'header'
$('header').removeClass( 'bg-warning' );

//
