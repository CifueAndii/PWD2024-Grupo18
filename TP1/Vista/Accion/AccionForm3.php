<?php
    $tituloPagina = "TP 1 - Ejercicio 3 (Resultado)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../../Util/Funciones.php");
    include_once("../../Control/Control3.php");
    $datos = data_submitted();
    $objControl3 = new Control3();
    $info = $objControl3->infoForm($datos);
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            echo "<h5>".$info."<h5>";
        ?>
    </div>
</div>

<div id="volver">
    <a href="../Ejercicio3.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>