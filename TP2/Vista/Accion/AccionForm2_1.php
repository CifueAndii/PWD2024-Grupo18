<?php
    $tituloPagina = "TP 2 - Ejercicio 2_1 (Resultado)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../../Util/Funciones.php");
    include_once("../../Control/Control2_1.php");
    $datos = data_submitted();
    $objControl = new Control2_1();
    $numero = $objControl->tipoNumero($datos['numero']);
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            if($numero == 1){
                echo "<h4 align='center'>El numero " . $datos['numero'] . " es positivo</h4>";
            }elseif($numero == -1){
                echo "<h4 align='center'>El numero " . $datos['numero'] . " es negativo</h4>";
            }else{
                echo "<h4 align='center'>El numero es cero</h4>";
            }
        ?>
    </div>
</div>

<div id="volver">
    <a href="../Ejercicio2_1.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>