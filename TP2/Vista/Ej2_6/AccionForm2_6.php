<?php
    $tituloPagina = "TP 2 - Ejercicio 2_6 (Resultado)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../Util/funciones.php");
    include_once("../../Control/Control2_3.php");
    include_once("../../Control/Control2_4.php");
    include_once("../../Control/Control2_5.php");
    include_once("../../Control/Control2_6.php");

    $datos = data_submitted();

    $objControl2_3 = new Control2_3();
    $info = $objControl2_3->infoForm($datos);

    $objControl2_4 = new Control2_4();
    $esMayor = $objControl2_4->esMayor($datos);

    $objControl2_5 = new Control2_5();
    $info2 = $objControl2_5->infoEstudioSexo($datos);

    $objControl2_6 = new Control2_6();
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
    <a href="Ejercicio2_6.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>