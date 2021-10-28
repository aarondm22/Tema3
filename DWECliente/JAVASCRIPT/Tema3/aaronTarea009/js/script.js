function mostrarDatos() {
    var texto = document.getElementById("texto");
    texto.innerHTML = "";
    for (var i = 0; i < sessionStorage.length; i++) {
      var animal = sessionStorage.key(i);
      texto.innerHTML += animal + " : " + i;
      console.log(animal+i);
    }
}

let congato = 0;
let conperro = 0;
let concaballo = 0;

function aumentar(animal){
    animal.style.width = "500px";
    let idanimal = animal.id;
    setTimeout(function(){restaurar(animal)},1000);

    sessionStorage.setItem("ultimoClic", idanimal);
    mostrarUltimo(); 
    let veces = sessionStorage.getItem(idanimal);
    veces++;
    sessionStorage.setItem(idanimal, veces);
    mostrarTodos();
}

function mostrarUltimo(){
    document.getElementById("texto").innerHTML = "Ultimo en clicar: "+ sessionStorage.getItem("ultimoClic");
}

function mostrarTodos(){
    document.getElementById("gatocon").innerHTML = "Gato: " + sessionStorage.getItem("gato")+ " veces";
    document.getElementById("perrocon").innerHTML = "Perro: " + sessionStorage.getItem("perro")+ " veces";
    document.getElementById("caballocon").innerHTML = "Caballo: " + sessionStorage.getItem("caballo")+ " veces";
}

function restaurar(animal){
    animal.style.width="";
}


