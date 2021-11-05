//Get y set es lo mas adecuado para modificar los valores de las propiedades
// usar un método get, permite llamar a es método como si fuera
// una propiedad
let persona = {
    nombre: 'Juan',
    apellido:"Perez",
    email:'jperez@mail.com',
    edad: 23,
    /*nombreCompleto: function(){
        return this.nombre +' '+ this.apellido;
    }*/
    get nombreCompleto(){
        return this.nombre +' ' + this.apellido;
    }
}
console.log(persona.nombreCompleto);
console.log(persona.nombreCompleto);
for(nombrePropiedad in persona){
    console.log(persona[nombrePropiedad]);
}