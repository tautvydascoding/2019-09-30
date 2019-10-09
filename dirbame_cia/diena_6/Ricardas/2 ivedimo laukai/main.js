function apskrPlotas() {
    let r = document.querySelector('div input').value;
    let plotas = Math.PI * r * r;
    document.querySelector('h2').innerHTML = plotas; 
}

function statPlotas() {
    let aukstis = document.querySelector('div input[class="aukstis"]').value;
    let plotis = document.querySelector('div input[class="plotis"] ').value;
    let plotas = plotis * aukstis;
    document.querySelector('h2').innerHTML =  plotas;
}

