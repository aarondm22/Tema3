function obtenerPromesa1() {
    return new Promise((resolve, reject) => {
      // aquí procesos asíncronos
      console.log("uno");
      resolve('miResultado');
    });
  }
  
  function obtenerPromesa2() {
    return new Promise((resolve, reject) => {
      // aquí procesos asíncronos
      console.log("dos");
      resolve('miResultado');
    });
  }
  
  function obtenerPromesa3() {
    return new Promise((resolve, reject) => {
      // aquí procesos asíncronos
      console.log("tres");
      resolve('miResultado');
    });
  }
  obtenerPromesa1() //1 posicion
    .then(obtenerPromesa2()) //2 posicion
    .then(obtenerPromesa3); // 8 posicion
 
  obtenerPromesa3() //3 posicion
    .then(obtenerPromesa2) //7 posicion
    .then(obtenerPromesa3);//Ultima posicion
 
  obtenerPromesa1() //4 posicion
  .then(
    Promise.all([obtenerPromesa2(), obtenerPromesa3()]) //5 y 6 posicion
    .then() 
  )
  .then(() => console.log('FINAL'));

  //1 2 4 1 2 3 4 2 3 Final 3
  //1 2 3 1 2 3 2 3 Final 3