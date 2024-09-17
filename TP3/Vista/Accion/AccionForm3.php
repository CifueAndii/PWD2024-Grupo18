<?php
    $tituloPagina = "TP 3 - Ejercicio 3 (Resultado)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../../Util/Funciones.php");
    include_once("../../Control/Control3.php");
    $datos = data_submitted();

    $objControl3 = new control3();
    $infoCine = $objControl3->infoCine($datos);
    $dir = "../../Archivos/";
    $pathArchivo = $dir . $datos['imagen']['name'];
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <div id = "resultado_4">
            <h3 id = "title">La película introducida es: </h3><br>
            <?php
                echo "<strong>"."Titulo: "."</strong>".$infoCine['titulo']. "<br>";
                echo "<strong>"."Actores: "."</strong>".$infoCine['actores'] . "<br>";
                echo "<strong>"."Director: "."</strong>".$infoCine['director'] . "<br>";
                echo "<strong>"."Guion: "."</strong>".$infoCine['guion'] . "<br>";
                echo "<strong>"."Produccion: "."</strong>".$infoCine['produccion'] . "<br>";
                echo "<strong>"."Año: "."</strong>".$infoCine['year'] . "<br>";
                echo "<strong>"."Nacionalidad: "."</strong>".$infoCine['nacionalidad'] . "<br>";
                echo "<strong>"."Género: "."</strong>".$infoCine['genero'] . "<br>";
                echo "<strong>"."Duración: "."</strong>".$infoCine['duracion'] . "<br>";
                if($infoCine['restriccion'] == "a"){
                    echo "<strong>"."Restricción de edad:"."</strong>"." Todo los públicos <br>";
                }elseif($infoCine['restriccion'] == "b"){
                    echo "<strong>"."Restricción de edad:"."</strong>"." Mayores de 7 años <br>";
                }else{
                    echo "<strong>"."Restricción de edad: "."</strong>"."Mayores de 18 años <br>";
                }
                echo "<strong>"."Sinopsis: "."</strong>".$infoCine['sinopsis']."<br>";
                if($infoCine['imagen'] != "ERROR!! NO se ha subido ninguna imagen") {
                    if(!copy($_FILES['imagen']['tmp_name'], $pathArchivo)) {
                        echo "<h5 align='center'>ERROR: no se pudo cargar la imagen</h5>";
                    }else{
                        echo "<img src='../../archivos/" . $datos['imagen']['name'] . "' style='height:150px; width:200px'>"."<br>";
                    }
                } else {
                    echo "<h5>".$infoCine['imagen']."</h5>";
                }
            ?>
        </div>
        </div>
</div>

<div id="volver">
    <a href="../Ejercicio3.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>