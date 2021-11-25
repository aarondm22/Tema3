
//HoIsting: Necesitas crear primero la clase antes del objeto
//let persona3 = new Persona();

class Persona{
    constructor(nombre="Pepe", apellido){
        this._nombre = nombre; //_ para que no interfiera con los getters y setters
        this._apellido = apellido;
    }

    get nombre(){
        return this._nombre;
    }

    set nombre(nombre){
        this._nombre = nombre.toLowerCase();
    }
}

let persona1 = new Persona();
let persona2 = new Persona('Ana', 'Lopez');
console.log(persona1.nombre);
persona1.nombre = "Margarita";
console.log(persona2);