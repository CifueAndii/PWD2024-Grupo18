<?php
    $tituloPagina = "TP 1 - Ejercicio 7 (Resultado)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../../Util/Funciones.php");
    include_once("../../Control/Control7.php");
    $datos = data_submitted();

    $objControl7 = new Control7();
    $datosFormulario = $objControl7->infoOperacion($datos);
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
    <a href="../Ejercicio7.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>