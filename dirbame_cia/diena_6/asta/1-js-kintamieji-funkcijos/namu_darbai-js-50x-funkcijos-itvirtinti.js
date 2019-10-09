
// UZDUOTIS =======ismokti f-jas 50x===============
// Aptrasymas) sukurti 30 getVardas ir 30 setVardas(x) f-ju. Jas iskviesti eiles tvarka "maisant" poruojant pvz:
// setVardas1("Antanas");
// getVardas1();
// setVardas2("Juozas");
// getVardas2();
// A) sukurti (gloabalu) kintamaji pvz:
//      var vardas =  "Tomas";
// B) sukurti 20-30 f-ju:  getVardas1(), getVardas2(), getVardas3(), ...getVardas30()
// kurios  turi "return" ir iskvietus f-ja ji  grazina varda ir prideti skaiciu salia  pvz: "Tomas1", Antanas22, Juozas33
// B) sukurti 20-30 f-ju:   setVardas1(name), setVardas2(name), ... setVardas30(name),...
// kurios   turi pakeisti varda ir prideti skaiciu salia
// C) visas f-jas iskviesti
// pvz.:
var vardai = "Tomas";
// 1
function setVardas1(name) {
   vardai = name + "1";
}
setVardas1("Tomas"); // sugalvoti vis kita zodi

function getVardas1() {
  return vardai + "1";
}
var x = getVardas1();   // arba  console.log(  getVardas1() );
console.log(  x );     // isveda: Tomas11

// 2 ------------
function setVardas2(name) {
    vardai = name + "2";
}
setVardas2("antanas"); // sugalvoti vis kita zodi

function getVardas2() {
    return vardai + "2";
}
x =  getVardas2();
console.log(  x );  // isveda: antanas22

// 3---------------------
function setVardas3(name) {
    vardai = name + "3";
}
setVardas3("juozas");            // sugalvoti vis kita zodi

function getVardas3(){
    return vardai + 3;
}
x =  getVardas3();
console.log(  x );  // isveda: juozas33

//4----------------------------------
function setVardas4(name) {
  vardai = name +'4';
}
setVardas4('Petras');

function getVardas4(){
  return vardai + '4';
}
console.log(getVardas4());
//5-------------------------------
function setVardas5(name) {
  vardai = name + '5';
}
setVardas5('Motiejus');

function getVardas5(){
return vardai + '5';
}
console.log(getVardas5());
//6----------------------------------
function setVardas6(name){
  vardai = name + '6';
}
setVardas6('Kristupas');
function getVardas6(){
  return vardai + '6';
}
console.log(getVardas6());
//7----------------------------------
function setVardas7(name){
  vardai = name + '7'
}
setVardas7('Vladas');
function getVardas7(){
  return vardai + '7';
}
console.log(getVardas7());

//-----------------------------------
let alga = 500;
let pavarde = "Pietkus";
function getPavarde(){
  return pavarde;
}
console.log(getPavarde());

//--------------------------------------------
document.write("Mano tekstas su js");

//--------------------------------------------
//document.querySelector('h2').innerHTML = "uz lango sninga, kad ir kaip keista";
// sukurti f-ja, kuri i ekrana isveda “<h2> uz lango singa, kad ir kai pkeista </h2>”
function antrastesKeitimas(naujiena){
tekstas = naujiena;
return tekstas;
}
antrastesKeitimas("uz lango sninga, kad ir kaip keista");
document.querySelector('h2').innerHTML = tekstas;



//var aukstis = document.getElementById('manoDiv').offsetHeight;

console.log(document.querySelector('section').clientHeight);
