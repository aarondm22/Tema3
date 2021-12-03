//Exigir al programador utilizar let o var en las variables declaradas
"use strict";

Number.prototype.cuatroDigitos = function(){
    return this.toLocaleString(undefined,{ minimumIntegerDigits: 4, useGrouping: false});
}

class Computadora{
    static contadorComputadoras = 0;
    constructor(nombre, monitor, teclado, raton){
        //Almacenado en el constructor sin necesidad del get
        this._idComputadora = 'PC'+ (++Computadora.contadorComputadoras).cuatroDigitos();
        this._nombre = nombre;
        this._monitor = monitor;
        this._teclado = teclado;
        this._raton = raton;
    }

    set setNombre(nombre){
        this._nombre = nombre;
    }

    set monitor(monitor){
        this._monitor = monitor;
    }

    set teclado(teclado){
        this._teclado = teclado;
    }

    set raton(raton){
        this._raton = raton;
    }

    get getMonitor(){
        return this._monitor;
    }

    get getRaton(){
        return this._raton;
    }

    get getTeclado(){
        return this._teclado;
    }

    get getNombre(){
        return this._nombre;
    }

    get getIdComputadora(){
        return this._idComputadora;
    }

    toString(){
        let cabecera = ('-').repeat(50)+"\n";
        let pc = "PC id: "+this.getIdComputadora +" "+ this.getNombre + "\n";
        let componentes = "\n" + this.getMonitor.toString()
        + "\n" + this.getTeclado.toString() 
        + "\n" + this.getRaton.toString() +"\n";
        let pie = ('*').repeat(50);
        return cabecera + pc + cabecera + componentes + pie;
    }
}


class Monitor{
    static contadorMonitores = 0;
    constructor(marca, tamaño){
        this._idMonitor = "M"+ (++Monitor.contadorMonitores).cuatroDigitos();
        this._marca = marca;
        this._tamaño = tamaño;
    }

    get getIdMonitor(){
        return this._idMonitor;
    }

    set setMarca(marca){
        this._marca = marca;
    }

    set setTamaño(tamaño){
        this._tamaño = tamaño;
    }

    get getMarca(){
        return this._marca;
    }

    get getTamaño(){
        return this._tamaño;
    }

    toString(){
        return "Monitor nº: " +this.getIdMonitor +", Marca: "+ this.getMarca +", Tamaño: " +this.getTamaño+ "\"";
    }
}

class DispositivoEntrada{
    constructor(tipoEntrada, marca){
        this._tipoEntrada = tipoEntrada;
        this._marca = marca;
    }

    get getMarca(){
        return this._marca;
    }

    get getTipoEntrada(){
        return this._tipoEntrada;
    }

    set setMarca(marca){
        this._marca = marca.primera();
    }

    set setTipoEntrada(tipoEntrada){
        this._tipoEntrada = tipoEntrada.toString();
    }

    //Obtener la primera palabra de la marca
    primera(){
        let primeraPalabra = this.getMarca.split(" ");
        return primeraPalabra[0];
    }
}

class Raton extends DispositivoEntrada{
    static contadorRatones = 0;
    constructor(tipoEntrada, marca){
        super(tipoEntrada,marca);
        this._idRaton = "R"+ (++Raton.contadorRatones).cuatroDigitos();
    }

    get getIdRaton(){
        return this._idRaton;
    }

    toString(){
        //super.primera() muestra solo la primera palabra de la marca
        return "Raton nº: " +this.getIdRaton +", Tipo: "+ super.getTipoEntrada +", Marca: " +super.primera();
    }
}

class Teclado extends DispositivoEntrada{
    static contadorTeclados = 0;
    constructor(tipoEntrada, marca){
        super(tipoEntrada,marca);
        this._idTeclado = "T"+ (++Teclado.contadorTeclados).cuatroDigitos();
    }

    get getIdTeclado(){
        return this._idTeclado;
    }

    toString(){
        //super.primera() muestra solo la primera palabra de la marca
        return "Teclado nº: " +this.getIdTeclado +", Tipo: "+ super.getTipoEntrada +", Marca: " +super.primera();
    }
}

class Orden{
    static contadorOrdenes = 0;
    constructor(){
        this._idOrden = (++Orden.contadorOrdenes).cuatroDigitos();
        this._computadoras = [];
    }

    agregarComputadora(comp){
        this._computadoras.push(comp);
    }

    get getIdOrden(){
        return this._idOrden;
    }

    get getComputadora(){
        return this._computadoras;
    }

    toString(){
        let encabezado = ('=').repeat(19) +" Orden:"+this.getIdOrden + " "+('=').repeat(19)+ "\n";
        let pc = "";
        for (let computadora of this.getComputadora){
            pc += '\n' + computadora.toString();
        }
        let fin = "\n"+('=').repeat(23)+" FIN "+('=').repeat(23);
        return encabezado + pc + fin ;
    }

    mostrarOrden(){
        return this.toString();
    }
}



let pc1 = new Computadora("Dell Gaming TX", new Monitor("PH", 28), new Teclado("USB", "Razer Ornata"), new Raton("ps/2","Logitech Turned"));
let pc2 = new Computadora("Hola");
let m1 = new Monitor("LG", 27);
let t1 = new Teclado("TC", "Teclado Guapo");
let r1 = new Raton("RA", "Raton Mouse");
pc2.monitor = m1;
pc2.teclado = t1;
pc2.raton = r1;

let o1 = new Orden();
let o2 = new Orden();

o1.agregarComputadora(pc1);
o1.agregarComputadora(pc2);
o1.agregarComputadora(pc2);

o2.agregarComputadora(pc1);
o2.agregarComputadora(pc2);

console.log(o1.mostrarOrden());
console.log(o2.mostrarOrden());