<?php
    $tituloPagina = "TP 1 - Ejercicio 5 (Resultado)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../../Util/Funciones.php");
    include_once("../../Control/Control3.php");
    include_once("../../Control/Control4.php");
    include_once("../../Control/Control5.php");

    $datos = data_submitted();
    
    $objControl5 = new Control5();
    $info = $objControl5->infoForm($datos);
    $esMayor = $objControl5->esMayor($datos);
    $info2 = $objControl5->infoEstudioSexo($datos);
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
    <a href="../Ejercicio5.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>