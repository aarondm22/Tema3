Number.prototype.moneda = function(){
    return this.toLocaleString(undefined, {style:'currency',currency:'EUR',
    usegrouping: true, minimumFractionDigits: 2, maximumFractionDigits: 2});
}

class Producto{
    static contadorProductos = 0;
    constructor(nombre,precio){
        this._idProducto = Producto.contadorProductos++;
        this._nombre = nombre;
        this._precio = precio;
    }

    get getIdProducto(){
        return this._idProducto;
    }

    get getNombre(){
        return this._nombre;
    }

    set setNombre(nombre){
        this._nombre = nombre;
    }

    get getPrecio(){
        return this._precio.moneda();
    }

    set setPrecio(precio){
        this._precio = precio;
    }

    toString(){
        return this.getNombre +" "+ this.getPrecio;
    }
}

Intl.NumberFormat(undefined)

let p1 = new Producto("Camiseta", 24.56);
let p2 = new Producto("Sudadera", 50.22);
p1.setPrecio=100;
p2.setNombre="Abrigo";
console.log(p1.toString()); 
console.log(p2.toString()); 

class Orden {
    static contadorOrdenes = 1;
    static contadorProductosAgregados = 0;
    constructor(){
        this._idOrden = Orden.contadorOrdenes++;
        this._productos = [];
    }

    get getIdOrden(){
        return this._idOrden;
    }

    static get MAX_PRODUCTOS(){
        return 5;
    }

    agregarProducto(prod = new Producto){
        if(Orden.contadorProductosAgregados < Orden.MAX_PRODUCTOS){
            Orden.contadorProductosAgregados++;
            this._productos.push(prod);
        }else{
            console.log("Ha superado el numero máximo de productos");
        }
    }

    get getProductos(){
        return this._productos;
    }

    calcularTotal(){
        let total = 0;
        for(let i=0;i<this._productos.length;i++){
            total += this._productos[i]._precio;
        }
        return total.moneda();
    }
    
    mostrarOrden(){
        //No consigo mostrar todos los productos del array productos
        for(let i=0;i<this.getProductos.length;i++){
            return " Orden: " +this.getIdOrden + "\n   · "+ this.getProductos[i].toString() +
            "\n ------------------- \n Total: "+ this.calcularTotal();
        }
    }
}

let orden1 = new Orden();
let o2 = new Orden();

orden1.agregarProducto(p2);
orden1.agregarProducto(p1);

o2.agregarProducto(p1);
o2.agregarProducto(p1);

console.log(orden1.mostrarOrden());
console.log(o2.mostrarOrden());

