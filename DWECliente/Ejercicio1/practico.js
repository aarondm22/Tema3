//Funcion tradicional
function media(a,b){
    let suma = a+b;
    return suma/arguments.length;
}

console.log(media(5,6));

//Funcion tipo expresión o anónima

let mediaAnonima = function(a,b){
    let suma = a+b;
    return suma/arguments.length;
}
console.log(mediaAnonima(5,6));

//Funcion en notación tipo flecha

const mediaFlecha = (a,b) => (a+b)/arguments.length;

console.log(mediaFlecha(5,7));

//Funcion Self-invocking

console.log((function(a,b){
    return (a+b)/arguments.length;
}(6,7)));


