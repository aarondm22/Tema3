<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
</head>
<body>
    <header>
        <h1>Formulario</h1>
    </header>
    <main>
        <div id="content">
            <div id="title">
                <h1>DWES</h1>
                <h2>Desarrollo de Aplicaciones Web </h2>

                <form action="./procesa.php" method="post" name="formulario">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre">
                    <br>
                    <br>
                    <label for="pass">Contraseña</label>
                    <input type="password" name="pass" id="pass">
                    <br>
                    <br>
                    <label>Género</label>
                    <input type="radio" name="genero" id="masculino" value="masculino"><label for="masculino">Masculino</label>
                    <input type="radio" name="genero" id="femenino" value="femenino"><label for="femenino">Femenino</label>
                    <br>
                    <br>
                    <label for="curso">Ciclo:</label>
                    <select name="curso" id="curso">
                        <option value="dam">DAM</option>
                        <option value="daw">DAW</option>
                    </select>
                    <br>
                    <br>
                    <label> Aficiones: </label>
                        <input type="checkbox" name="aficiones[]" id="futbol" value="futbol"><label for="futbol">Futbol</label>
                        <input type="checkbox" name="aficiones[]" id="bar" value="bar"><label for="bar">Bar</label>
                        <input type="checkbox" name="aficiones[]" id="dormir" value="dormir"><label for="bar">Dormir</label>
                        <input type="checkbox" name="aficiones[]" id="lol" value="lol"><label for="lol">LoL</label>
                    <br>
                    <br>
                    <input type="submit" value="Enviar">
                    <input type="reset" value="Limpiar formulario">
                </form>
            </div>  
        </div>
    </main>
    <footer>
        ©Aarón de Diego Martín
    </footer>
</body>
</html>