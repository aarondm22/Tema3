class Persona{
    constructor(nombre="Pepe", apellido){
        this.nombre = nombre;
        this.apellido = apellido;
    }
}

let persona1 = new Persona();
let persona2 = new Persona('Ana', 'Lopez');
console.log(persona1);
console.log(persona2);