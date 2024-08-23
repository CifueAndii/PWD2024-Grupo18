<?php
    $tituloPagina = "TP 3 - Ejercicio 1 (Resultado)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../Control/Control1.php");

    $objControl = new Control1();
    $archivo = $objControl->miArchivo($_FILES['archivo']);
    $dir = '../../Archivos/';
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            if($archivo == "EXITO"){
                if(!copy($_FILES['archivo']['tmp_name'], $dir.$_FILES['archivo']['name'])){
                    echo "<h4 align='center'>ERROR: no se pudo cargar el archivo</h4>";
                }else{
                    echo "<h4 align='center'>El archivo " . $_FILES['archivo']["name"] . " se ha copiado con Éxito</h4>";
                }
            }else{
                echo "<h4 align='center'>" . $archivo . "</h4";
            }
        ?>
        <h5 align='center'><a href='../../archivos/'> Ver archivo cargado</a></h5>
    </div>
</div>

<div id="volver">
    <a href="Ejercicio1.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>