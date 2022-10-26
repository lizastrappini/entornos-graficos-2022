<?php
session_start();
include("conexion.inc");
$registros = mysqli_query($link, "select codigo, nombre, codigocurso
                        from alumnos where mail='$_POST[mail]'") or
  die(mysqli_error($link));

if ($fila = mysqli_fetch_array($registros)) {
  $_SESSION['usuario'] = $fila['nombre'];
} 
?>
<html>

<head>
  <title></title>
</head>

<body>
  <a href="bienvenido.php">Verificar</a>
</body>

</html>
