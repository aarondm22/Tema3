
function draw(){
    const canvas = document.getElementById('lienzo');
    const ctx = canvas.getContext('2d');
    const valores = [10,20,50,20];

    var x = lienzo.width/2;
    var y = lienzo.height/2;
    var r = 75;
    
    ctx.beginPath();
    ctx.fillStyle = "#6ab150";
    ctx.arc(x, y, r, 0, Math.PI * 2 * (0.5));
    ctx.fill();
    ctx.stroke();

}

draw();