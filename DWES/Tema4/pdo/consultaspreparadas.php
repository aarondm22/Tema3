<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consultas Preparadas</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>Consultas preparadas</h1>
    </header>
    <main>
        <?php
        //Consultas preparadas
        require_once("./segura/datosBD.php");

        $dsn = "mysql:host=".IP.";dbname=".BBDD;
        try{
            $con = new PDO($dsn,USER,PASS);
            $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Todo ha ido que ni pintao";
            //Insertamos en la BSE un usuario
            $preparada = $con -> prepare("insert into alumno values (?,?,?)");

            /* ----- FORMA 1 ------ */ 
            //Crear el array antes (para arrays)
                //$arrayparametros = array(123,"Viernes",35);
            //O crearlo en el execute
                //$preparada -> execute($arrayparametros);

            /* ----- FORMA 2 ------ */ 
            //Crear el bindparam para
                //$id = 124;
                //$nombre = "Sabado";
                //$edad = 36;
                //$preparada->bindParam(1,$id);
                //$preparada->bindParam(2,$nombre);
                //$preparada->bindParam(3,$edad);
                //$preparada -> execute();
            /* ----- FORMA 3 ------ */
            //Con nombre en la consulta preparada
                //$preparada2 = $con -> prepare("select * from alumno where nombre like :nombre"); //:nombre funciona como el ?
                //$nombrelike = "%ri%";
                //$preparada2->bindParam(":nombre", $nombrelike);
                //$preparada2->execute();
                //$preparada2->bindColumn(1,$id); //Análogo al bind_result del mysqli
                //$preparada2->bindColumn(2,$nombre);
                //echo "<br>Filas devueltas: ".$preparada2->rowCount(); //Número de filas que te devuelve la consulta
                //while($row = $preparada2->fetch()){
                    //echo "<br>" .$id.":".$nombre.":".$row[2];
                //}

            /* ----- TRANSACCIONES ----- */ 
                $con -> beginTransaction();
                $arrayparametros = array(
                    array(130,"Lune",35),
                    array(131,"Marte",35),
                    array(132,"Miercole",35),
                    array(123,"Jueve",35)
                );
            //Insertar 4 valores
                foreach ($arrayparametros as $value) {
                    $preparada->execute($value);
                }
            //Si todo ha ido bien hace un commit
                $con-> commit;
        }catch(PDOException $ex){
                $con->rollBack();
            echo "<br>Error: " .$ex->getMessage();
            echo "<br>Codigo de error: ".$ex ->getCode();
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