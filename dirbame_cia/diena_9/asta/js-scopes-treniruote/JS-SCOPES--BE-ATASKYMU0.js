console.log("labas");

let x = 10;

function suma () {
    let x = 20;
}

console.log( x );
suma();
console.log( x );

x = 10;
function suma2 () {
      x = 20;
}
console.log( x );
suma2();
console.log( x );
//-----------------
x = 10;
function suma3 (x) { //
      x = 20;  //
}
console.log( x );
suma3(30);
console.log( x );
//-----------------
x = 10;
function suma4 (x) {  
      console.log( x );
      x = 20;
      console.log( x );
}
console.log( x );
suma4( x );
console.log( x );
//-----------------
x = 10;
function suma5 () {
      let x = 20;    //
      console.log( this.x );
      this.x = 30;
      console.log( x );
}
suma5(  );
console.log( x );
//----------sunki-------
x = 10;
function suma6 ( y = 0) {
    x = y;
}
suma6(  );
console.log( x );
suma6( 20 );
console.log( x );
//---------- -------
x = 10;
function suma9 ( x = 0) {
      console.log( x );
}
suma9(  );
suma9( 20 );
//----------sunki-------
x = 10;
function suma7 ( x = 0) {
      this.x = x;
      console.log( x );
}
console.log( x );
suma7( 20 );
console.log( x );
