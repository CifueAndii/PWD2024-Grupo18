<?php
    $tituloPagina = "TP 2 - Ejercicio 2_7 (Resultado)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../Util/funciones.php");
    include_once("../../Control/Control2_7.php");
    $datos = data_submitted();

    $objControl = new Control2_7();
    $datosFormulario = $objControl->infoOperacion($datos);
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            echo "<h5>Operación seleccionada: " . $datosFormulario["operacion"] . "</h5><br>";
            echo "<h5>Operando 1: " . $datosFormulario["operando1"] . "</h5><br>";
            echo "<h5>Operando 2: " . $datosFormulario["operando2"] . "</h5><br>";
            echo "<h5>Resultado de la operación: " . $datosFormulario["resultado"] . "</h5><br>";
        ?>
    </div>
</div>

<div id="volver">
    <a href="Ejercicio2_7.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>