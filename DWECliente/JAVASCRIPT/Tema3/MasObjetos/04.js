
//Acceder a las propiedades de un objeto
let x=10;
console.log(x);
console.log(x.length);

let persona = {
    nombre: 'Juan',
    apellido:"Perez",
    email:'jperez@mail.com',
    edad: 23,
    nombreCompleto: function(){
        return this.nombre +' '+ this.apelllido;
    }
}

console.log(persona.apellido);
console.log(persona['apellido']);

for (nombrePropiedad in persona){
    console.log(persona[nombrePropiedad]);
    console.log(nombrePropiedad);
}