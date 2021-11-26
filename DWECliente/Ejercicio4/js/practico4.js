class Computadora{
    static contadorComputadoras = 1;
    constructor(nombre, monitor, teclado, raton){
        this._idComputadora = Computadora.contadorComputadoras++;
        this._nombre = nombre;
        this._monitor = monitor;
        this._teclado = teclado;
        this._raton = raton;
    }

    set setMonitor(monitor){
        this._monitor = monitor;
    }

    set setTeclado(teclado){
        this._teclado = teclado;
    }

    set setRaton(raton){
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
        return "PC"+this._idComputadora.toLocaleString(undefined,{ minimumIntegerDigits: 4, useGrouping: false});
    }

    set setNombre(nombre){
        this._nombre = nombre;
    }


    toString(){
        let cuerpo1 = "-----------------------------------------\n";
        let pc = "PC id: "+this.getIdComputadora +" "+ this.getNombre + "\n";
        let componentes = "\n" + this.getMonitor.toString()
        + "\n" + this.getTeclado.toString() 
        + "\n" + this.getRaton.toString() +"\n";
        let pie = "**********************************************";
        return cuerpo1 + pc + cuerpo1 + componentes + pie;
    }
}


class Monitor{
    static contadorMonitores = 1;
    constructor(marca, tamaño){
        this._idMonitor = Monitor.contadorMonitores++;
        this._marca = marca;
        this._tamaño = tamaño;
    }

    get getIdMonitor(){
        return "M"+this._idMonitor.toLocaleString(undefined,{ minimumIntegerDigits: 4, useGrouping: false});
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
        return "Monitor nº: " +this.getIdMonitor +", Marca: "+ this.getMarca +", Tamaño: " +this.getTamaño+ " \" ";
    }
}

class DispositivoEntrada{
    constructor(tipoEntrada, marca){
        this._tipoEntrada = tipoEntrada;
        this._marca = marca
    }

    get getMarca(){
        return this._marca;
    }

    get getTipoEntrada(){
        return this._tipoEntrada;
    }

    set setMarca(marca){
        this._marca = marca;
    }

    set setTipoEntrada(tipoEntrada){
        this._tipoEntrada = tipoEntrada;
    }
}

class Raton extends DispositivoEntrada{
    static contadorRatones = 1;
    constructor(tipoEntrada, marca){
        super(tipoEntrada,marca);
        this._idRaton = Raton.contadorRatones++;
    }

    get getIdRaton(){
        return "R"+this._idRaton.toLocaleString(undefined,{ minimumIntegerDigits: 4, useGrouping: false});
    }

    toString(){
        return "Raton nº: " +this.getIdRaton +", Tipo: "+ super.getTipoEntrada +", Marca: " +super.getMarca;
    }
}

class Teclado extends DispositivoEntrada{
    static contadorTeclados = 1;
    constructor(tipoEntrada, marca){
        super(tipoEntrada,marca);
        this._idTeclado = Teclado.contadorTeclados++;
    }

    get getIdTeclado(){
        return "T"+this._idTeclado.toLocaleString(undefined,{ minimumIntegerDigits: 4, useGrouping: false});
    }

    toString(){
        return "Teclado nº: " +this.getIdTeclado +", Tipo: "+ super.getTipoEntrada +", Marca: " +super.getMarca;
    }
}



let pc1 = new Computadora("Dell Gaming TX", new Monitor("PH", 28), new Teclado("USB", "Razer"), new Raton("ps/2","Logitech"));
console.log(pc1.toString());
let pc2 = new Computadora("Hola");
let m1 = new Monitor("LG", 27);
let t1 = new Teclado("TC", "Teclado");
let r1 = new Raton("RA", "Raton");
pc2.setMonitor = m1;
pc2.setTeclado = t1;
pc2.setRaton = r1;
console.log(pc2.toString());