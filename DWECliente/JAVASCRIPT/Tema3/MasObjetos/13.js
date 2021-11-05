let persona={
    nombre="Pepe",
    apellido="Juarez",
    nombreCompleto: function(titulo, tel){
        return this.nombre + ' ' + this.apellido + ' ' + tel;
    }
}

let persona2={
    nombre="Juana",
    apellido="Pajares",
}

console.log(persona.nombreCompleto('Don. ','1111111'));
console.log(persona2.nombreCompleto());
//Las propiedades involucradas son las mismas...
//El call llama a la funcion de otro objeto sin necesidad de que esa funcion este en otro objeto
console.log(persona.nombreCompleto.call(persona2, 'Sra. ', '22222222'));
//El apply permite guardar las propiedades en un array y luego aplicarlo a un objeto
let array2 = ['Doña', '33333333'];
console.log(persona.nombreCompleto.apply(persona2, array2));