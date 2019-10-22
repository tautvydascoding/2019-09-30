console.log("labas");


let i = 0;
let tekstas = "";

// 1. ka isves i consol?
for ( i = 1; i < 5; i++) {
    console.log("Karolis"); // 4x kart
}

// 1.2 ka isves i consol?
for ( i = 1; i < 5; i++) {
    tekstas = "Karolis2";
}
console.log(tekstas); // 1 x Karolis2

// 2. ka isves i consol?
for ( i = 5; i < 0; i--) {
    console.log("Antanas");  // 6x   begalinis  neivieno  => ats: nei vieno
}

// 2.2 ka isves i consol?
for ( i = 5; i > 0; i--) {
    console.log("Antanas2");   // 5x Antanas2
}

// 3 ka isves i consol?
for ( i = 0; i < 5; i+=2) {
    console.log("Sonata");  //   0, 2, 4 = 3x
}

// 4 ka isves i consol?
for ( i = 0, k = 0; i < 5; i++) {
    console.log("Romanas" + k);  // 5x  "Romanas0"
}

// 4.2 ka isves i consol?
for ( i = 0, k = 0; i > 5; i++, k+=5) {
    console.log("Romanas" + k);    // nieko
}

// 11.1 ka isves i consol?
for ( i = 0 ; i < 5; i++ ) {
    tekstas = "Mazvydas2 ";
}
console.log(tekstas);   // 1x


// 11.2 ka isves i consol?
for ( i = 0 ; i < 5; i++ ) {
    break;
    tekstas += "Zivile ";
}
console.log(tekstas);  // nieko

// 5 ka isves i consol?
for ( i = 0 ; i < 5; i++ ) {
    // nieko
}
console.log(i);   // 5


// 7.1 ka isves i console
i = 0;
while( i != 4 ) {
    i++;
    console.log("ruškana");  // 4x
}

// 7.2 ka isves i console
while( true ) {
    break;
    console.log("uraganas"); // niekada
}

// 7.3 ka isves i console
do {
    console.log("saulelydis");   // 1x
} while ( 5 != 5)


// 8.1 ka isves i consol?
for ( i = 0 ; i < 5; i++ ) {
    tekstas += "Mazvydas "
}
console.log(tekstas);  //   "Mazvydas Mazvydas Mazvydas Mazvydas Mazvydas "

// 8.3 ka isves i consol?
for ( i = 0 ; i < 5; i++ ) {
    if (i == 3) {
        break;
    }
    tekstas += "Povilas "
}
console.log(tekstas); // "Povilas ""Povilas ""Povilas "

// 8.4 ka isves i consol?
for ( i = 0 ; i < 3; i++ ) {
    if (i == 1) {
        continue;
    }
    tekstas += "Povilas "
}
console.log(tekstas); // 2x Povilas


// 9.1 ka isves i consol?
for ( i = 0 ; i < 2; i++ ) {
    console.log("lyja");
    for ( k = 0 ; k < 3; k++ ) {
        console.log("sninga");
    }
}
// lyja sninga sninga sninga ,  lyja sninga sninga sninga

// 9.2 ka isves i consol?
for ( i = 0 ; i < 3; i++ ) {
    console.log("sauleta");
    for ( k = 0 ; k < 2; k++ ) {
        // nieko
    }
} // sauleta sauleta sauleta

// 9.3 ka isves i consol?
for ( i = 0 ; i < 3; i++ ) {
    for ( k = 0 ; k < 2; k++ ) {
        console.log("vejuota");
    }
} // vejuota vejuota,   vejuota vejuota,   vejuota vejuota

// ----------------------f-jos---------------
let kk = function() {
    console.log("Juodas");
}
function isveskTeksta(x, y) {
    console.log(x);
    y();
}
isveskTeksta('baltas', kk ); // baltas juodas
