<?php
session_start();
?>
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php

//Captura datos desde el Form anterior
$vNombre= $_POST['nombre'];
$_SESSION['usuario']= $vNombre;
?>
<a href="sesiones.php">Ingresar a pagina principal</a>;
</body>
</html>