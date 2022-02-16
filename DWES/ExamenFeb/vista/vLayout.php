<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MVC</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header class="navbar">
        <h1>MVC</h1>
        <!-- Aqui mostrar un boton de Generar aleatorio si no esta logueado y dos botones, uno de perfil y otro de logout -->
        <?php
            if(isset($_SESSION['validada'])){
                if(($_SESSION['perfil']) == 'admin'){
                    ?>
                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                        <input type="submit" value="generar" name="generar">
                    </form>
                    <?php
                }
            }
            if(isset($_SESSION['validada'])){
                echo "<p>".$_SESSION['nombre']."</p>";
                echo "<h1>Examen Febrero</h1>";
                ?>
                 <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                    <?php
                        for ($i=0; $i < 50; $i++) { 
                            ?>
                            <input class="oculto" type="checkbox" name="a" id="a">
                            <label for="id"$i><?$i?></label>
                            <?php
                        }
                        ?>
                    <input type="submit" value="Logout" name="logout">
                 </form>
                 <footer>Examen</footer>
                <?php
            }
        ?>
    </header>
    <main class="container">
        <div class="row">
            <?php
                //Si tiene vista porque entra con el usuario
                if(isset($_SESSION['vista']))
                    require $vistas['vista'];
            ?>
        </div>
    </main>
    <footer class="text-center">
        Derechos de Autor Aarón de Diego
    </footer>
</body>
</html>