const promesaResuelta = Promise.resolve('bien');
const promesaRechazada = Promise.reject('mal');

promesaResuelta.then(console.log);

//Ambos valen 
promesaRechazada.catch(console.log);
promesaRechazada.catch(ex => console.log(ex));