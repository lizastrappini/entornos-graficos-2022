<?php
session_start();
$_SESSION['usuario'] = $_REQUEST['user'];
$_SESSION['clave'] = $_REQUEST['pass'];
?>
<html>

<head>
  <title></title>
</head>

<body>
  Se almacenaron dos variables de sesión.<br><br>
  <a href="recuperar.php">Ver variables de sesión</a>
</body>

</html>