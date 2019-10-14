console.log("labas");
console.log("labas");

let x = 10;

function suma () {
    let x = 20;
}

console.log( x );//10
suma();
console.log( x );//10

x = 10;
function suma2 () {
      x = 20;
}
console.log( x );//10
suma2();
console.log( x );//20
//-----------------
x = 10;
function suma3 (x) { //
      x = 20;  //
}
console.log( x );//10
suma3(30);
console.log( x );//10
//-----------------
x = 10;
function suma4 (x) {
      console.log( x );//10
      x = 20;
      console.log( x );//20????
}
console.log( x );//10
suma4( x );
console.log( x );//10
//-----------------
x = 10;
function suma5 () {
      let x = 20;    //
      console.log( this.x );//10
      this.x = 30;
      console.log( x );//20
}
suma5(  );
console.log( x );//30
//----------sunki-------
x = 10;
function suma6 ( y = 0) {
    x = y;
}
suma6(  );
console.log( x );//0
suma6( 20 );
console.log( x );//20
//---------- -------
x = 10;
function suma9 ( x = 0) {
      console.log( x );//0
}
suma9(  );
suma9( 20 );//20
//----------sunki-------
x = 10;
function suma7 ( x = 0) {
      this.x = x;
      console.log( x );//20
}
console.log( x );//10
suma7( 20 );
console.log( x );//20
