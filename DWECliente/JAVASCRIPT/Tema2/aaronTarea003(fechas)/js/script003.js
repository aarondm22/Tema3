
function diaDeSemanaIda(){ 
    var dia=new Date(document.getElementById("ida").value);
    var diadesemana=  ["Domingo", "Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"];
    var letraDia = diadesemana[dia.getDay()];
    document.getElementById("ida").innerHTML=letraDia;
    document.getElementById("p1").innerHTML=letraDia +" " +document.getElementById("ida").value;              
}

document.getElementById("ida").addEventListener("blur",diaDeSemanaIda,false);

function diaDeSemanaVuelta(){ 
    var dia=new Date(document.getElementById("vuelta").value);
    var diadesemana=  ["Domingo", "Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"];
    var letraDia = diadesemana[dia.getDay()];
    document.getElementById("vuelta").innerHTML=letraDia;
    document.getElementById("p2").innerHTML=letraDia +" " +document.getElementById("vuelta").value;              
}

document.getElementById("vuelta").addEventListener("blur",diaDeSemanaVuelta,false);

function diferencia(){
    var fecha = new Date(document.getElementById("ida").value);
    var fecha2 = new Date(document.getElementById("vuelta").value);
    var diferenciaHoras = fecha2 - fecha;
    var total = 1000*60*60*24;
    var diferenciaDias = diferenciaHoras/total;
    document.getElementById("dif").innerHTML= "Hay " +diferenciaDias+" dias entre las dos fechas"; 
}
