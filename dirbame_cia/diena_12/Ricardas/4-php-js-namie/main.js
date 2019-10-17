// 1. su js  pakeisti 'header' H1 teksta i " Pakeistas su js"
$('header>h1').text('pakeistas su js');
// 2. su jQury  pakeisti 'footer' H2 teksta i " Pakeistas su JQ"
$('footer>h2').text('pakeista su JQ');
// 3. su jQuery paimti  'footer' h1 tekta ir atspausdinti i console
console.log($('footer>h1').text());

// UZDUOTYS
// 1. su jQury    sukurti elementa 'section' su tekstu 'mano tekstas'
$('body').append('<section>mano tekstas</section>');
// 2. su jQury   elementa 'section' ideti i HTML faila su jquery tarp 
//'header' ir 'footer'
$('header').after($('section'));

// UZDUOTYS
// 1. uzdeti klase 'bg-info' ant visu h4
$('footer>h4').addClass('bg-info');
// 2. uzdeti klase bg-warning ant 'header'
$('header').addClass('bg-warning');
// 3. uzdeti atributa 'width=30%' ant 'header'
$('header').attr('width', '30%');