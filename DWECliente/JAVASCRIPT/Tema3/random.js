function generarRandomInt(max){
    return Math.floor(Math.random() * max); //devuelve el nº entero en 0 y max-1
}

var numeroAleatorio = generarRandomInt(6)+1; //guardamos valor entre 1 y 6

//Floor metodo estatico de Math