<?php
session_start();
?>
<html>

<head>
    <title>Recuperar</title>
</head>

<body>
    <?php
    echo "Nombre de usuario recuperado :" . $_SESSION['usuario'];
    echo "<br><br>";
    echo "Clave recuperada :" . $_SESSION['clave'];
    ?>
</body>

</html>