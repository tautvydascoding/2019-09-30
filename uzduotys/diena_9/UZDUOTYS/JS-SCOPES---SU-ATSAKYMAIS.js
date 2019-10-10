console.log("labas");

let x = 10;

function suma () {
    let x = 20;
}

console.log( x );  // 10
suma();
console.log( x );  // 10

x = 10;
function suma2 () {
      x = 20;  // global
}
console.log( x );  //  10
suma2();
console.log( x );  // 20
//-----------------
x = 10;
function suma3 (x) { // local
      x = 20;  //  local
}
console.log( x );  // 10
suma3(30);
console.log( x );  //  10
//-----------------
x = 10;
function suma4 (x) { // let x - local
      console.log( x );  //  10
      x = 20;
      console.log( x );  // 20
}
console.log( x );  //  10
suma4( x );
console.log( x );  // 10
//-----------------
x = 10;
function suma5 () {
      let x = 20;    // local
      console.log( this.x );  //  10
      this.x = 30;  // global
      console.log( x );  //  20
}
suma5(  );
console.log( x );  //  30
//----------sunki-------
x = 10;
function suma6 ( y = 0) { // local , nes let y=0;
    x = y;
}
suma6(  );
console.log( x );  //  0
suma6( 20 );
console.log( x );  //  20
//---------- -------
x = 10;
function suma9 ( x = 0) {
      console.log( x );  //  pirma karta 0, antra karta 20
}
suma9(  );
suma9( 20 );
//----------sunki-------
x = 10;
function suma7 ( x = 0) {// local nes: let x = 0
      this.x = x;        //  global
      console.log( x );  //  20
}
console.log( x );  //  10
suma7( 20 );
console.log( x );  //  20
