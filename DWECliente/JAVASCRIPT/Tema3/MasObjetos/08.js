let persona = {
    nombre: 'Juan',
    apellido:"Perez",
    email:'jperez@mail.com',
    edad: 23,
    inciales: 'jp',

    get siglas(){
        return this.inciales.toUpperCase();
    },

    set siglas(arg1){
        this.inciales= arg1.toUpperCase();
    }

}

//El = llama al metodo set
persona.inicales="abc";
//persona.iniciales llama al metodo get
console.log(persona.inicales);



console.log(persona.siglas);
persona.siglas="abc";
console.log(persona.inciales);
console.log(persona.siglas);
