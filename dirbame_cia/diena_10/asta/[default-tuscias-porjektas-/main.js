console.log("labas");
$('h1').hide(3000); //mili sekundes

function patikrinkIvedimoLauka(){
  var t = $('#paieska').val();  //val=value teksta paima is iivedimo lauko
    console.log('neveikia');
  //  $('#paieska').css('background-color', 'orange');
  if (t.length == 0){
    console.log(t);
    $('#paieska').css('background-color', 'orange');
    $('h1').text('iveskite kazka');
  }
  }

  console.log('veikia');
