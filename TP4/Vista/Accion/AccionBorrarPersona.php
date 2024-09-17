<?php
    $tituloPagina = "Accion Borrar Persona";
    include_once("../Estructura/Encabezado.php");
    include_once ("../../../Configuracion.php");
    
    $datos = data_submitted();
    $resp = false;
    $objAmbPersona = new AbmPersona();
    $objAmbAuto = new AbmAuto();
    $colAutos = $objAmbAuto->obtenerAutos();
    $i = 0;
    $encontrado = false;

    if(isset($datos['accion'])){
        if($datos['accion'] == 'borrar'){
            if(isset($colAutos)){
                while($i < count($colAutos) && !$encontrado){
                    if($datos["nroDni"] == $colAutos[$i]->getObjPersona()->getNroDni()){
                        $encontrado = true;
                    }
                    $i++;
                }

                if(!$encontrado){
                    if($objAmbPersona->baja($datos)){
                        $resp = true;
                    }
                }
            }
        }
    }
?>

<div id="ejercicio">
    <div align="center" id="ejercicioFormulario">
        <?php
            if($resp){
                echo "<h5>Se ha eliminado la persona correctamente.</h5>";
            }else{
                echo "<h5>¡¡NO se ha eliminado la persona correctamente!!</h5>";
            }
            if($encontrado){
                echo "<h5>¡¡NO se puede eliminar la persona porque es dueña de auto/s. Debe borrar primero el Auto!!</h5>";
            }
        ?>
        <br><a href="../Ejercicios/ListaPersonas.php"><button class = "btn btn-primary">Volver</button></a>
    </div>
</div>

<div id="volver">
    <a href="../../../index/vista/index.php"><button class = "btn btn-dark">Volver al Menu</button></a>
</div>

<?php
    include_once("../estructura/pie.php");
?>