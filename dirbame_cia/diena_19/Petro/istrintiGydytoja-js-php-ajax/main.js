function trinti(){

console.log("ar veikia!!!?");
    //NEAISKU AR PAIMAMI VISI  BUTTON TAGAI IS FAILO AR IS EKRANO
    let ivedamaReiksme = document.getElementsByTagName("button")[0].getAttribute("class");
// let ivedamaReiksme = document.getElementsByName('13').;
    console.log(ivedamaReiksme);
$.ajax({
  url: "test.php",
  type: "POST",
  data: {id: ivedamaReiksme},
  success: function(rez){
        console.log("lyg suveike");
        console.log(rez);

        // =======jei PHP darot: echo "String";================
        // gryzoPaverstasIString = JSON.stringify(gryzo);
        // console.log(gryzoPaverstasIString);
        // $("#results").append(gryzoPaverstasIString.vardas);
                /* OR */
        //====== jei PHP darot: echo parseTOJSON( $manoAray);====
        // gryzoPaverstasIJSON = JSON.parse(rez);
        // console.log(gryzoPaverstasIJSON);
        //this is what I am unsure about?
         $("#results").append(gryzoPaverstasIJSON.vardas);
  },

  error: function(e) {
       //called when there is an error
       //console.log(e.message);
       $("#results").append( "Request failed: " + e );
       console.log("NESUVEIKE!@@@");
 }
});
}