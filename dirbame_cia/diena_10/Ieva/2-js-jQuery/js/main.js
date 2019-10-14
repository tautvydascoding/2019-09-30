console.log("labas labuka");

// $('h1').hide(3000); //mili sekundes


function patikrintiIvedimoLauka() {
    let t = $('#paieska').val();
    //    console.log(t);
       if (t.length == 0) {
          $('#paieska').css('background-color', 'pink');
          $('#error').text('iveskite teksta i paieska');
       } else {
        $('#paieska').css('background-color', 'white'); 
        console.log(t);
        }
    }





