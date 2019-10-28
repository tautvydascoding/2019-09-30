function istrintiPreke(){

console.log("ar veikia!!!?");
    //PAIMU REIKSMES IS IVEDAMOS PREKES IVEDIMO LAUKU faile admin.php
    let ivestasId = document.querySelector('#id').value;

    console.log(ivestasId);


$.ajax({
  url: "AJAX/istrinti.php",
  type: "POST",
  data: {id:ivestasId},
  success: function(rez){
        console.log("lyg suveike");
        // console.log(rez);
      $("#resultsIstrinti").append("Istrinti preke pavyko");
        // =======jei PHP darot: echo "String";================
        // gryzoPaverstasIString = JSON.stringify(gryzo);
        // console.log(gryzoPaverstasIString);
        // $("#results").append(gryzoPaverstasIString.vardas);
                /* OR */
        //====== jei PHP darot: echo parseTOJSON( $manoAray);====
        gryzoPaverstasIJSON = JSON.parse(rez);
        console.log(gryzoPaverstasIJSON);
  //       //this is what I am unsure about?
  //        $("#results").append(gryzoPaverstasIJSON.vardas);
  },

  error: function(e) {
       //called when there is an error
       //console.log(e.message);
       $("#resultsIstrinti").append( "Nepavyko istrinti prekės: " + e );
       console.log("NESUVEIKE!@@@");
 }
});
}