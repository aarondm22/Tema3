const FECHA_ANTIGUA = "Wed Oct 20 1975 20:33:14 GMT+0200"
let hoy = new Date();

document.cookie ="gatoVisto=olet; expires="+FECHA_ANTIGUA;

function cm(){
    let cookieValor = document.cookie.replace(/(?:(?:^|.*;\s*)gatoVisto\s*\=\s*([^;]*).*$)|^.*$/, "$1");
    console.log(cookieValor);
    if(cookieValor=="si")
        window.alert("Has hecho click en el gato");
}

function aumentar(animal){
    if(animal.id=="gato")
        document.cookie = "gatoVisto=si; max_age=24*60*60*1000";
    else if(animal.id=="perro")
        document.cookie = "perroVisto=si; max_age=24*60*60*1000";
    else if(animal.id=="caballo")
        document.cookie = "caballoVisto=si; max_age=24*60*60*1000";
    animal.style.width = "500px";
    setTimeout(function(){restaurar(animal)},1000);
    let valorCookie= animal.id;
    document.cookie="animal = " + valorCookie;
    document.getElementById("texto").innerHTML = document.cookie;
}

function restaurar(animal){
    animal.style.width="";
}


