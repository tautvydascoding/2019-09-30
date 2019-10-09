console.log("labas");

function isveduIconsole() {
    // console.log("veikius");  // test

    // 1. surasti ivedimo lauka  (HTML elmenta)
    let ivedimoLaukas = document.querySelector('div input');
    console.log( ivedimoLaukas  ); // test

    // 2. paimti is ivedimo lauko ivesta reiksme
    let ivedimoLaukoReiksme = document.querySelector('div input').value;

    // 3. isvesti reiksme
    console.log( ivedimoLaukoReiksme  ); // test
}
