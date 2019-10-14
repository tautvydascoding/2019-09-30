console.log("labas");

// $('h1').hide(3000);

function patikrintiIvedimoLauka() {
  let t = $('#paieska').val();
  console.log('ivedet:' + t);
  if (t.length == 0) {
    $('#paieska').css('background-color','orange');
    $('h1').text('ivesk');
} else {
    $('#paieska').css('background-color','white');
  }
}
