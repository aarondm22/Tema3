
let ciudades = [
    new Ciudad('Guadalajara'),
    new Ciudad('Salamanca'),
    new Ciudad('Mallorca')
]

localStorage.setItem("ciudadCadena", JSON.stringify(ciudades));

var contador2;
//Inicializo una variable contador con la cantidad de elementos que están en la lista
let contador=document.getElementById('ciudades').getElementsByTagName('li').length;

//Lista de ciudades que en principio esta vacia
const lista = document.getElementById('ciudades').getElementsByTagName('li');

//a) Un boton ira mostrando en pantalla nombre de ciudades almacenadas en localStorage
let i = 0;
function mostrarCiudad(){
    let ciudadesAlmacen = localStorage.getItem("ciudadCadena");
    console.log(ciudadesAlmacen);
    ciudades=JSON.parse(ciudadesAlmacen);
    let contador = ciudades.length;
    console.log(ciudades);
    /*añadir(ciudadesAlmacen[0]);
    contador++;*/
    if(i<ciudades.length){
        añadir(ciudades[i]._nombre);
        i++;
    }
}


function añadir(texto){
    const listadoUl = document.getElementById("ciudades");
    const elementoLi = document.createElement("li");

    const contenido = document.createTextNode(texto);

    elementoLi.appendChild(contenido);
    listadoUl.appendChild(elementoLi);
    contador2=document.getElementById('ciudades').getElementsByTagName('li').length;
}

//b) Quitar elementos de la lista de ciudades
function quitar(ciudad){
    if(contador2==0){
        console.log("Ya no hay más ciudades");
    }else{
        lista[0].remove();
    }
}

function quitarCiudad(){
    quitar(contador2);
    contador2--;
}

//c)Añade otro botón que haga que cambie el color de los elementos mostrados
function cambiarColor(){
    for (let i = 0; i < lista.length; i++) {
        //console.log(enlaces[i].href);
        lista[i].style.color="green";
    }
}

//d)Añade otro botón para que cada vez que se pulse, la lista sea ordenada o desordenada (desde el concepto HTML)
function ordenarLista(){
    mostrarCiudadesOrdenadas();
}

function mostrarCiudadesOrdenadas(){
    let ciudadesAlmacen = localStorage.getItem("ciudadCadena");
    if(ciudadesAlmacen  == null){
        localStorage.setItem("ciudadCadena", JSON.stringify(ciudades));
    }
    //ya tenemos recuperada la lista del localStorage
    console.log(ciudadesAlmacen);
    ciudades=JSON.parse(ciudadesAlmacen);
    ciudades.forEach(elemento=>{
        añadirO(elemento._nombre);
    })
}

function añadirO(texto){
    const listadoUl = document.getElementById("ciudades");
    const elementoLi = document.createElement("li");
    const listadoOl = document.createElement("ol");
    listadoUl.replaceWith(listadoOl);

    const contenido = document.createTextNode(texto);

    elementoLi.appendChild(contenido);
    listadoOl.appendChild(elementoLi);
    //contador2=document.getElementById('ciudades').getElementsByTagName('li').length;
}
let ciudadesNuevas = [];

//e) Añade otro boton que al ser pulsado guarde la lista que se ve la ventana actual en localStorage
function guardarLista(){
    localStorage.clear();
    const listadoUl = document.getElementById("ciudades").getElementsByTagName('li');
    //Recorro los elemento li actualmente y creo ciudades para introducirlas en el localStorage
    for(i = 0; i < listadoUl.length; i++){
        ciudadesNuevas = [
            new Ciudad(listadoUl[i].innerHTML),
        ];
    }
    localStorage.setItem("ciudadCadena", JSON.stringify(ciudadesNuevas));
}

//g) Añade un formulario par que el usuario pueda añadir ciudades a la lista almacenada
function agregarCiudades(){
    const nombre = document.forms['formulario']['nombre'];

    if(nombre.value!=""){
        //nuevaPersona= new Persona(nombre.value, apellido.value);
        const ciudadModelo = new Ciudad();
        const nuevaCiudad = Object.create(ciudadModelo);
        nuevaCiudad._nombre=nombre.value;
        ciudades.push(nuevaCiudad);

        localStorage.setItem("ciudadCadena",JSON.stringify(ciudades));
        añadir(nombre.value); //añade un elemento li
        //mostrarPersonas();
    }
    else{
        console.log("No hay información suficiente para agregar personas");
    }
}


