<?php
    $tituloPagina = "TP 2 - Ejercicio 2_4 (Resultado)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../../Util/Funciones.php");
    include_once("../../Control/Control2_4.php");
    $datos = data_submitted();

    $objControl2_4 = new Control2_4();
    $info = $objControl2_4->infoForm($datos);
    $esMayor = $objControl2_4->esMayor($datos);
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            echo "<h5>".$info."</h5>";
            if($esMayor){
                echo "<h5>"."Soy Mayor de edad"."</h5><br>";
            }else{
                echo "<h5>"."Soy Menor de edad"."</h5><br>";
            }
        ?>
    </div>
</div>

<div id="volver">
    <a href="../Ejercicio2_4.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>