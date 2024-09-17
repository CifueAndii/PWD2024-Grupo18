<?php
    $tituloPagina = "TP 1 - Ejercicio 1 (Resultado)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../../Util/Funciones.php");
    include_once("../../Control/Control1.php");
    $datos = data_submitted();
    $objControl1 = new Control1();
    $numero = $objControl1->tipoNumero($datos['numero']);
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            if($numero == 1){
                echo "<h5 align='center'>El numero " . $datos['numero'] . " es positivo</h5>";
            }elseif($numero == -1){
                echo "<h5 align='center'>El numero " . $datos['numero'] . " es negativo</h5>";
            }else{
                echo "<h5 align='center'>El numero es cero</h5>";
            }
        ?>
    </div>
</div>

<div id="volver">
    <a href="../Ejercicio1.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>