<?php
    $tituloPagina = "TP 2 - Ejercicio 2_3 (Resultado)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../Util/funciones.php");
    include_once("../../Control/Control2_3.php");
    $datos = data_submitted();
    $objControl = new Control2_3();
    $info = $objControl->infoForm($datos);
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            echo "<h5>".$info."<h5>";
        ?>
    </div>
</div>

<div id="volver">
    <a href="Ejercicio2_3.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>