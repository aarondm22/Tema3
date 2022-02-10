
class Persona {
    constructor(nombre, apellido){
        this._nombre = nombre;
        this._apellido = apellido;
    }

    get getNombre(){
        return this._nombre;
    }

    get getApellido(){
        return this._apellido;
    }

    set setNombre(nombre){
        this._nombre = nombre;
    }

    set setApellido(apellido){
        this._apellido = apellido;
    }

    toString(){
        return this.getNombre +" " + this.getApellido;
    }

}



