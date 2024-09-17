<?php
    $tituloPagina = "TP 1 - Ejercicio 8 (Resultado)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../../Util/Funciones.php");
    include_once("../../Control/Control8.php");
    $datos = data_submitted();

    $objControl8 = new Control8();
    $resultado = $objControl8->precioEntrada($datos);
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            echo "<h5>El precio de tu entrada es de: $" . $resultado . "</h5>";
        ?>
    </div>
</div>

<div id="volver">
    <a href="../Ejercicio8.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>