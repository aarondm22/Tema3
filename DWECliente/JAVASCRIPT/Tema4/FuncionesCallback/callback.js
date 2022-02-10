

function miFuncion1(){
    console.log("F1");
}

function miFuncion2(){
    console.log("F2");
}

miFuncion2();
miFuncion1();


//Funcion de tipo Callback
let imp = function imprimir(mensaje){
    console.log(mensaje);
}

function sumar(op1,op2, funcionCallback){
    let resultado = op1 + op2;
    funcionCallback(`la suma es: ${resultado}`);
}

sumar(5,4, imp);