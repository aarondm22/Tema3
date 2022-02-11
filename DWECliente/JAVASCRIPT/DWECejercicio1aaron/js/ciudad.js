class Ciudad{
    constructor(nombre){
        this._nombre = nombre;
    }

    get getNombre(){
        return this._nombre;
    }

    set setNombre(nombre){
        this._nombre = nombre;
    }
}