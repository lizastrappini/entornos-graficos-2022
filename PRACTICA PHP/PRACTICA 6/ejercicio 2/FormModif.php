<title>Modificacion</title>
</head>
<boby>
<?php
    include ("conexion.inc");
    //Captura datos desde el Form anterior
    $vCiudad = $_POST['ciudad'];
    //Arma la instrucción SQL y luego la ejecuta
    $vSql = "SELECT * FROM ciudades WHERE nombre ='$vCiudad' ";
    $vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
    $fila = mysqli_fetch_array($vResultado);
    if(mysqli_num_rows($vResultado) == 0) {
        echo ("Ciudad Inexistente...!!! <br>");
        echo ("<A href='FormModiIni.html'>Continuar</A>");
    }
        else{
?>
            <FORM action="Modi.php" method="POST" name="FormModi">
            <table width="356">
            <tr>
                 <td width="103"> Nombre: </td>
                 <td width="243"> <input type="text" name="nombre" size="20" maxlength="40" value="<?php echo($fila['nombre']); ?>">
             </td>
            </tr>
            <tr>
                 <td width="103"> Pais: </td>
                 <td width="243"> <input type="TEXT" name="pais" size="20" maxlength="40" value="<?php echo($fila['pais']); ?>">
             </td>
             </tr>
             <tr>
                 <td width="103"> habitantes: </td>
                 <td width="243"> <input type="TEXT" name="habitantes" size="20" maxlength="20" value="<?php echo($fila['habitantes']); ?>">
             </td>
            </tr>
            <tr>
                 <td width="103"> superficie: </td>
                 <td width="243"> <input type="TEXT" name="superficie" size="20" maxlength="40" value="<?php echo($fila['superficie']); ?>">
             </td>
             </tr>
             <tr>
                <td width="103"> tiene metro: </td>
                <td width="243"> 
                    <select name="metro">
                        <?php if( (($fila['tieneMetro']))==0 ){
                            $metro="1";
                            }
                            else $metro="0"; ?>
                        <!-- Opciones de la lista -->
                        <option value="<?php echo($fila['tieneMetro']); ?>" selected><?php echo($fila['tieneMetro']); ?></option><!-- Opción por defecto -->
                        <option value="<<?php echo($metro); ?>" ><?php echo($metro) ?></option> 
                    </select>
                </td>
             </tr>  
             <tr>
             <td colspan="2" align="center"> <input type="SUBMIT" name="Submit"
            value="Modificar">
             </td>
             </tr>
            </table>
            </FORM>
<?php
            }
    // Liberar conjunto de resultados
    mysqli_free_result($vResultado);
    // Cerrar la conexion
    mysqli_close($link);
?>