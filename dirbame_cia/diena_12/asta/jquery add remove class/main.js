console.log("labas");

// $('h1').hide(3000);  // mili sekundes

//1.2 patobulinti h1 -  ant h1 elemento uzdesime klases: " bg-info  mt-5 aukstis-200" (naudojant jQuery)
$("h1").addClass(" bg-info mt-5 aukstis-200");
// pvz:
//   <h1 class="bg-info mt-5 aukstis-200">  Tekstas </h1>

// 1.3  nuo h1 pasalinti mt-5 klase
$( "h1" ).removeClass( "mt-5" );
// 1.4  paleisti komanda   toggleClass( 'aukstis-200')  -
$("h1").toggleClass('aukstis-200');
// 1.5  vel paleisti komanda   toggleClass( 'aukstis-200')  -
$("h1").toggleClass('aukstis-200');
// KAS pasikeite?

// 2. Patikrinti ar h1 turi klase 'bg-info':
$('h1').hasClass('bg-info');
// jeigu NETURI  uzdeti klase "bg-success"
// jeigu TURI  uzdeti klase "bg-danger"
if ($('h1').hasClass('bg-info')){
  $("h1").addClass('bg-danger')
} else {
  $("h1").addClass('bg-success')
}
// 3. Patikrinti ar 'section' turi klase 'aukstis-200':
// jeigu NETURI  uzdeti klase "aukstis-200"
// jeigu TURI  uzdeti klase "aukstis-500"
if ($('h1').hasClass('aukstis-200')){
  $("h1").addClass('aukstis-500')
} else {
  $("h1").addClass('aukstis-200')
}


// UZDUOTIS
// 1.0
// kaip perkelti klase 'h3' po 'h4'
$( "h3" ).insertAfter( $( "h4" ) );
// 1.1
// kaip perkelti klase 'reklama' virs 'section'
$( ".reklama" ).insertBefore( "section" );
// 1.2
// kaip perkelti 'h3' po 'div'
$( "h3" ).insertAfter( $( "div" ) );
// 1.3
// kaip perkelti 'h4' i  'nav' vidu
$( "nav" ).append(  $( "h4" ));
// 1.4
// kaip perkelti 'h5'  virs  'article'
$( "h5" ).insertBefore( "article" );
// 1.5
// kaip perkelti 'section'  po  'article'
$( "section" ).insertAfter(  "article"  );


//
