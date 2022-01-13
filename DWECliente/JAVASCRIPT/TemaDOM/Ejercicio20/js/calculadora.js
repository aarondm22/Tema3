
function sumar(){
    let opA = document.getElementById("operandoA").value;
    let opB = document.getElementById("operandoB").value;
    let suma = parseFloat(opA) + parseFloat(opB);
    let resul = document.getElementById("suma");
    resul.innerHTML = `El resultado es ${suma}`;
}