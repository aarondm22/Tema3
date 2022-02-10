
//otra forma de hacer promesas
//let mipromesa = fetch('http://10.1.160.108/DWECliente/JAVASCRIPT/Tema4/Promesas/index.html');
let promesacasa1 = fetch('http://127.0.0.1:5501/DWECliente/JAVASCRIPT/Tema4/Promesas/index.html');
let promesacasa2 = fetch('http://127.0.0.1:5501/DWECliente/JAVASCRIPT/Tema4/Promesas/pepe.html');

promesacasa1.then(respuesta=>console.log(respuesta));
promesacasa2.then(respuesta=>console.log(respuesta));


let espera = (tiempo, valor) => new Promise(
    (resolver) => ( setTimeout(()=>resolver(valor,tiempo),tiempo)),

    (rechazar) => (console.log('error'))
)

const p1 = espera(5000,'uno');
const p2 = espera(6000,'dos');
const p3 = espera(1000,'tres');

//Async devuelve una promesa, es la unica forma de poner await, pero se puede omitir await
const ejecutar = async () => {
    //Await espera a que los tres procesos esten resueltos tarda 3 segundos en este caso
    let valores = await Promise.all([p1,p2,p3]);
    console.log(valores);
    console.log('final');
}

ejecutar();
console.log('iniciao');