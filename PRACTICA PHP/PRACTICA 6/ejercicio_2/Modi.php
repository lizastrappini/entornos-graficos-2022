<head>
<title>Modificacion</title>
</head>
<body>
<?php
	include ("conexion.inc");
	
	//Captura datos desde el Form anterior
	$vCiudad = $_POST['nombre'];
	$vPais = $_POST['pais'];
	$vHabitantes = $_POST['habitantes'];
	$vSuperficie = $_POST['superficie'];
	$vMetro = $_POST['metro'];
	//Arma la instrucción SQL y luego la ejecuta
	$vSql = "UPDATE ciudades set nombre='$vCiudad', pais='$vPais', habitantes='$vHabitantes', superficie='$vSuperficie', tieneMetro='$vMetro' where
	nombre='$vCiudad'";
	mysqli_query($link,$vSql) or die (mysqli_error($link));
	echo("La ciudad fue Modificada<br>");
	echo("<A href= 'index.html'>Volver al Menu del ABM</A>");
	
	// Cerrar la conexion
	mysqli_close($link);
?>
</body>
</html>