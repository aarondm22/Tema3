class Persona{
    constructor(nombre,apellido){
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
}

// (1) personas: es un Array de objetos de la clase Persona
// (2) personasAlmacenadas: es una cadena de texto para poder guardar en localStorage
// (3) personas2: es un Array de objetos que conseguimos al parsear personasAlmacenadas

let personas = [
    new Persona('Juan','Perez'),
    new Persona('Maria','Criado'),
    new Persona('Pedro','Rodriguez')
]

//Tenemos 3 personas y añadimos una cuarta persona
personas.push(new Persona('Faustino','Clavero'));
console.log('personas: ', personas);

//Guardar el objeto personas en localStorage
localStorage.setItem('personasCadena',JSON.stringify(personas));

//recuperar el localStorage en crudo
let personasAlmacenadas = localStorage.getItem('personasCadena');
console.log("personasAlmacenadas: ", personasAlmacenadas);

//recuperar de localStorage parseando en JSON
let personas2 = JSON.parse(personasAlmacenadas);
console.log('personas2:', personas2);

//MOSTRAR LOS ATRIBUTOS DE LA CLASE 

//mostrando el atributo _nombre de personas(Array normal) con getNombre()
personas.forEach(element =>{
    console.log(element.getNombre);
});

//mostrando el atributo _nombre de personas2(JSON) con getNombre()
//Con JSON no se pueden utilizar los métodos get() para obtener los cvalores de los atributos, debemos obtenerlos
//directamente a través de sus atributos
personas2.forEach(element =>{
    console.log(element.getNombre);
});

//mostrando el atributo _nombre de personas(Array normal) directamente
personas.forEach(element =>{
    console.log(element._nombre);
});

//mostrando el atributo _nombre de personas(JSON) directamente
personas2.forEach(element =>{
    console.log(element._nombre);
});


//Usando Object.create()

//Creamos un objeto modelo de la clase que queramos tener. No hace falta que tenga datos.
const personaModelo = new Persona();

//Creamos un nuevo objeto utilizando el objeto modelo existente.
const nuevaPersona = Object.create(personaModelo);
//Asignamos contenido a los atributos
nuevaPersona.setNombre = 'Pepe';
nuevaPersona.setApellido = 'Juarez';

//Mostramos la nueva persona
console.log("Nueva Persona:", nuevaPersona.getNombre);

//Creamos un nuevo objeto utilizando el objeto modelo existente.
const otraPersona = Object.create(personaModelo);
//Asignamos contenido a los atributos
otraPersona._nombre = 'Carmen';
otraPersona._apellido = 'Sevilla';

//Metemos los objetos nuevos de la clase Persona en el array personas
personas.push(nuevaPersona);
personas.push(otraPersona);
//Comprobamos el contenido del array
console.log(personas);




