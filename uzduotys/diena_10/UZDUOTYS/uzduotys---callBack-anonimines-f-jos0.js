
// UZDUOTIS 1:
// SUKURTI DVI F-JAS:
// viena pasisveikina "sveikinuosi()"
// kita atsisveikina "atsisveikinu()"

// UZDUOTIS 1.1
// patobulinti f-ja, kuri sveikinasi, kad ji papildoma argumenta "callback"  / "iskviestiPabaigusDarbus"

// UZDUOTIS 1.2
// iskviesti pasisveikinimo f-ja, ir jai padduoti atsisveikino f-ja



// pvz: prisiminkime
function test(x, y) {
    console.log( x );
    console.log( y );
}
test("Tomas", 10);
test("Antanas", 20);

//==============
// f-jos sukurimas
var pasisveikinti = function() {
    console.log("Sveiki");
}
//f-jos paleidimas
pasisveikinti();
// =============callback
function dirbu(x, y) {
    console.log( "Sinadine dirba: " + x );
     y();
}
var susitvarkyti = function()  {
    console.log("Jau susitvarkiau");
}
dirbu("Tomas", susitvarkyti);
//==============
