// let x = 10;

// function suma () {
//     let x = 20;
// }

// console.log( x ); // 10
// suma();
// console.log( x ); // 10

// x = 10;
// function suma2 () {
//       x = 20;
// }
// console.log( x ); // 10
// suma2();
// console.log( x ); // 20 globalus
// // //-----------------
// x = 10;
// function suma3 (x) {
//       x = 20;
// }
// console.log( x ); // 10
// suma3(30);
// console.log( x ); // 10 nesikeicia globalus, nes issaukia
// // //-----------------
// x = 10;
// function suma4 (x) {
//       console.log( x );
//       x = 20;
//       console.log( x );
// }
// console.log( x ); // 10
// suma4( x ); // 10 ir 20
// console.log( x ); //10
// // //-----------------
// x = 10;
// function suma5 () {
//       let x = 20; 
//       console.log( this.x );
//       this.x = 30;
//       console.log( x );
// }
// suma5(  ); // ???
// console.log( x ); // 10
// // //----------sunki-------
// x = 10;
// function suma6 ( y = 0) {
//     x = y;
// }
// suma6(  );
// console.log( x ); // 0 
// suma6( 20 );
// console.log( x ); // 20
// //---------- -------
// x = 10;
// function suma9 ( x = 0) {
//       console.log( x );
// }
// suma9(  ); // 0
// suma9( 20 ); // 20
// // //----------sunki-------
// x = 10;
// function suma7 ( x = 0) {
//       this.x = x;
//       console.log( x );
// }
// console.log( x ); // 10
// suma7( 20 ); // 20
// console.log( x ); // 20


//////////////////////////////////////////////////////////////////////////////////////////////////////////

// sukurti f-ja getData(masyvas, x), kuri grazina is masyvo "masyvas" "x" stalciaus duomenis
// sukurti f-ja rikiuojaDid(masyvas), kuri grazina surikiuota masyva dedejimo tvarka
// sukurti f-ja rikiuojaMaz(masyvas), kuri grazina surikiuota masyva mazejimo tvarka
// sukurti f-ja rastiKiekElementaiPasiakrtoja(masyvas), to find the most frequent item of an array
// sukurti f-ja kuri pasalina besikartojancias reiksmes (remove duplicate items from an array )

let masyv = [36, 82, 79, 51, 20, 36, 53, 59, 29, 74, 96, 51, 94, 62, 63, 45, 14, 62, 91, 15, 76, 67, 91, 76,
     46, 77, 96, 41, 89, 82, 25, 54, 1, 36, 49, 54, 82, 5, 59, 29, 33, 33, 81, 75, 96, 0, 47, 24, 43, 60];

function getData(masyvas, x) {
    for(var i = 0; i < masyvas.length; i++) {
        if(i === x) {
            console.log(masyvas[i]);
        }
    }
}

getData(masyv, 20);

function rikiuojaDid(masyvas) {
    masyvas.sort(function(a, b){return a - b});
}

rikiuojaDid(masyv);

console.log(masyv);

// function rastKiekElPasikartoja(masyvas) {
//     let mf = 1;
//     let m = 0;
//     let item;
//     for(var i = 0; i < masyv.length; i++){
//         for(var j = i; j < masyv.length; j++) {
//             if(masyv[i] === masyv[j]) {
//                 m++;
//             } if(mf < m) {
//                 mf = m;
//                 item = masyv[i];
//             }
//         }
//     }
//     m = 0;
//     console.log(item + '(' + mf + ' times )');
// }

// rastKiekElPasikartoja(masyv);

// let unikalus = new Set(masyv);

// console.log([...unikalus]);

console.log(...new Set(masyv));
