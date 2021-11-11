
//Creamos una variable de tipo String
String = "23";
//Creamos una variable donde se va a guardar cuando convirtamos nuestra variable en tipo number
let variable = Number(String); 
//Mostramos el tipo de la variable y su valor que sigue intacto
console.log(typeof(variable));
console.log(variable);

String = "hola";
let variable2 = Number(String);
console.log(typeof(variable2));
console.log(variable2);

console.log(typeof(parseInt("123")));
console.log(parseInt("123"));

console.log(typeof(parseInt("hola")));
console.log(parseInt("hola"));

let fecha = new Date();
console.log(typeof(parseInt(fecha)));
console.log(parseInt(fecha));

console.log(Math.ceil("123"));
console.log(Math.floor("300"));
console.log(Math.abs("450"));

console.log(0.000000000000002 < Number.EPSILON);

//El tipo Number más grande y más pequeño representado en JS
console.log(Number.MAX_SAFE_INTEGER);
console.log(Number.MIN_SAFE_INTEGER);

var numero1 = 1.79E+307;
var numero2 = 1.79E+310;

function verificarValorMaximo(num){

	if (num <= Number.MAX_VALUE) {
	  console.log("El número no es infinito");
	} else {
	  console.log("El número es infinito");
	}

}

verificarValorMaximo(numero1); // El número no es infinito
verificarValorMaximo(numero2); // El número es infinito

//El numero más pequeño y más cercano al 0
let num = Number.MIN_VALUE;
console.log(num);


Number.prototype.miMetodo = function() {
    return this.valueOf() / 2;
};

let n = 55;
let x = n.miMetodo();  
console.log(x);


let numero = 23;
console.log(Number.NaN);

function esNum(x) {
    if (isNaN(x)) {
      return Number.NaN;
    }
    return x;
}
console.log(esNum("hola")); 
console.log(esNum(39));   

let cosa = 'cosa';
console.log(isNaN('Hello')); 
console.log(Number.isNaN(NaN)); 
console.log(Number.isNaN(Number.NaN));
console.log(Number.isNaN(cosa));
console.log(Number.isNaN(Number(39)));
console.log(isNaN("2005/12/12"));

console.log(Number.isFinite(1 / 0));

console.log(Number.isFinite(10 / 5));

console.log(Number.isFinite(0 / 0));


function esEntero(x, y) {
    if (Number.isInteger(x / y)) {
      return 'Es un numero entero';
    }
    return 'No es un entero';
  }
  
  console.log(esEntero(10, 5));
  //Resultado 2
  console.log(esEntero(11, 5));
  //Resultado 2.2

function enteroSeguro(n) {
if (Number.isSafeInteger(n)) {
    return 'Es un entero seguro';
}
return 'No es un entero seguro';
}

console.log(enteroSeguro(Math.pow(2, 53)));

console.log(enteroSeguro(Math.pow(2, 53) - 1));

console.log(Number.parseFloat('25.678'));
console.log(Number.parseFloat('123ABC4'));
console.log(Number.parseFloat('ABC123'));

console.log(Number.parseInt('35.6'));
console.log(Number.parseInt('123ABC4'));
console.log(Number.parseInt('ABC123'));