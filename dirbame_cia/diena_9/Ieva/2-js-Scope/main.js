console.log("labas, la la");



// ====================Scope====================
// //   UZDUOTIS  A
// // sukurti funkcija "printDuomenys()" ,
// // funkcijoje sukurti kintamaji: var vardas = "Tomas"
// // kuri  atspausdina i konsole  kintamaji "vardas"
// // iskviesti f-ja

// function printDuomenys() {
//     var vardas = "Tomas";
//     console.log(vardas);
// }

// printDuomenys()

// //   UZDUOTIS  B
// //  dabar, pabandykite po f-ja (uz jos ribu) i konsole atspausdinti kintamaji "vardas"
// //  console.log( vardas) ;
// // NOTE: gausite klaida ""is not defined""

// // console.log( vardas) ;

// //================local && global=========
// // var x = "x -viesas ";   // global

// // function testLocalVar() {
// //    var y = "y -vietinis ";  // local
// //    z = "z -viesas";        // global // nereiketu taip daryti
// //    console.log("x", x);
// //    console.log("y", y);
// //    console.log("z", z);
// // }

// // testLocalVar();
// // console.log("x", x);
// // console.log("z", z);
// // console.log("y", y);  // error - 1)   nes sukurtas f-jos viduje 2) sukurtas su "var"

// //------
//  // UZDUOTIS // UZDUOTIS
//  // A) sukurti kintamaji var katinas = "juodas"
//  // B) sukurti f-ja
//  // C) sukurti f-jos viduje kintamaji var katinas = "baltas"
//  // D) atspauzdinti abu f-jos viduje
//  // E) atspauzdinti  uz f-jos

// // var katinas = "juodas";

// // console.log(katinas);

// // function bandomScope() {
// //      var katinas = "baltas";
// //     console.log(katinas);
// //     }

// // console.log(katinas);

// // bandomScope();

// // console.log(katinas);



//  var katinas = "juodas";   //global
 
//  function test2() {
//      var katinas = "baltas";  // local
//     console.log("1 katinas:", katinas);
//     console.log("2 this.katinas - f-jos viduje: ",  this.katinas);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
//  }
//  test2();
 
//  console.log("3 katinas:", katinas);

// //==========================

//  var xx = 10; // global
 
//  function isvesti( xx ) {  // xx - (local) naujas issigalvotas LAIKINAS  kintamasis
//      xx = 20;  // local
//      console.log( "1. xx:", xx);
//      console.log( "2. this.xx:",   this.xx);
//  }
//  isvesti(999);
//  console.log( "3. xx:", xx);


 //======================
 // var vardas = "Jonas";   // global - kintamasis
 // function myName ( vardas ) { //  vardas - local kintamasis
 //     console.log( " vardas" + vardas);
 //     console.log("this.vardas - f-jos viduje: ",  this.vardas);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
 // }
 // myName("PETRAS");
//======================TEKSTO ISVEDIMAS===============


//  1.1 UZDUOTIS
//  sukurti funkcija "printAntraste(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas antrastes:  "BMW pinga, nes daugeja", "Greik pageres orai", "Vasaros vis salteja"

//  1.2 UZDUOTIS
//  sukurti funkcija "printStraipsnis(x)"
//  kuri atspausdina i DOM-a (ekrana) "<p>" + x + "</p>" (paduota teksta tarp "p")

//  1.3 UZDUOTIS
//  iskviesti f-jaS 3 kartus, kad atspausdintu 3 skirtingas antrastes IR 3 straipnsnius:  "Lorem1 ....",   "Lorem2 ....",   "Lorem3 ....",


//=======================================


// let x = 20;

// console.log( '20', x ); 

// function suma () {
//     let x = 20;
// }

// console.log( '20', x ); 

// suma();

// console.log( '20', x ); 

// function suma2 () {
//       x = 20;
// }

// x = 10;

// console.log('10', x );

// suma2();

// console.log('20', x );

// function suma3 (x) { //
//       x = 20;  //
// }

// suma3(30);

// console.log('20', x ); // x yra 20

// function suma4 (x) {
//       console.log('20', x );
//       x = 50;
//       console.log('50', x );
// }

// console.log( '20', x );

// suma4( x );

// console.log('20',  x ); // vis dar 20

// x = 10;

// function suma5 () {
//       let x = 60;    //
//       console.log( '10', this.x);
//       this.x = 90;
//       console.log('60', x );
// }


// suma5(); // 0

// console.log('90', x );

// function suma6 ( y = 0) {
//    x = y;
// }

// suma6( 70 );

// console.log('70', x );

// suma6( 30 );

// console.log('30', x ); // 30

// function suma9 ( x = 0) {
//       console.log('0,10', x );
// }
// suma9(  );
// suma9( 10 );

// console.log('30', x);


// //----------sunki-------
// x = 10;
// function suma6 ( y = 0) {
//    x = y;
// }

// suma6( 20 );
// console.log('20', x );
// suma6( 30 );
// console.log('30', x );
// //---------- -------
// x = 10;
// function suma9 ( x = 0) {
//       console.log('0,20', x );
// }
// suma9(  );
// suma9( 20 );

// console.log('10', x);

// //----------sunki-------
// x = 20;
// function suma7 ( x = 0) {
//       this.x = x;
//       console.log('16', x );
// }
// console.log('20', x );

// suma7( 16 );

// console.log('16', x );

////////////////////////////////////////////////////////////////////////////

// 

// console.log("labas");

let x = 10;

function suma () {
    let x = 20;
}

console.log('10', x ); //
suma();
console.log('10', x ); //

x = 10;
function suma2 () {
      x = 20;
}
console.log('10', x );
suma2();
console.log('20', x );
//-----------------
// x = 10;
// function suma3 (x) { //
//       x = 20;  //
// }
// console.log('10', x );
// suma3(30);
// console.log('10', x );
// //-----------------
// x = 10;
// function suma4 (x) {
//       console.log('10', x );
//       x = 20;
//       console.log('20', x );
// }
// console.log('10', x );
// suma4( x );
// console.log('10', x );
//-----------------
// x = 10;
// function suma5 () {
//       let x = 20;    //
//       console.log('10', this.x );
//       this.x = 30;
//       console.log('20', x );
// }
// suma5(  );
// console.log('30', x );
// //----------sunki-------
// x = 10;
// function suma6 ( y = 0) {
//     x = y;
// }
// suma6(  );
// console.log('0', x );
// suma6( 20 );
// console.log('20', x );
//---------- -------
// x = 10;
// function suma9 ( x = 0) {
//       console.log('0,20', x );
// }
// suma9(  );
// suma9( 20 );
//----------sunki-------
// x = 10;
// function suma7 ( x = 0) {
//       this.x = x;
//       console.log('20', x );
// }
// console.log('10', x );
// suma7( 20 );
// console.log('20', x );


