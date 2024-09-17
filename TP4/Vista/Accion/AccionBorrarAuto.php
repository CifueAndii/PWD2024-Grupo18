<?php
    $tituloPagina = "Accion Borrar Auto";
    include_once("../Estructura/Encabezado.php");
    include_once ("../../../Configuracion.php");

    $datos = data_submitted();
    $resp = false;
    $objAmbAuto = new AbmAuto();

    if(isset($datos['accion'])){
        if($datos['accion'] == 'borrar'){
            if($objAmbAuto->baja($datos)){
                $resp = true;
            }
        }
    }

?>

<div id="ejercicio">
    <div align="center" id="ejercicioFormulario">
        <h3>Auto</h3>
        <?php
            if($resp){
                echo "<h5>Se ha eliminado el auto correctamente.</h5>";
            }else{
                echo "<h5>¡¡NO se ha eliminado el auto correctamente!!</h5>";
            }          
        ?>
        <br><a href="../Ejercicios/VerAutos.php"><button class = "btn btn-primary">Volver</button></a>
    </div>
</div>

<div id="volver">
    <a href="../../../Indice/Vista/Estructura/Indice.php"><button class = "btn btn-dark">Volver al Menu</button></a>
</div>

<?php
    include_once("../estructura/pie.php");
?>