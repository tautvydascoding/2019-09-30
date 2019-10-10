let prekiautojai = ['senukai', 'mokiVezi', 'ermitazas', 'elektromarkt'];

prekiautojai[1] = "ir KO" 
//prekiautojai[1] += "ir KO"

console.log(prekiautojai);

let prekiautojait = prekiautojai[3];
prekiautojai[3] = prekiautojai[2];
prekiautojai[2] = prekiautojait;

console.log(prekiautojai);

function sukeistiMasyvo2elementus(x, y) {
    let prekiautojait = prekiautojai[y];
    prekiautojai[y] = prekiautojai[x];
    prekiautojai[x] = prekiautojait;
}

sukeistiMasyvo2elementus(1, 2);
console.log(prekiautojai);