<?php
    $tituloPagina = "TP 3 - Ejercicio 2 (Resultado)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../../Util/Funciones.php");
    include_once("../../Control/Control2.php");
    $datos = data_submitted();

    $objControl = new control2();
    $informacion = $objControl->contenidoArchivo($datos);
    $dir = '../../Archivos/';
    $pathArchivo = $dir . $datos['archivo']['name'];
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
        if($informacion == "ERROR"){
            echo "<h5>El archivo subido NO es txt</h5>";
        }else{
            if(!copy($datos['archivo']['tmp_name'], $pathArchivo)){
                echo "<h5 align='center'>ERROR: no se pudo cargar el archivo</h5>";
            }else{
                echo "<h5 align='center'>El archivo " . $datos['archivo']["name"] . " se ha copiado con Éxito</h5><br>";
                echo "<textarea name='muestraInformacion' rows='20' cols='60'>" . $informacion . "</textarea>";
            }
        }
        ?>
    </div>
</div>

<div id="volver">
    <a href="../Ejercicio2.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>