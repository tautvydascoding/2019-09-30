console.log("ar veikia?");

function getDoctorwithAjax(){

      let ivestasNumeris = document.querySelector("#gydytojoNR").value;
      // console.log(ivestasNumeris);//test

$.ajax({
  url: "getDoctor.php", //i kur nueiti slapta
  type: "POST", //kaip nunesam duomenis
  data: {nr:  ivestasNumeris}, 

      success: function(gryzo){
            console.log("lyg suveike");
            console.log(gryzo);

            gryzoPaverstasIJSON = JSON.parse(gryzo);
            console.log(gryzoPaverstasIJSON);
            
            $("#gautiGydytoja").append("<br>",gryzoPaverstasIJSON.name," ");
            $("#gautiGydytoja").append(gryzoPaverstasIJSON.lname,"<hr>");
            
      },

      error: function(e) {
            //called when there is an error
            //console.log(e.message);
            $("#results").append( "Request failed: " + e );
            console.log("NESUVEIKE!@@@");
      }
      });
}