<html>
<head>
<title>Baja</title>
</head>
<body>
<?php
    include ("conexion.inc");
    $vCiudad = $_POST ['ciudad'];
    $vSql = "SELECT id FROM ciudades WHERE nombre='$vCiudad' ";
    $vResultado = mysqli_query($link, $vSql);
    if(mysqli_num_rows($vResultado) == 0)
    {
         echo ("Ciudad Inexistente...!!! <br>");
         echo ("<A href='FormBajaIni.html'>Continuar</A>");
    }
        else{
    //Arma la instrucción SQL y luego la ejecuta
            
            $vSql= "DELETE FROM ciudades WHERE nombre = '$vCiudad' ";
            mysqli_query($link, $vSql);
            echo("La ciudad fue Borrado<br>");
            echo("<A href='index.html'>Volver al Menu del ABM</A>");
    }
    
    // Liberar conjunto de resultados
    mysqli_free_result($vResultado);
    
    // Cerrar la conexion
    mysqli_close($link);
?>
</body>
</html>