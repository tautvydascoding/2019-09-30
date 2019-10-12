$('h1').hide(3000);

function patikrinkIvedimoLauka() {
    let data = $('#paieska').val();
    console.log(data);
    if(data.length === 0) {
        $('<div></div>').append(''); ////
    } else {
        $('#paieska').css('background-color', 'white');
    }   
}