<?php
    $tituloPagina = "TP 1 - Ejercicio 6 (Resultado)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../../Util/Funciones.php");
    include_once("../../Control/Control6.php");

    $datos = data_submitted();

    $objControl6 = new Control6();
    $info = $objControl6->infoForm($datos);
    $esMayor = $objControl6->esMayor($datos);
    $info2 = $objControl6->infoEstudioSexo($datos);
    $cantDeportes = $objControl6->cantDeportes($datos);
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
            echo "<br><h5>Practico " . $cantDeportes . " deporte/s.</h5>";
        ?>
    </div>
</div>

<div id="volver">
    <a href="../Ejercicio6.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>