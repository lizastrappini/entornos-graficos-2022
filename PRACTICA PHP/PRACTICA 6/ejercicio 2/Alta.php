<html>
<head>
<title>Alta Usuario</title>
</head>
<body>
<?php
    include("conexion.inc");
    
    //Captura datos desde el Form anterior
    
    $vCiudad = $_POST['ciudad'];
    $vPais = $_POST['pais'];
    $vHabitantes = $_POST['habitantes'];
    $vSuperficie = $_POST['superficie'];
    $vMetro = $_POST['metro'];
    //Arma la instrucción SQL y luego la ejecuta
    
    $vSql = "SELECT Count(id) as canti FROM ciudades WHERE nombre='$vCiudad' and pais='$vPais'";
    $vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
    $vCantCiudades = mysqli_fetch_assoc($vResultado);
    
    //$vCantCiudades = mysqli_result($vResultado, 0);
    
    if ($vCantCiudades ['canti']!=0){
        echo ("La ciudad ya Existe<br>");
        echo ("<A href='Menu.html'>VOLVER AL ABM</A>");
    }
    else {
    $vSql = "INSERT INTO ciudades (nombre, pais, habitantes, superficie, tieneMetro)
    values ('$vCiudad','$vPais', '$vHabitantes', '$vSuperficie', '$vMetro')";
    mysqli_query($link, $vSql) or die (mysqli_error($link));
    echo("La ciudad fue Registrada<br>");
    echo ("<A href='index.html'>VOLVER AL MENU</A>");

    // Liberar conjunto de resultados
    
    mysqli_free_result($vResultado);
    }
    
    // Cerrar la conexion
    mysqli_close($link);
?>
</body></html>