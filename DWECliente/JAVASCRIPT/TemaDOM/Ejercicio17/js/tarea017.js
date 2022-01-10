const arrayMeses=['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 
'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];


function añadir(){
    
    const lista = document.querySelector("ul");
    const listadoLI = lista.getElementsByTagName('li');
    const posActual = listadoLI.length;
    const item = document.createElement("li");
    const textoMes = arrayMeses[posActual];

    let contenido = document.createTextNode(textoMes);
    item.appendChild(contenido);
        
    lista.appendChild(item);

}
