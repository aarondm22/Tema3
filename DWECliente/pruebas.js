
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