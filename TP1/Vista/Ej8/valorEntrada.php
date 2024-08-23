<?php
    $tituloPagina = "TP 1 - Ejercicio 8 (Resultado)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../Util/funciones.php");
    include_once("../../Control/Control8.php");
    $datos = data_submitted();

    $objControl8 = new Control8();
    $resultado = $objControl8->precioEntrada($datos);
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            echo "<h3>El precio de tu entrada es de: $" . $resultado . "</h3>";
        ?>
    </div>
</div>

<div id="volver">
    <a href="ejercicio8.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>