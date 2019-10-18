

function patikrintiIvedimoLauka(){

    var t = $('#paieska').val();  // ivesta teksta paimam
    if (t.length == 0){
        console.log('Tekstas neivestas');
        $('#paieska').css('background-color' , 'orange');
        $('div').text('iveskite teksta');
    }
    console.log(t);
}