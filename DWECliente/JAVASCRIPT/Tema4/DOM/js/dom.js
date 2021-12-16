console.log("Empezamos el DOM");

console.log(document.getElementById('hola1'));
console.log(document.getElementById('hola1').innerHTML);
console.log(document.getElementById('hola1').innerText);
console.log(document.getElementById('hola1').textContent);

document.getElementById('hola1').innerHTML = "Adios";
document.getElementById('hola2').innerHTML = "Majo";

let parrafos = document.getElementsByTagName("p");
console.log(parrafos.length);
console.log(parrafos[0].innerHTML);
console.log(parrafos[0].innerText);
console.log(parrafos[0].textContent = "Wue");

for (let i = 0; i < parrafos.length; i++) {
    console.log(parrafos[i].innerHTML);
}