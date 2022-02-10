const arrayMeses=['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 
'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

//Activar boton
const boton = document.querySelector("boton");

function añadir(){
    
    const lista = document.getElementById("lista"); //obtenemois elemento UL
    const listadoLI = lista.getElementsByTagName('li'); //Obtenemos coleccion de elementos LI
    console.log(listadoLI);
    const posActual = listadoLI.length; //obtenemos el numero de meses que estan en la lista
    console.log(posActual);

    //PASO 1: Crear elemento LI
    const itemLI = document.createElement("li");

    const textoMes = arrayMeses[posActual]; //obtenemos el mes a escribir. Ej:(Marzo)

    //PASO 2: Crear un nodo tipo Text
    let contenido = document.createTextNode(textoMes);
    console.log(contenido);

    //PASO 3: Añadir el nodo text como hijo del nodo element
    itemLI.appendChild(contenido);
    //PASO 4: Añadir el nodo element como hijo de su padre
    lista.appendChild(itemLI);

    //Desactivar cuando llega a diciembre
    if(posActual == 11){
        const boton = document.getElementById("boton");
        boton.disabled = true;
    }
    
}
