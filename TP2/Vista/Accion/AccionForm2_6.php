<?php
    $tituloPagina = "TP 2 - Ejercicio 2_6 (Resultado)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../Control/Control2_6.php");

    $datos = data_submitted();

    $objControl2_6 = new Control2_6();
    $info = $objControl2_6->infoForm($datos);
    $esMayor = $objControl2_6->esMayor($datos);
    $info2 = $objControl2_6->infoEstudioSexo($datos);
    $cantDeportes = $objControl2_6->cantDeportes($datos);
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
    <a href="../Ejercicio2_6.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>