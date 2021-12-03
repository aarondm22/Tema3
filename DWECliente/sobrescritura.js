class Empleado{
    constructor(nombre, sueldo){
        this._nombre = nombre;
        this._sueldo = sueldo;
    }

    obtenerDetalles(){
        return `Empleado: ${this._nombre}, sueldo: ${this._sueldo}`;
    }
}

class Gerente extends Empleado{
    constructor(nombre, sueldo, departamento){
        super(nombre, sueldo);
        this._departamento = departamento;
    }
    //Sobreescribimos el metodo de Empleado
    obtenerDetalles(){
        //con super.metodo podemos escribir el metodo del padre
        return `Gerente: ${this._nombre} Dpto: ${this._departamento}, ${super.obtenerDetalles()}`;
    }
}

//Polimorfismo
function imprimir(tipo){
    //console.log(tipo.obtenerDetalles());
    //Object es la clase padre y todos las clases heredan de esta
    if(tipo instanceof Object){
        //Como hereda, gerente también lo toma como si fuera un objeto de Empleado 
        console.log("Es un objeto de tipo Object");
    }

    if(tipo instanceof Gerente){
        //Como hereda, gerente también lo toma como si fuera un objeto de Empleado 
        console.log("Es un objeto de tipo Gerente");
    }else if(tipo instanceof Empleado){
        console.log("Es un objeto Empleado");
    }else if(tipo instanceof Object){
        //Como hereda, gerente también lo toma como si fuera un objeto de Empleado 
        console.log("Es un objeto de tipo Object");
    }else{
        console.log("No es un objeto");
    }
}

let empleado1 = new Empleado("Juan", 1000);
let gerente1 = new Gerente("Ana", 2200, "Sistemas");

console.log(empleado1.obtenerDetalles());
console.log(gerente1.obtenerDetalles());
let array = [];

imprimir(array);
//imprimir(empleado1);
//imprimir(gerente1);