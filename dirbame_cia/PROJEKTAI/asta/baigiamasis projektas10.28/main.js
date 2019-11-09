console.log("labas");
//$('h1').hide(0);
$('.btn').hide(0);
//$('h2').fadeIn(5000);
// $('h1').slideDown(2000);
// $('h1').show(500); //mili sekundes
$('.btn').show(1000);
 //$('p').slideDown(3000);  // mili sekundes
//$('h1').fadeIn(15000);
//$('h2').hide(0);
//document.querySelector('p').innerHTML = " <b>Akvilė Garbenčiūtė</b>";
//
function rusiuotisarasa(evt, sarasas) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
