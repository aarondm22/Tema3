
Number.prototype.moneda = function(){
    return this.toLocaleString(undefined, {style:'currency',currency:'EUR',
    usegrouping: true, minimumFractionDigits: 2, maximumFractionDigits: 2});
}

//return Intl.NumberFormat(undefined, {style: "currency", useGrouping: true, currency:""})

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
        return this._precio;
    }

    set setPrecio(precio){
        this._precio = precio;
    }

    toString(){
        return this.getNombre +" "+ this.getPrecio;
    }
}

let p1 = new Producto("Camiseta", 24.56);
let p2 = new Producto("Sudadera", 50.22);
console.log(p1.toString()); 
console.log(p2.toString()); 

class Orden {
    static contadorOrdenes = 0;
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

    agregarProducto(prod){
        if(Orden.contadorProductosAgregados < Orden.MAX_PRODUCTOS){
            Orden.contadorProductosAgregados++;
            prod = new Producto();
            this._productos.push(prod);
        }else{
            console.log("Ha superado el numero máximo de productos");
        }
    }

    calcularTotal(){
        let total = 0;
        for(let i=0;i<this._productos.length;i++){
            let prod = new Producto();
            total += this._productos[i].precio;
        }
        return total;
    }
    
    mostrarOrden(){
       /* let orden = "Orden "+ this.getIdOrden;
        for(let i=0;i<this._productos.length;i++){
            r
        }*/
        return "Orden "+ this.getIdOrden + Producto.toString() + "Total: "+ this.calcularTotal();
    }
}

let orden1 = new Orden();
p1.setPrecio=100;
p2.setNombre="Abrigo";
orden1.agregarProducto(p1);
orden1.agregarProducto(p2);
orden1.calcularTotal();
console.log(orden1.calcularTotal())

