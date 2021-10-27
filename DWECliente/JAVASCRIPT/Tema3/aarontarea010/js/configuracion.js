function iniciar(){
    let dinero = localStorage.getItem("lsDinero");
    let apuesta = localStorage.getItem("lsApuesta");
    let sonido = localStorage.getItem("lsSonido");
    let fondo = localStorage.getItem("lsFondo");
    if(dinero==null){
        localStorage.setItem("lsDinero",50);
        dinero=50;
    }if(apuesta==null){
        localStorage.setItem("lsApuesta",5);
        apuesta=5;
    }if(sonido==null){
        localStorage.setItem("lsSonido",false);
        sonido=false;
    }if(fondo==null){
        localStorage.setItem("lsFondo","#431000");
        fondo="#431000";
    }
    document.getElementById("dineroRestante").value=dinero;
    document.getElementById("valorApuesta").value=apuesta;
    document.getElementById("sonidoElegido").value=sonido;
    document.getElementById("colorSelect").value=fondo;
}

function guardarRestante(){
    localStorage.setItem("lsDinero", document.getElementById("dineroRestante").value);
}

function guardarApostado(){
    localStorage.setItem("lsApuesta", document.getElementById("valorApuesta").value);
}

function guardarSonido(){
    localStorage.setItem("lsSonido", document.getElementById("sonidoElegido").value);
}

function guardarFondo(){
    localStorage.setItem("lsFondo", document.getElementById("colorSelect").value);
    document.getElementById("config-contenedor").style.backgroundColor 
}