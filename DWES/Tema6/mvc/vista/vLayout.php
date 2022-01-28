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
        <!-- Aqui mostrar un boton de Ir al Login si no esta logueado y dos botones, uno de perfil y otro de logout -->
        <?php
            if(isset($_SESSION['validada'])){
                if(($_SESSION['perfil']) == 'admini'){
                    ?>
                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                        <input type="submit" value="Admin Usuario" name="usuarios">
                    </form>
                    <?php
                }
            }
            if(isset($_SESSION['validada'])){
                echo "<p>".$_SESSION['nombre']."</p>";
                ?>
                 <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                    <input type="submit" value="Mi Perfil" name="perfil">
                    <input type="submit" value="Logout" name="logout">
                 </form>
                <?php
            }else{
                ?>
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                    <input type="submit" value="Login" name="login">
                </form>
                <?php
            }
           
        ?>
    </header>
    <main class="container">
        <div class="row">
            <?php
                //Si no tiene ninguna vista nos manda al login 
                if(!isset($_SESSION['vista'])){
                    require $vistas['inicio'];
                //Si hay alguna vista cargada desde el controlador, la carga
                }else{
                    require $_SESSION['vista'];
                }
            ?>
        </div>
    </main>
    <footer class="text-center">
        Derechos de Autor Aarón de Diego
    </footer>
</body>
</html>