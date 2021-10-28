let moto = {
    modelo: "Puch X-30",
    color: "rojo",
    kms: 2500,
    combustible: "gasolina"
}

console.log(moto);

for(atributo in moto){
    console.log(atributo); //modelo, color, kms, combustible
    console.log(moto[atributo]); // Puch x-30, rojo, 2500, gasolina
}

let vehiculo = {
    matricula: "1234 ABC",
    moto,
    maxPasajeros: 2
}

console.log(vehiculo);

console.log(moto.color); //rojo //Tambien sirve moto[color]
console.log(vehiculo.moto.color) //rojo
console.log(vehiculo.matricula) //1234 ABC


