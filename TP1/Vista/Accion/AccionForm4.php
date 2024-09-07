<?php
    $tituloPagina = "TP 1 - Ejercicio 4 (Resultado)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../../Util/Funciones.php");
    include_once("../../Control/Control4.php");

    $datos = data_submitted();

    $objControl4 = new Control4();
    $info = $objControl4->infoForm($datos);
    $esMayor = $objControl4->esMayor($datos);
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
    <a href="../Ejercicio4.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>