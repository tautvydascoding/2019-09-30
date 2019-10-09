let valIkainis = 10;
let vPovilas = 160;
let vAntanas = 80;
let vTomas = 100;
let imonesPajamos = 20000;
let kitosImonesIslaidos = 3400;

function darbuotojoAtlyginimas(x) {
    return valIkainis * x;
}

vPovilas = document.querySelector('h2').innerHTML = darbuotojoAtlyginimas(vPovilas); 
vAntanas = document.querySelector('h2').innerHTML = darbuotojoAtlyginimas(vAntanas);
vTomas = document.querySelector('h2').innerHTML = darbuotojoAtlyginimas(vTomas);

function imonesPelnas() {
    return imonesPajamos - kitosImonesIslaidos - vPovilas - vAntanas - vTomas;
}

console.log(imonesPelnas());