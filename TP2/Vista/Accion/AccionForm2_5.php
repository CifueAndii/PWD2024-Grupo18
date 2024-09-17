<?php
    $tituloPagina = "TP 2 - Ejercicio 2_5 (Resultado)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../../Util/Funciones.php");
    include_once("../../Control/Control2_5.php");

    $datos = data_submitted();

    $objControl2_5 = new Control2_5();
    $info = $objControl2_5->infoForm($datos);
    $esMayor = $objControl2_5->esMayor($datos);
    $info2 = $objControl2_5->infoEstudioSexo($datos);
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
            echo "<h5>".$info2."</h5>";
        ?>
    </div>
</div>

<div id="volver">
    <a href="../Ejercicio2_5.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>