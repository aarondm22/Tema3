function mitad (numerito){
    return new Promise((resolver, rechazar)=>{
        if(numerito % 2 === 0){
            resolver(numerito/2);
        }
        else{
            rechazar('Error el numero es impar');
        }
    });
}

mitad(4).then(console.log).catch(ex => console.log(ex));
mitad(3).then();
mitad(6).then();
mitad(3).catch(ex => console.log(ex));
mitad(3).then(console.log);
mitad(28).then(console.log);
