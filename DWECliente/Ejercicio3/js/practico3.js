let contadorR = 0;
let contadorV = 0;
function contar(color){
    let idcolor = color.id;
    let rojo = document.getElementById("rojo");
    let verde = document.getElementById("verde");
    if(color==rojo){
        let cr = document.getElementById("c1");
        contadorR++;
        cr.innerHTML = contadorR.toLocaleString(undefined,{ minimumIntegerDigits: 3, useGrouping: false});
    }else if(color==verde){
        let cv = document.getElementById("c2");
        contadorV++;
        cv.innerHTML = contadorV.toLocaleString(undefined,{ minimumIntegerDigits: 3, useGrouping: false});
    }
}

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
    let lista1 = document.getElementById("lista1");
    let lista2 = document.getElementById("lista2");
    lista1.innerHTML = hora + " : "+ minuto + " : "+ segundo +" "+ contadorR;
    lista2.innerHTML = hora + " : "+ minuto + " : "+ segundo +" "+ contadorV;
}

function mostrarDatos() {
    var texto = document.getElementById("lista1");
    texto.innerHTML = "";
    for (var i = 0; i < sessionStorage.length; i++) {
      var clic = sessionStorage.key(i);
      texto.innerHTML += clic + " : " + i;
      console.log(clic+i);
    }
}

relojReal();