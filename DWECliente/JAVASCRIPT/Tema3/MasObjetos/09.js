//Constructor
function Persona (nombre, apellido,edad=23){
    this.nombre=nombre;
    this.apellido=apellido;
    this.edad=edad;
    this.nombreCompleto = function(){ //metodo
        return (this.nombre + ' ' + this.apellido).toUpperCase();
    }
}

let madre= new Persona ('Ana','Macías');
let padre= new Persona('Manuel','Lara',42);
console.log(padre);
console.log(padre.nombreCompleto());
console.log(madre.nombreCompleto());

console.log(madre);

madre.edad=48;
console.log(madre);
console.log(padre);