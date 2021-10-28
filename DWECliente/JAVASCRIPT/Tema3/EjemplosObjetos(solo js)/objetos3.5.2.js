//Definir una clase
function Coche(modelo, color, kms, combustible){
    this.modelo = modelo;
    this.color = color;
    this.kms = kms;
    this.combustible = combustible;
}

let elmio = new Coche("Rolls", 'gris', 500, 'gasolina');
let elDavid = new Coche("Renault", 'rojo', 245456, 'diesel');

console.log(elmio);
console.log(elDavid);

elmio = elDavid; /*Solo apuntan uno al otro, a la misma direccion de memoria, si modificamos algo en una
                Se modifica en la otra*/
elmio.kms++;