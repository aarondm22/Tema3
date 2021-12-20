let contador = 0;
const enlaces = document.getElementsByTagName("a");
console.log(`Numero de enlaces de la pagina: ${enlaces.length}`);
console.log(enlaces[enlaces.length-2].href);
for (let i = 0; i < enlaces.length; i++) {
    //console.log(enlaces[i].href);
    if(enlaces[i].href === "http://prueba/")
        contador++;
}
console.log(`Numero de enlaces que enlazan a prueba: ${contador}`);
const tercero = document.getElementsByTagName("p");
console.log(tercero);