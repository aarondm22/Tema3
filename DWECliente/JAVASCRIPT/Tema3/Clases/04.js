//Herencia
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

    nombreCompleto() {
        return this._nombre + " " + this._apellido;
    }
}

class Empleado extends Persona{
    constructor(nombre, apellido, departamento){
        super(nombre, apellido); 
        this._departamento = departamento;
    }

    get departamento(){
        return this._departamento;
    }

    set departamento(departamento){
        this._departamento = departamento;
    }
}

let empleado = new Empleado("David","Vicente","Informatica");
console.log(empleado);
console.log(empleado.nombreCompleto());