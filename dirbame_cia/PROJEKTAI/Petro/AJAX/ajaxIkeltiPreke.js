function ikeltiPreke(){

console.log("ar veikia!!!?");
    //PAIMU REIKSMES IS IVEDAMOS PREKES IVEDIMO LAUKU faile admin.php
    let ivestaKategorija = document.querySelector('#kategorija').value;
    let ivestasPavadinimas = document.querySelector('#pavadinimas').value;
    let ivestasAprasymas = document.querySelector('#aprasymas').value;
    let ivestasKaina = document.querySelector('#kaina').value;
    let ivestasNuolaida = document.querySelector('#nuolaida').value;
    let ivestasPozicija = document.querySelector('#pozicija').value;
    let ivestasKiekis = document.querySelector('#kiekis').value;
    let ivestasImg_small = document.querySelector('#img_small').value;
    let ivestasImg_big = document.querySelector('#img_big').value;


    // console.log(ivedamaReiksme);
$.ajax({
  url: "AJAX/ikelti.php",
  type: "POST",
  data: {kategorija: ivestaKategorija, pavadinimas: ivestasPavadinimas, aprasymas: ivestasAprasymas,
      kaina: ivestasKaina, nuolaida:ivestasNuolaida, pozicija: ivestasPozicija, kiekis: ivestasKiekis,
      img_small: ivestasImg_small, img_big:ivestasImg_big },
  success: function(a){
        console.log("lyg suveike");
        // console.log(rez);
      $("#results").append("Ikelti preke pavyko");
        // =======jei PHP darot: echo "String";================
        // gryzoPaverstasIString = JSON.stringify(gryzo);
        // console.log(gryzoPaverstasIString);
        // $("#results").append(gryzoPaverstasIString.vardas);
                /* OR */
        //====== jei PHP darot: echo parseTOJSON( $manoAray);====
  //       gryzoPaverstasIJSON = JSON.parse(rez);
  //       console.log(gryzoPaverstasIJSON);
  //       //this is what I am unsure about?
  //        $("#results").append(gryzoPaverstasIJSON.vardas);
  },

  error: function(e) {
       //called when there is an error
       //console.log(e.message);
       $("#results").append( "Nepavyko ikelti prekės: " + e );
       console.log("NESUVEIKE!@@@");
 }
});
}