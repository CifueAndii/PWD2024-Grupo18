<?php
    $tituloPagina = "TP 4 - Ejercicio 4 (AccionBuscarAuto)";
    include_once("../Estructura/Encabezado.php");
    include_once ("../../../Configuracion.php");

    $datos = data_submitted();
    $resp = false;
    $objAbmAuto = new AbmAuto();

    if(isset($datos['accion'])) {
        if($datos['accion'] == 'buscar'){
            if($objAuto = $objAbmAuto->obtenerAuto($datos)){
                $resp = true;
            }
        }
    }
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            if($resp){
                echo "<h3 align='center'>Datos del Auto:</h3>";
                echo "<ul class= 'list-group' >";
                echo "<li class= 'list-group-item active' aria-current= 'true' align>Auto</li>";
                echo "<li class='list-group-item'><b>Patente</b>: " . $objAuto->getPatente() ."</li>";  
                echo "<li class='list-group-item'><b>Marca</b>: " . $objAuto->getMarca() ."</li>"; 
                echo "<li class='list-group-item'><b>Modelo</b>: " . $objAuto->getModelo() . "</li>";
                echo "<li class='list-group-item'><b>DNI del Dueño</b>: " . $objAuto->getObjPersona()->getNroDni() ."</li>";   
  
            }else{
                echo "<h5 align='center'>¡¡NO existe un auto con la patente ingresada!!</h5>";
            }
        ?>
        <div class = "btn-ejercicio3">
		    <br><a href="../Ejercicios/BuscarAuto.php"><button class = "btn btn-primary">Volver</button></a>
		</div>
    </div>
</div>

<div id="volver">
    <a href="../../../Indice/Vista/Estructura/Indice.php"><button class = "btn btn-dark">Volver al Menu</button></a>
</div>

<?php
    include_once("../estructura/pie.php");
?>