<?php
session_start();
?>
<html>

<head>
    <title></title>
</head>

<body>
    <?php

    if (isset($_SESSION['usuario'])) {
        echo "Bienvenido " . $_SESSION['usuario'];
    } else {
        echo "No tiene permitido visitar esta página.";
    }

    ?>
</body> 
    <a href="index.html">Ingresar a pagina principal</a>;
</html>