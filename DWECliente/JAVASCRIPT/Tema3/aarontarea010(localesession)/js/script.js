function generarRandomInt(max){
    return Math.floor(Math.random() * max); //devuelve  nº entero entre 0 y max -1
}
var apuestas;
var total = 50;

function mostrarNumero(){
    apuestas  = document.getElementById("apuesta").value;
    let numapuestas = Number (apuestas);
    let restante = document.getElementById("total");
    let numeroAleatorio = generarRandomInt(6)+1;
    console.log(total);
    let numero1 = document.getElementById('num1');
    numero1.innerHTML = numeroAleatorio;
    let otroNum = generarRandomInt(6)+1;
    let numero2 = document.getElementById('num2');
    numero2.innerHTML = otroNum;

    let suma = numeroAleatorio+otroNum;
    let muestra = document.getElementById('resultado');
    if(suma==7 || suma==11){
        muestra.innerHTML = suma+": Has ganado ";
        muestra.style.backgroundColor = "#008f39";
        total = total + numapuestas;
        restante.innerHTML = total;
    }else if(suma==2 || suma==3 || suma==12){
        muestra.innerHTML = suma+": Has perdido";
        muestra.style.backgroundColor = "#FF0000";
        total = total - 2*(numapuestas);
        restante.innerHTML = total;
    }else{
        muestra.innerHTML = suma+": Vuelve a tirar";
        muestra.style.backgroundColor = "blue";
    }

    let audio = document.getElementById("lanzar");
    audio.play();
}

function apostar(){
    apuestas = document.getElementById("apuesta").value;
    let apostado = document.getElementById("apostado");
    apostado.innerHTML = "Apostado: "+apuestas+"€";
}

function mostrarDado(){
    document.getElementById("dado1").innerHTML
}

function lanzarDados(){
    let dado1=generarRandomInt(6)+1;
    let dado2= generarRandomInt(6)+1;
    for (let i = 0; i < 7; i++) {
        let intervalo = setInterval(mostrarDado, 200);
    }
}


