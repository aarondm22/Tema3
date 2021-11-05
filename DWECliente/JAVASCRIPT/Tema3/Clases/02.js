class Persona{
    constructor(nombre="Pepe", apellido){
        this._nombre = nombre; //_ para que no interfiera con los getters y setters
        this._apellido = apellido;
    }

    get nombre(){
        return "hola " + this._nombre.toLowerCase();
    }

    set nombre(nombre){
        this._nombre = nombre;
    }
}

let persona1 = new Persona();
let persona2 = new Persona('Ana', 'Lopez');
console.log(persona1.nombre);
persona1.nombre = "Margarita"; //Llama a set
console.log(persona2.nombre); //llama a get