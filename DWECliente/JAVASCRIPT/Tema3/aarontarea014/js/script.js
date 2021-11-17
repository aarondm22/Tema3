
class Persona {
    static contadorPersonas = 101;
    constructor(nombre,apellido,edad){
        this._id = Persona.contadorPersonas++;
        this._nombre = nombre;
        this._apellido = apellido;
        this._edad = edad;
    }

    get edad(){
        return this._edad;
    }

    get nombre(){
        return Persona.mayuscula(this._nombre);
    }

    set nombre(nombre){
        this._nombre = nombre;
    }

    get apellido(){
        return Persona.mayuscula(this._apellido);
    }

    set apellido(apellido){
        this._apellido = apellido;
    }

    static mayuscula(palabra){
        return palabra.charAt(0).toUpperCase() + palabra.slice(1).toLowerCase();
    }
    
    toString(){
        return `${this._id}:\n       ${this.nombre} ${this.apellido}\n       Edad:${this._edad}`;
    }
}



let persona1 = new Persona ('JUAN', 'PÉREZ', 19);
let persona2 = new Persona ('federica', 'lopEZ', 25);

console.log(persona1);
console.log(persona1.toString());
console.log(persona2.toString());

class Empleado extends Persona{
    static contadorEmpleados = 201;
    
    constructor(nombre, apellido, edad, sueldo){
        super(nombre,apellido,edad);
        this._id = Empleado.contadorEmpleados++;
        this._sueldo = sueldo;
    }

    get getId(){
        return this._id;
    }


    get getSueldo(){
        return this._sueldo;
    }

    toString(){
        return `Empleado ${this.getId}:\n       ${super.nombre} ${super.apellido}\n       Edad:${super.edad},\n       Sueldo: ${this.getSueldo.toLocaleString("es")}€`; 
    }
}

let empleado1 = new Empleado("aaron","marcos",21,22200.34);
let empleado2 = new Empleado("hSDAulian","SULEimani",90,300.34);
console.log(empleado1);
console.log(empleado1.toString());
console.log(empleado2.toString());

class Cliente extends Persona{
    static contadorClientes = 301;
    constructor(nombre, apellido, edad, fecha){
        super(nombre,apellido,edad);
        this._id = Cliente.contadorClientes++;
        this._fecha = fecha;
    }

    get fecha(){
        return this._fecha;
    }

    get id(){
        return this._id;
    }

    toString(){
        return `Cliente ${this.id}:\n       ${super.nombre} ${super.apellido}\n       Edad:${super.edad},\n       Registro: ${this.fecha.toLocaleDateString()}`;
    }
}
let cliente1 = new Cliente("AnToNIO","GARCIA", 28, new Date());
let cliente2 = new Cliente("SabrrINA","JIMEnez", 34, new Date());
console.log(cliente1.toString());
console.log(cliente2.toString());

let empleado3 = new Empleado(persona1.nombre, persona1.apellido, persona1.edad, 30000);
console.log(empleado3.toString());
console.log("Id del Empleado2: "+empleado2.id);
console.log("id del Cliente1: "+cliente1.id);
console.log("Contador de Personas: "+Persona.contadorPersonas);
let p23=new Persona();
console.log("Contador de Personas: "+Persona.contadorPersonas);
let p24=new Persona();
console.log("Contador de Personas: "+Persona.contadorPersonas);
let p25=new Persona();
console.log("Contador de Personas: "+Persona.contadorPersonas);
let p26=new Persona();
console.log("Contador de Personas: "+Persona.contadorPersonas);
let p27=new Persona();


