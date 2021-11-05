function Coche(modelo, color, kms, combustible){
    this.modelo=modelo;
    this.color=color;
    this.kms=kms;
    this.combustible=combustible;
    this.setModelo = function(nuevomodelo) {
        this.modelo=nuevomodelo;
    }

    this.getModelo = function(){
        return this.modelo;
    }
    this.avanza = function(kms){
        this.kms+=kms;
    }
}

let elmio= new Coche();
elmio.setModelo("Ferrari");
console.log(elmio.getModelo());
elmio.color="azul";
console.log(elmio);
console.log(elmio.color);
elmio.kms=0;
elmio.avanza(15);
console.log(elmio.kms);