
function draw(){
    const canvas = document.getElementById('lienzo');
    const ctx = canvas.getContext('2d');
    const valores = [10,20,40,30];

    

    //Porcentaje Amarillo Sobresaliente 10
    ctx.beginPath();
    ctx.fillStyle = "yellow";
    ctx.moveTo(300,200);
    ctx.arc(300, 200, 80, 0, Math.PI * 2 * (valores[0]/100));
    ctx.fill();
    ctx.fillStyle = "black";
    ctx.fillText("10", 350,220);
    ctx.fillStyle = "yellow";
    ctx.fillText("Sobresaliente", 400,230);
    ctx.stroke();

    //Porcentaje azul Suspenso 20
    ctx.beginPath();
    ctx.fillStyle = "blue";
    ctx.moveTo(300,200);
    ctx.arc(300, 200, 80, Math.PI * 2 * (valores[0]/100), Math.PI * 2 * (valores[0]/100) +  Math.PI * 2 * (valores[1]/100));
    ctx.fill();
    ctx.fillStyle = "white";
    ctx.fillText("20", 330,260);
    ctx.fillStyle = "blue";
    ctx.fillText("Suspenso", 330,290);
    ctx.stroke();

    //Porcentaje rojo Aprobado 40
    ctx.beginPath();
    ctx.fillStyle = "red";
    ctx.moveTo(300,200);
    ctx.arc(300, 200, 80, Math.PI * 2 * (valores[0]/100) +  Math.PI * 2 * (valores[1]/100), Math.PI * 2 * (valores[0]/100) + Math.PI * 2 * (valores[1]/100) + Math.PI * 2 * (valores[2]/100) ,false);
    ctx.fill();
    ctx.fillStyle = "black";
    ctx.fillText("40", 240,210);
    ctx.fillStyle = "red";
    ctx.fillText("Aprobado", 160,200);
    ctx.stroke();

    //Porcentaje verde Notable 30
    ctx.beginPath();
    ctx.fillStyle = "green";
    ctx.moveTo(300,200);
    ctx.arc(300, 200, 80, Math.PI * 2 * (valores[0]/100) +  Math.PI * 2 * (valores[1]/100) + Math.PI * 2 * (valores[2]/100), 0 ,false);
    ctx.fill();
    ctx.fillStyle = "black";
    ctx.fillText("30", 340,180);
    ctx.fillStyle = "green";
    ctx.fillText("Notable", 390,170);
    ctx.stroke();

    //Linea vertical del grafico
    ctx.beginPath();
    ctx.moveTo(200,350);
    ctx.lineTo(200,500);
    ctx.lineWidth = 2;
    ctx.stroke();
    ctx.closePath();

    //Linea horizontal grafico
    ctx.beginPath();
    ctx.moveTo(200,500);
    ctx.lineTo(600,500);
    ctx.lineWidth = 2;
    ctx.stroke();
    ctx.closePath();

    //Linea horizontal grafico 1ª
    ctx.beginPath();
    ctx.moveTo(200,470);
    ctx.lineTo(600,470);
    ctx.lineWidth = 1;
    ctx.stroke();
    ctx.closePath();

    //Linea horizontal grafico 2ª
    ctx.beginPath();
    ctx.moveTo(200,440);
    ctx.lineTo(600,440);
    ctx.lineWidth = 1;
    ctx.stroke();
    ctx.closePath();

    //Linea horizontal grafico 3ª
    ctx.beginPath();
    ctx.moveTo(200,410);
    ctx.lineTo(600,410);
    ctx.lineWidth = 1;
    ctx.stroke();
    ctx.closePath();

    //Linea horizontal grafico 4ª
    ctx.beginPath();
    ctx.moveTo(200,380);
    ctx.lineTo(600,380);
    ctx.lineWidth = 0.5;
    ctx.stroke();
    ctx.closePath();

    //Numeros grafico
    ctx.font = "13pt Arial";
    ctx.fillStyle = "black";
    ctx.fillText("10", 610,480);
    ctx.fillStyle = "black";
    ctx.fillText("20", 610,450);
    ctx.fillStyle = "black";
    ctx.fillText("30", 610,420);
    ctx.fillStyle = "black";
    ctx.fillText("40", 610,390);

    //Colores APROBADO, NOTABLE, SUSPENSO, SOBRESALIENTE
    ctx.fillStyle = "yellow";
    ctx.fillText("Sobresaliente", 200,520);
    ctx.fillStyle = "blue";
    ctx.fillText("Suspenso", 310,520);
    ctx.fillStyle = "red";
    ctx.fillText("Aprobado", 400,520);
    ctx.fillStyle = "green";
    ctx.fillText("Notable", 490,520);
    ctx.stroke();

    //Rellenar grafico Amarillo
    ctx.beginPath();
    ctx.fillStyle = "yellow";
    ctx.fillRect(220,499,60,-29);

    //Rellenar grafico Azul
    ctx.beginPath();
    ctx.fillStyle = "blue";
    ctx.fillRect(320,499,60,-59);

    //Rellenar grafico Rojo
    ctx.beginPath();
    ctx.fillStyle = "red";
    ctx.fillRect(410,499,60,-119);

    //Rellenar grafico Verde
    ctx.beginPath();
    ctx.fillStyle = "green";
    ctx.fillRect(490,499,60,-89);
}

draw();