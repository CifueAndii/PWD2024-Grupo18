<?php
    $tituloPagina = "TP 1 - Ejercicio 5 (Resultado)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../Util/funciones.php");
    include_once("../../Control/Control3.php");
    include_once("../../Control/Control4.php");
    include_once("../../Control/Control5.php");

    $datos = data_submitted();

    $objControl3 = new Control3();
    $info = $objControl3->infoForm($datos);

    $objControl4 = new Control4();
    $esMayor = $objControl4->esMayor($datos);

    $objControl5 = new Control5();
    $info2 = $objControl5->infoEstudioSexo($datos);
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            echo "<h3>".$info."</h3>";
            if($esMayor){
                echo "<h3>"."Soy Mayor de edad"."</h3><br>";
            }else{
                echo "<h3>"."Soy Menor de edad"."</h3><br>";
            }
            echo "<h3>".$info2."</h3>";
        ?>
    </div>
</div>

<div id="volver">
    <a href="ejercicio5.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>