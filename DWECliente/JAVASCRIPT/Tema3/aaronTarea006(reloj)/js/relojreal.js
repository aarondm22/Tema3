function relojReal(){
    let fecha = new Date();
    let hora = fecha.getHours();
    let minuto = fecha.getMinutes();
    let segundo = fecha.getSeconds();
    if (hora < 10)
        hora = "0"+hora;
    if (minuto < 10)
        minuto = "0"+minuto;
    if (segundo < 10)
        segundo = "0"+segundo;
    let reloj = document.getElementById("lahora");
    reloj.innerHTML = hora + " : "+ minuto + " : "+ segundo;
}

let parado = false;

function parar(){
    clearInterval(cronometro);
    parado = true;
}

function reanudar(){
    if(parado==true){
        cronometro = setInterval(relojReal, 1000);
        parado = false;
    }
}
let cronometro = setInterval(relojReal,1000);



