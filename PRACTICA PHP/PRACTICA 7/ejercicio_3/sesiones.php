
<html>
<head>
<title>Sesiones</title>
<?php
session_start();
	if (isset($_SESSION['usuario'])){

		$Nombre=$_SESSION['usuario'];
	}
	else{
		$Nombre="";
	}
?>
</head>
<body>
	<form action="pagina2.php" method="post">
	Ingrese nombre de usuario:
	<input type="text" name="nombre" value="<?php echo($Nombre);?>" >
	<br>
	<input type="submit" value="buscar">
	</form>
</body>
</html>