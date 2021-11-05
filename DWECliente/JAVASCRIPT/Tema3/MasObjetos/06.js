//Distintas formas de obtener e imprimir los valores

let persona = {
    nombre: 'Juan',
    apellido:"Perez",
    email:'jperez@mail.com',
    edad: 23,
    nombreCompleto: function(){
        return this.nombre +' '+ this.apellido;
    }
}

//valores de un objeto
console.log(persona);

//1º forma concatenar
console.log(persona.nombre + ' '+ persona.apellido + ' '+ persona.nombreCompleto());
//2ª forma
for(nombrePropiedad in persona){
    console.log(persona[nombrePropiedad]); //No funciona persona.nombrePropiedad
}

//3ª forma
 let personaArray = Object.values(persona);
 console.log(personaArray);

 //4ª forma; cada valor se convierte en cadena
 let personaString = JSON.stringify(persona);
 console.log(personaString);