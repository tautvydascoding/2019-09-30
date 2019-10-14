console.log("labas");

// $('h1').hide(3000);  // mili sekundes

function patikrinkIvedimoLauka() {
    var t = $('#paieska').val(); // ivesta teksta paiimam is ivedimo lauko #paieska
    // console.log('ivedet:' + t);  //test
    // ar neivede teksto
    if (t.length == 0) {
        $('#paieska').css('background-color', 'orange');
        $('h1').text('Iveskite kazka i paieska....');
    } else {
        $('#paieska').css('background-color', 'white');
    }
}



var elm = $("h2").eq(0);   // eq -  return the jquery selector
var elm2 = $("h2")[0];     // [0] - return the DOM element
console.log("eq(): " ,  elm);
console.log("[0]: " ,  elm2);
