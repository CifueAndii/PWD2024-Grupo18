<?php
    $tituloPagina = "TP 1 - Ejercicio 7 (Resultado)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../Util/funciones.php");
    include_once("../../Control/Control7.php");
    $datos = data_submitted();

    $objControl7 = new Control7();
    $datosFormulario = $objControl7->infoOperacion($datos);
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            echo "<h3>Operación seleccionada: " . $datosFormulario["operacion"] . "</h3><br>";
            echo "<h3>Operando 1: " . $datosFormulario["operando1"] . "</h3><br>";
            echo "<h3>Operando 2: " . $datosFormulario["operando2"] . "</h3><br>";
            echo "<h3>Resultado de la operación: " . $datosFormulario["resultado"] . "</h3><br>";
        ?>
    </div>
</div>

<div id="volver">
    <a href="ejercicio7.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>