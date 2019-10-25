console.log("ar veikia?");

function deleteDoctorWithAjax(){

      let ivestasNr = document.querySelector("#idNr").value;
      console.log(ivestasNr);
      $.ajax({
      url: "doctorDelete.php", //i kur nueiti slapta
      type: "POST", //kaip nunesam duomenis
      data: {nr: ivestasNr}, //

            success: function(zinute){
                  console.log("lyg suveike");
                  zinute = "pavyko istrinti";
                  console.log(zinute);
                  $("#results").append(zinute);
                  
            },

            error: function(e) {
                  //called when there is an error
                  //console.log(e.message);
                  $("#results").append( "Request failed: " + e );
                  console.log("NESUVEIKE!@@@");
            }
            });
      }