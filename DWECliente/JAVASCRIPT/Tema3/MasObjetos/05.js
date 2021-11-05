
//Agregar y eliminar propiedades
let x=10;
console.log(x);
console.log(x.length);

let persona = {
    nombre: 'Juan',
    apellido:"Perez",
    //email:'jperez@mail.com',
    edad: 23,
    /*nombreCompleto: function(){
        return this.nombre +' '+ this.apelllido;
    }*/
}
//agregar propiedades a un objeto existente
console.log(persona);
persona.tel='61524541';
console.log(persona);
persona.tele="11224455";
console.log(persona);
delete persona.tele; //para eliminar propiedad
console.log(persona);