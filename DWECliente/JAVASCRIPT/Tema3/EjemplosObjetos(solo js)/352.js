function Coche(modelo, color, kms, combustible){
    this.modelo=modelo;
    this.color=color;
    this.kms=kms;
    this.combustible=combustible;
}

let elmio= new Coche("Rolls", 'gris', 500, 'gasolina');
let elDavid = new Coche("Renault", "rojo", 245000, "gasolina");

console.log(elmio);
console.log(elDavid);
elmio=elDavid;
console.log(elmio);
console.log(elDavid);
elmio.color="verde";
console.log(elmio.color);
console.log(elDavid.color);
elmio.matricula="11111jjj";
console.log(elDavid);