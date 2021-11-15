
class Persona {
    static contador = 101;
    constructor(nombre,apellido,edad){
        this._nombre = nombre;
        this._apellido = apellido;
        this._edad = edad;
        Persona.contador++;
    }

    setNombre(){
        return this._nombre = this._nombre.charAt(0).toUpperCase() + this._nombre.slice(1).toLowerCase();
    }

    setApellido(){
        return this._apellido = this._apellido.charAt(0).toUpperCase() + this._apellido.slice(1).toLowerCase();
    }


    nombreCompleto(){
        return this._nombre +" "+ this._apellido;
    }

    toString(){
        return Persona.contador +":"+ this.setNombre()+ " " +this.setApellido() +" Edad:"+this._edad;
    }
}



let persona1 = new Persona ('JUAN', 'PÉREZ', 19);
let persona2 = new Persona ('federica', 'lopEZ', 25);

console.log(persona1);
console.log(persona1.toString());
console.log(persona1.contador);
console.log(persona2.contador);

class Empleado extends Persona{
    constructor(sueldo){
        this._sueldo = sueldo;
    }
}

