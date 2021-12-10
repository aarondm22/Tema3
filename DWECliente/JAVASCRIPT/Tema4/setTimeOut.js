function miFuncionCallback(){
    console.log("saludo asincrono despues de 3 segundos");
}

setTimeout(function(){
    console.log("otro saludo");
},4000);
setTimeout(miFuncionCallback, 3000);
//Funcion tipo flecha se puede construir sin nombre, es anonima
setTimeout(() =>console.log("saludos de Uriel"),1000);

console.log("hola");