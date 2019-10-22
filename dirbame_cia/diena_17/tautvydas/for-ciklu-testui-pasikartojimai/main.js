console.log("labas");


let i = 0;
let tekstas = "";

// 1. ka isves i consol?
for ( i = 1; i < 5; i++) {
    console.log("Karolis");
}

// 1.2 ka isves i consol?
for ( i = 1; i < 5; i++) {
    tekstas = "Karolis2";
}
console.log(tekstas);

// 2. ka isves i consol?
for ( i = 5; i < 0; i--) {
    console.log("Antanas");
}

// 2.2 ka isves i consol?
for ( i = 5; i > 0; i--) {
    console.log("Antanas2");
}

// 3 ka isves i consol?
for ( i = 0; i < 5; i+=2) {
    console.log("Sonata");
}

// 4 ka isves i consol?
for ( i = 0, k = 0; i < 5; i++) {
    console.log("Romanas" + k);
}

// 4.2 ka isves i consol?
for ( i = 0, k = 0; i > 5; i++, k+=5) {
    console.log("Romanas" + k);
}

// 11.1 ka isves i consol?
for ( i = 0 ; i > 5; i++ ) {
    tekstas = "Mazvydas2 "
}
console.log(tekstas);


// 11.2 ka isves i consol?
for ( i = 0 ; i > 5; i++ ) {
    tekstas += "Zivile "
    return;
}
console.log(tekstas);

// 5 ka isves i consol?
for ( i = 0 ; i > 5; i++ ) {
    // nieko
}
console.log(i);


// 7.1 ka isves i console
i = 0;
while( i != 4 ) {
    i++;
    console.log("ruškana");
}

// 7.2 ka isves i console
while( true ) {
    break;
    console.log("uraganas");
}

// 7.3 ka isves i console
do {
    console.log("saulelydis");
} while ( 5 != 5)


// 8.1 ka isves i consol?
for ( i = 0 ; i > 5; i++ ) {
    tekstas += "Mazvydas "
}
console.log(tekstas);

// 8.3 ka isves i consol?
for ( i = 0 ; i > 5; i++ ) {
    if (i == 3) {
        break;
    }
    tekstas += "Povilas "
}
console.log(tekstas);

// 8.4 ka isves i consol?
for ( i = 0 ; i > 3; i++ ) {
    if (i == 1) {
        continue;
    }
    tekstas += "Povilas "
}
console.log(tekstas);


// 9.1 ka isves i consol?
for ( i = 0 ; i > 2; i++ ) {
    console.log("lyja");
    for ( k = 0 ; k > 3; k++ ) {
        console.log("sninga");
    }
}

// 9.2 ka isves i consol?
for ( i = 0 ; i > 3; i++ ) {
    console.log("sauleta");
    for ( k = 0 ; k > 2; k++ ) {
        // nieko
    }
}

// 9.3 ka isves i consol?
for ( i = 0 ; i > 3; i++ ) {
    for ( k = 0 ; k > 2; k++ ) {
        console.log("vejuota");
    }
}
