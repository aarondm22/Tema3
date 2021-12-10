"use strict";

try{
    hola = 5;
    //throw "Es un numero";
}
catch(error1){
    console.log(error1);
    console.log(error1.name);
    console.log(error1.message);
}
finally{
    console.log("Aquí llega siempre");
}
console.log("Seguimos con el codigo");

