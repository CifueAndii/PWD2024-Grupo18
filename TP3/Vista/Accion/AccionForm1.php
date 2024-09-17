<?php
    $tituloPagina = "TP 3 - Ejercicio 1 (Resultado)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../../Util/Funciones.php");
    include_once("../../Control/Control1.php");
    $datos = data_submitted();

    $objControl = new Control1();
    $archivo = $objControl->miArchivo($datos);
    $dir = '../../Archivos/';
    $pathArchivo = $dir . $datos['archivo']['name'];
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            if($archivo == "EXITO"){
                if(!copy($datos['archivo']['tmp_name'], $pathArchivo)){
                    echo "<h5 align='center'>ERROR: no se pudo cargar el archivo</h5>";
                }else{
                    echo "<h5 align='center'>El archivo " . $datos['archivo']['name'] . " se ha copiado con Éxito</h5>";
                    echo "<h5 align='center'><a href='$pathArchivo'> Ver archivo cargado</a></h5>";
                }
            }else{
                echo "<h5 align='center'>" . $archivo . "</h5";
            }
        ?>
    </div>
</div>

<div id="volver">
    <a href="../Ejercicio1.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>