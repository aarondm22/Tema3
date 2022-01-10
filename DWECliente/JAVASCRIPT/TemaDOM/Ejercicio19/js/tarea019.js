/*
A partir de la página web proporcionada y utilizando las funciones DOM, 
hacer que cada vez que se pulse el botón de añadir, aparezca un nuevo 
mes en la lista. 
*/
 
/*
cuando se acaben los meses, que se vayan eliminando en orden, empezando por enero
*/
const arrayMeses=['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 
'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
 
//Inicializo una variable contador con la cantidad de elementos que están en la lista
let contador=document.getElementById('lista').getElementsByTagName('li').length;
/*
voy allevar una cuenta de 24 para los meses. Que trataré en la función quitaypon()
if (contador < 12 ) añadir
if (contador >= 12) quitar
if (contador == 24) contador=0; //se inicializa el contador
*/
 
// lista es el NodeList de los elementos li
const lista = document.getElementById('lista').getElementsByTagName('li');
//console.log(lista);
 
/*
// si hubiera que recorrer la lista
function recorrer(){
  for (let i=0; i< lista.length; i++){
    console.log(lista[i].textContent);
  }
}
*/

function añadir(mes){
    const nuevoElemento = document.createElement('li'); //paso 1; crear nodo tipo Elemento
    const contenido = document.createTextNode(arrayMeses[mes]); //paso 2: crear nodo tipo Text
    nuevoElemento.appendChild(contenido); // paso3: añadir el Nodo Text al nuevo Elemento
    document.getElementById('lista').appendChild(nuevoElemento); //paso 4: añadir el nuevo Elemento  como hijo de su padre
}

function quitar(mes){
  //console.log(lista[mes].textContent);
  lista[0].remove();
}
 
function quitaypon(){
    if (contador < 12){
        añadir(contador);
        contador++;
    }else {
        quitar(contador - 12);
        contador++;
        if (contador == 24) 
            contador = 0;
    }
 // console.log('final ' + contador);
}