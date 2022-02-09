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

const primerDiv = document.getElementsByTagName("div"); //obtengo colección de div
primerDiv[0].style="display: flex"; //Aplico al primer div para que se coloquen

let colInputs = document.getElementsByTagName("input"); //obtenemos colección de inputs
colInputs[0].style ="cursor:pointer"; //aplico cursor al primer input


function añadir(mes){
  const nuevoElemento = document.createElement('li'); //paso 1; crear nodo tipo Elemento
  const contenido = document.createTextNode(arrayMeses[mes]); //paso 2: crear nodo tipo Text
  nuevoElemento.appendChild(contenido); // paso3: añadir el Nodo Text al nuevo Elemento
  document.getElementById('lista').appendChild(nuevoElemento); //paso 4: añadir el nuevo Elemento  como hijo de su padre
}

function quitar(mes){
  //lista es el NodeList de los elementos li
  const lista = document.getElementById('lista').getElementsByTagName('li');
  //console.log(lista[mes].textContent);
  lista[0].remove();
}
 
function quitaypon(boton){ //paso el boton a la funcion desde HTML con 'this'
  //boton.style="cursor:pointer";
  if (contador < 12){
    añadir(contador);
    contador++;
  }else {
    quitar(contador - 12);
    contador++;
    if (contador == 24) 
      contador = 0;
  }
  if(contador < 12){
    boton.value=" Añadir ";
  }else{
    boton.value=" Quitar ";
  }
}