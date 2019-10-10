// atitikmenu paieska pagal salyga String viduje
// jei radome grazina: atitikmeni kurio ieskojome pvz: 'Tadas'
// jei neradome grazina: null
var regexSalyga = /[a-zA-Z]{3}/;     // advance: ne [], ne {}, o regular expresion
var test1 = regexSalyga.exec('cdb');
var test2 = regexSalyga.exec('111');
var test3 = regexSalyga.exec('cdbsafsdfsd');
var test4 = regexSalyga.exec('aaacdb');
console.log( 'test1: ' + test1);
console.log( 'test2: ' + test2);
console.log( 'test3: ' + test3);
