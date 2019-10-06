
// UZDUOTIS
// CSS faile, sukurti  kintamauosius:
//  --aukstis
// --fono-splava
 

// :root {
// --transition-type: padding-left 250ms ease-out; 
// --font-stack: Cambria, Georgia, "Times New Roman", serif; 
// --h3-color: teal;
// --h3-size: 5px; 
// }

// 1.2 jiems priskirt reiksmes
// 1.3 html gaile sukurti H1 elementa ir CSS faile h1 uzdeti fono spalva panaudojant kintamaji, 
// ir uzdeti aukstis - panaudojant "aukstis" kintamaji
// pvz:
// article  {
//   color: var(--h1-color);
//   font-size: var(--h1-size);
// }
// 2. javascript faile, paimti CSS  kintamuju reiksmes ir isvesti i consle: pvz:


var allstyles = getComputedStyle(document.documentElement);
var varval = string(allstyles.getPropertyValue("--kintamasis"));
var aukstis = varval.trim();
consle.log( "aukstis: " , aukstis);
//arba

var atlyginimas2 = string( getComputedStyle(document.documentElement).getPropertyValue("--kintamasis"))).trim();
consle.log( "atlyginimas2: " , atlyginimas2);
// 2.2) su js pakeisti css kintamojo reiksme:
document.documentElement.style.setProperty("--kintamasis", "1200");
// 2.3 su insect element patikrinti ar pavyko