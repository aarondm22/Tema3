//Distintas formas de crear objetos

let persona1 = new Object();
let persona2 = {
    nombre: 'Juan',
    apellido: 'Perez'
};

let miCadena1 = new String('Hola');
let micadena2 = 'Hola';

console.log(miCadena1.toUpperCase());
console.log(micadena2.length);


let miNumero1 = new Number(5);
let miNumero2 = 5; //Recomendada

let miBoolean1 = new Boolean(false);
let miBoolean2 = true; //Recomendada

let miArray1 = new Array();
let miArray2 = []; //Recomendada

let miFunction1 = new Function();
let miFuncion2 = function() {}; //Recomendada
