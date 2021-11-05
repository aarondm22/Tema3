function Persona (nombre, apellido,edad=23){
    this.nombre=nombre;
    this.apellido=apellido;
    this.edad=edad;
    this.nombreCompleto = function(){
        return (this.nombre + ' ' + this.apellido).toUpperCase();
    }
}

//Con prototype todos los objetos creados tendran la propiedad que le demos con prototype
Persona.prototype.pelo='rubia';
let madre= new Persona ('Ana','Macías');
let padre= new Persona('Manuel','Lara',42);

padre.tel='55544212';

console.log(madre.pelo);
console.log(padre);
console.log(madre);
console.log(madre);
for (nombrePropiedad in madre){
    console.log(madre[nombrePropiedad]);
}