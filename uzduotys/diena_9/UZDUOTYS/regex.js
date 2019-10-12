// atitikmenu paieska pagal salyga String viduje
// jei radome grazina: atitikmeni kurio ieskojome pvz: 'Tadas'
// jei neradome grazina: null
var regexSalyga = /^[a-zA-Z]{3}$/;     // advance: ne [], ne {}, o regular expresion

var test1 = regexSalyga.exec('info@arklys.lt');
var test2 = regexSalyga.exec('111');
var test3 = regexSalyga.exec('cdbsafsdf sd  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' );
var test4 = regexSalyga.exec('aaacdb');
console.log( 'test1: ' + test1);
console.log( 'test2: ' + test2);
console.log( 'test3: ' + test3);
console.log( 'test4: ' + test4);
