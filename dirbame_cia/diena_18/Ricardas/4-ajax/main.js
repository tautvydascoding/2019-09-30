function delDoc() {
    var ID = $('#winner').val();
    $.ajax({
      url: "trintiGyd.php", //kur nueiti    
      type: "POST", // kokiu budu nunest duomenis   
      data: {nr: ID}, 
      success: function(gryzo){
            console.log("lyg suveike");
            console.log(gryzo);

            // =======jei PHP darot: echo "String";================
          //   gryzoPaverstasIString = JSON.stringify(gryzo);
          //   console.log(gryzoPaverstasIString);
          //   $("#results").append(gryzoPaverstasIString);
                    /* OR */
            //====== jei PHP darot: echo parseTOJSON( $manoAray);====
            // gryzoPaverstasIJSON = JSON.parse(gryzo); //atkodavimas
            // console.log(gryzoPaverstasIJSON);
            //this is what I am unsure about?
            // $("#results").append(gryzoPaverstasIJSON.vardas);
      },

      error: function(e) {
          //called when there is an error
          //console.log(e.message);
          $("#results").append( "Request failed: " + e );
          console.log("NESUVEIKE!@@@");
    }
  });
}