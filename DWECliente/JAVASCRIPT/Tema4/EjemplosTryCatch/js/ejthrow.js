"use strict";

try{
    variable = 5;
    if(variable > 0){
        throw "Numero positivo";
    }
    else if(variable<0){
        throw "Numero negativo";
    }
    else if(isNaN(variable)){
        throw "Cadena";
    }
}
catch(error2){
    console.log(error2);
}
finally{
    console.log("Final");
}