
//Borrar cookies si salen resultados en el local storage distintos

let personas = [
    new Persona('Juan','Perez'),
    new Persona('Catalina','La Grande'),
    new Persona('Eustaquio','Lopez'),
];

function mostrarPersonas(){
    let personasAlmacen = localStorage.getItem("personaCadenas");
    if(personasAlmacen  == null){
        localStorage.setItem("personasCadenas", JSON.stringify(personas));
    }
    //ya tenemos recuperada la lista del localStorage
    console.log(personasAlmacen );
    personas=JSON.parse(personasAlmacen);
    personas.forEach(elemento=>{
        añadir(elemento._nombre + " "+ elemento._apellido);
    })
}

function añadir(texto){
    const listadoUl = document.getElementById("personas");
    const elementoLi = document.createElement("li");

    const contenido = document.createTextNode(texto);

    elementoLi.appendChild(contenido);
    listadoUl.appendChild(elementoLi);
}

function agregarPersonas(){
    const nombre = document.forms['formulario']['nombre'];
    const apellido = document.getElementById("apellido");

    if(nombre.value!="" && apellido.value!=""){
        //nuevaPersona= new Persona(nombre.value, apellido.value);
        const personaModelo = new Persona();
        const nuevaPersona = Object.create(personaModelo);
        nuevaPersona._nombre=nombre.value;
        nuevaPersona._apellido = apellido.value;
        personas.push(nuevaPersona);

        localStorage.setItem("personasCadenas",JSON.stringify(personas));
        añadir(nombre.value+" "+apellido.value); //añade un elemento li
        //mostrarPersonas();
    }
    else{
        console.log("No hay información suficiente para agregar personas");
    }

}