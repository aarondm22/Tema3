<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conexion PDO</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>Conexion PDO</h1>
    </header>
    <main>
        <?php
        require_once("./segura/datosBD.php");

        $dsn = "mysql:host=".IP.";dbname=".BBDD;
        try{
            $con = new PDO($dsn,USER,PASS);
            $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Todo ha ido que ni pintao";
            //Insertamos en la BBDD un usuario
            /*$sql = "insert into alumno values (10, 'Julio', 69)";
            $con->query($sql);
            */
            //Hacemos un select en la BBDD
            $sql = "select * from alumno";
            $result = $con->query($sql);
            while($row = $result->fetch()){
                echo "<pre>";
                print_r($row);
                echo "</pre>";
            }
        }catch(PDOException $ex){
            echo "Error: " .$ex->getMessage();
            echo "<br>Codigo: ".$ex ->getCode();
        }finally{
            unset($con);
        }

        ?>
        <br>
        <br>
        <a id="link" href="../index.html">
            <img src="../media/volver.svg">
            Volver al Tema 4
        </a>
    </main>
    <footer>
        ©Aarón de Diego Martín
    </footer>
</body>
</html>