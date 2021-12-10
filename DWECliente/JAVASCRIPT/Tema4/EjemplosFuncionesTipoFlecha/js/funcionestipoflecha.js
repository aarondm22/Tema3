
const miFuncionFlecha = () => {console.log("Soy una funcion tipo flecha");}
miFuncionFlecha();

//Return da error sin llaves
const saludar = () => {return 'saludos desde Funcion flecha breve';}
console.log(saludar());

//Función flecha que devuelve un objeto
const devuelveObjeto = () => ({nombre: 'Juan', apellido: 'Alonso'});
console.log(devuelveObjeto());

//Funcion con parametros, no sale en quokka
const funcionConParametros = mensaje => console.log(mensaje);
funcionConParametros("Hola majos");

//Funcion con parametros de una suma
const sumar = (a,b) => a+b;
console.log(sumar(3,5));
