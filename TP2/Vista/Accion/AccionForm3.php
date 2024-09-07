<?php
    $tituloPagina = "TP 2 - Ejercicio 3 (Resultado)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../../Util/Funciones.php");
    include_once("../../Control/Control3.php");
    $datos = data_submitted();
    $objControl3 = new Control3();
    $mensaje = $objControl3->validarUsuario($datos);
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            echo "<h5>".$mensaje."<h5>";
        ?>
    </div>
</div>

<div id="volver">
    <a href="../Ejercicio3.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>