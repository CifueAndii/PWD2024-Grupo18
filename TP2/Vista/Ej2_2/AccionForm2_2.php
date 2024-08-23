<?php
    $tituloPagina = "TP 2 - Ejercicio 2_2 (Resultado)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../Util/funciones.php");
    include_once("../../Control/Control2_2.php");
    $datos = data_submitted();
    $objControl = new Control2_2();
    $totalHoras = $objControl->suma($datos);
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            echo "<h4 align='center'>Programaci&oacuten Web Din&aacutemica se cursa " . $totalHoras . " horas semanales </h4>";
        ?>
    </div>
</div>

<div id="volver">
    <a href="Ejercicio2_2.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>