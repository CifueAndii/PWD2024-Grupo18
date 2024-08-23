<?php
    $tituloPagina = "TP 2 - Ejercicio 2_8 (Resultado)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../Util/funciones.php");
    include_once("../../Control/Control2_8.php");
    $datos = data_submitted();

    $objControl = new Control2_8();
    $resultado = $objControl->precioEntrada($datos);
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            echo "<h5>El precio de tu entrada es de: $" . $resultado . "</h5>";
        ?>
    </div>
</div>

<div id="volver">
    <a href="Ejercicio2_8.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>