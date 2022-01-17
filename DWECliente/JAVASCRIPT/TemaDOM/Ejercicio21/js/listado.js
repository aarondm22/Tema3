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

    toString(){
        return `${this.getNombre} ${this.getApellido}`;
    }

}

function añadir(){
    const item = document.createElement("li");
    const lista = document.querySelector("ul");

    let nom = document.getElementById("nombre").value;
    let ape = document.getElementById("apellido").value;

    let persona = new Persona(nom,ape);
    console.log(nom);
    let contenido = document.createTextNode(persona.toString());
    item.appendChild(contenido);
    
    lista.appendChild(item);
}


