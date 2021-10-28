function mostrar(numero){
    //Recorrer una clase para ocultar cada uno de los numeros
    let lista = document.getElementsByClassName("num");
    for (let i = 0; i < lista.length; i++){
        let elemento = lista[i];
        document.getElementById(elemento.id).style.display="none";
    }

    switch (numero) {
        case 1:
            document.getElementById("uno").style.display="contents";
            break;
        case 2:
            document.getElementById("dos").style.display="contents";
            break;
        case 3:
            document.getElementById("tres").style.display="contents";
            break;
        default:
            break;
    }
}

function comenzar(){
    let numero= generarRandomInt(3)+1;
    mostrar(numero);
}

function generarRandomInt(max){
    return Math.floor(Math.random() * max); //devuelve  nº entero entre 0 y max -1
}