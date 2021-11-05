
let x=10;
console.log(x);
console.log(x.length);

let persona = {
    nombre: 'Juan',
    apelllido:"Perez",
    email:'jperez@mail.com',
    edad: 23,
    nombreCompleto: function(){
        return this.nombre +' '+ this.apelllido;
    }
}

console.log(persona.apelllido);
console.log(persona.edad);
console.log(persona.nombreCompleto());
console.log(persona);
//otra forma de crear objetos
let persona2 = new Object();
persona2.nombre='carlos';
persona2.tel='55443322';
console.log(persona2);