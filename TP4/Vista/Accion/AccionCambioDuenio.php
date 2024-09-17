<?php
    $tituloPagina = "TP 4 - Ejercicio 8 (AccionCambioDuenio)";
    include_once("../Estructura/Encabezado.php");
    include_once ("../../../Configuracion.php");

    $datos = data_submitted();
    $resp = false;
    $objAbmAuto = new AbmAuto();
    $objAbmPersona = new AbmPersona();
    $autoEncontrado = false;
    $personaEncontrada = false;
    $duenioActual = false;

    if(isset($datos['accion'])){
        if($datos['accion'] == 'editar'){
            $datos['nroDni'] = $datos['dniDuenio'];
            $objAuto = $objAbmAuto->obtenerAuto($datos);
            $objPersona = $objAbmPersona->obtenerPersona($datos);
            //Chequeo que la persona esté cargada en la BD
            if(isset($objPersona)){
                $personaEncontrada = true;
                //Chequeo que el auto esté cargado en la BD
                if(isset($objAuto)){
                    $autoEncontrado = true;
                    $datos['marca'] = $objAuto->getMarca();
                    $datos['modelo'] = $objAuto->getModelo();
                    //Chequeo que no se haya ingresado al dueño actual
                    if($objAuto->getObjPersona()->getNroDni() != $datos['dniDuenio']){
                        if($objAbmAuto->modificacion($datos)){
                            $resp = true;
                            $objAuto = $objAbmAuto->obtenerAuto($datos);
                        }
                    }else{
                        $duenioActual = true;
                    }
                }
            }
        }
    }
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            if($resp){
                echo "<h3 align='center'>Se ha cambiado el dueño del auto con exito</h3>";
                echo "<ul class= 'list-group' >";
                echo "<li class= 'list-group-item active' aria-current= 'true' align>Auto</li>";
                echo "<li class='list-group-item'><b>Patente</b>: " . $objAuto->getPatente() ."</li>";  
                echo "<li class='list-group-item'><b>Marca</b>: " . $objAuto->getMarca() ."</li>"; 
                echo "<li class='list-group-item'><b>Modelo</b>: " . $objAuto->getModelo() . "</li>";
                echo "<li class='list-group-item'><b>DNI del Dueño</b>: " . $objAuto->getObjPersona()->getNroDni() ."</li>";
            }else{
                echo "<h5 align='center'>¡¡NO se ha cambiado el nuevo dueño!!</h5>";
            }
            if(!$personaEncontrada || !$autoEncontrado){
                echo "<h5 align='center'>¡¡NO existe el dueño/auto ingresado en la Base de Datos!!</h5>";
            }
            if($duenioActual){
                echo "<h5 align='center'>¡¡NO puede elegir al dueño actual, Debe ingresar otro DNI!!</h5>";
            }
        ?>
        <br><a href="../Ejercicios/CambioDuenio.php"><button class = "btn btn-primary">Volver</button></a>
    </div>
</div>

<div id="volver">
    <a href="../../../Indice/Vista/Estructura/Indice.php"><button class = "btn btn-dark">Volver al Menu</button></a>
</div>

<?php
    include_once("../estructura/pie.php");
?>