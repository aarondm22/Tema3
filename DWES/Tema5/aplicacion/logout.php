<?php

    session_start();
    session_destroy();
    echo "Ha cerrado la sesion";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
</head>
<body>
    <?php

        session_start();
        session_destroy();
        echo "Ha cerrado la sesion";
        
    ?>
    <br>
    <a href="./login.php">Login</a>
</body>
</html>

