<?php
    $tituloPagina = "TP 3 - Ejercicio 2 (Resultado)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../Control/Control2.php");

    $objControl = new control2();
    $informacion = $objControl->contenidoArchivo($_FILES["archivo"]);
    $dir = '../../Archivos/';
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
        if($informacion == "ERROR"){
            echo "<h5>El archivo subido NO es txt</h5>";
        }else{
            if(!copy($_FILES['archivo']['tmp_name'], $dir.$_FILES['archivo']['name'])){
                echo "<h5 align='center'>ERROR: no se pudo cargar el archivo</h5>";
            }else{
                echo "<h5 align='center'>El archivo " . $_FILES['archivo']["name"] . " se ha copiado con Éxito</h5><br>";
                echo "<textarea name='muestraInformacion' rows='20' cols='60'>" . $informacion . "</textarea>";
            }
        }
        ?>
    </div>
</div>

<div id="volver">
    <a href="ejercicio2.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>