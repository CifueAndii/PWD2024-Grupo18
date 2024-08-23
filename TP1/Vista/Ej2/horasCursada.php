<?php
    $tituloPagina = "TP 1 - Ejercicio 2 (Resultado)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../Util/funciones.php");
    include_once("../../Control/Control2.php");
    $datos = data_submitted();
    $objControl2 = new Control2();
    $totalHoras = $objControl2->suma($datos);
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            echo "<h3 align='center'>Programaci&oacuten Web Din&aacutemica se cursa " . $totalHoras . " horas semanales </h3>";
        ?>
    </div>
</div>

<div id="volver">
    <a href="Ejercicio2.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>