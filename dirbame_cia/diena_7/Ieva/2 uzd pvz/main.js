console.log("labas, as krabas");

function printNameToConsole() {
    // console.log('veikiu'); - testas
    //1.surast ivedimo lauka
    let inputPlace = document.querySelector('div input');
    //console.log(inputPlace); - testas
    //2. paimt is jo veiksma
    let ivedimoLaukoReiksme = document.querySelector('div input').value;
    //console.log(ivedimoLaukoReiksme); - testas
    //3. isvesti i console
    console.log(ivedimoLaukoReiksme);
}