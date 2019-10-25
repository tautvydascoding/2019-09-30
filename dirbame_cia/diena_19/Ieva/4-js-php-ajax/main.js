console.log("ar veikia?");

<!-- // JavaScript -->
function getNameLocationwithAjax(){

      let ivestasVardas = document.querySelector("#vardas").value;

$.ajax({
  url: "test.php", //i kur nueiti slapta
  type: "POST", //kaip nunesam duomenis
  data: {name: ivestasVardas, location: "Boston"}, //
  success: function(gryzo){
        console.log("lyg suveike");
        console.log(gryzo);

        // =======jei PHP darot: echo "String";================
      //   gryzoPaverstasIString = JSON.stringify(gryzo);
      //   console.log(gryzoPaverstasIString);
      //   $("#results").append(gryzoPaverstasIString);

      //   $("#results").append(gryzoPaverstasIString.vardas);

                /* OR */
        //====== jei PHP darot: echo parseTOJSON( $manoAray);====
        gryzoPaverstasIJSON = JSON.parse(gryzo); //atkodavimas i json, skaido json
        console.log(gryzoPaverstasIJSON);
        //this is what I am unsure about?
         $("#results").append(gryzoPaverstasIJSON.vardas);
         document.querySelector("#results").innerHTML += gryzoPaverstasIJSON.location;
  },

  error: function(e) {
       //called when there is an error
       //console.log(e.message);
       $("#results").append( "Request failed: " + e );
       console.log("NESUVEIKE!@@@");
 }
});
}