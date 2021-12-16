
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

    obtenerPromesa1()
        .then(obtenerPromesa2())
        .then (obtenerPromesa3);
    obtenerPromesa3()
        .then(obtenerPromesa2())
        .then (obtenerPromesa3);
    obtenerPromesa1()
        .then(
            Promise.all([obtenerPromesa2(), obtenerPromesa3()])
            .then() 
        )
        .then(() => console.log('FINAL'));