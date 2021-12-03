class Cuadrado
{
    constructor()
    {
        this._color=generaColorAleatorio();
        this._x = 100;
        this._y=100;
    }
}

let aCuadrado=generaCuadrado(171);


function generaCuadrado(numeroCuadrados)
{
    let arrayCuadrados=[];

    for (let index = 0; index < numeroCuadrados; index++) {

        let cuadrado= new Cuadrado();

        arrayCuadrados.push(cuadrado);
        
    }

    return arrayCuadrados;
}




function generaColorAleatorio()
{
    let color = "rgb(" + aleatorioEntre(0,255) + "," + aleatorioEntre(0,255) + "," + aleatorioEntre(0,255) + ")";

    return color;

}

function aleatorioEntre(min,max)
{
    let num = Math.floor(Math.random() * (max - min +1)) + min;
    return num;
}



function mostrarCuadrados()
{
    let cadena="";
    for (let index = 0; index < aCuadrado.length; index++) {

        cadena+=`<div class="cuadrado" id="${index}
        " style="width: ${aCuadrado[index]._x}px; height: 
        ${aCuadrado[index]._y}px; background-color:
        ${aCuadrado[index]._color};"></div>`;
        
    }

    document.getElementById("pantalla").innerHTML=cadena;
}

mostrarCuadrados();
