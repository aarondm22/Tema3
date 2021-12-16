<?php

    session_start();
    session_destroy();
    echo "Ha cerrado la sesion";

?>
<br>
<a href="./login.php">Login</a>