class Persona{
    static contadorObjetosPersona = 0;
    email = 'correo@email.com';
    constructor (nombre, apellido){
        this._id = Persona.contadorObjetosPersona;
        this._nombre = nombre;
        this._apellido = apellido;
        Persona.contadorObjetosPersona++;
    }
    get nombre(){
        return this._nombre;
    }
    set nombre(nombre){
        this._nombre=nombre;
    }
    get apellido(){
        return this._apellido;
    }
    set apellido(apellido){
        this._apellido=apellido;
    }
   
}

 
class Empleado extends Persona{
    constructor (nombre, apellido, departamento = 'Informática'){
        super (nombre,apellido);
        this._departamento = departamento;
    }
    nombreCompleto(){
        return super.nombreCompleto() + ' '+this._departamento;
    }
}
 
let persona1= new Persona('Juan', 'Perez');
 
console.log(persona1);
let empleado2 = new Empleado ('David', 'Vicente');
console.log(Persona.contadorObjetosPersona);
console.log(empleado2.email);
console.log(persona1.email);