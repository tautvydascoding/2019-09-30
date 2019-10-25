console.log("ar veikia?");

function isvestiDuomenis_suAJAX() {
    let ivestasVars = document.querySelector('#vardas').value;
    <!-- // JavaScript -->
    $.ajax({
        url: "test.php", // i kur nueiti slapta
        type: "POST",    // kaip nunesam duomenis
        data: {name: ivestasVars, location: "Boston"},
        success: function(gryzo){
            console.log("lyg suveike");
            console.log(gryzo);

            // =======jei PHP darot: echo "String";================
            // gryzoPaverstasIString = JSON.stringify(gryzo);
            // console.log(gryzoPaverstasIString);
            // $("#results").append(gryzoPaverstasIString);
            // $("#results").append(gryzo);
            /* OR */
            //====== jei PHP darot: echo parseTOJSON( $manoAray);====
            gryzoPaverstasIJSON = JSON.parse(gryzo); //JSON.parse- atkodavimas is JSON
            console.log(gryzoPaverstasIJSON);
            //this is what I am unsure about?
            $("#results").append(gryzoPaverstasIJSON.vardas);
            document.querySelector("#results").innerHTML += gryzoPaverstasIJSON.vietove;
        },

        error: function(e) {
            //called when there is an error
            //console.log(e.message);
            $("#results").append( "Request failed: " + e );
            console.log("NESUVEIKE!@@@");
        }
    });

}
