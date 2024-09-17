<?php
    $tituloPagina = "TP 4 - Ejercicio 7 (AccionNuevoAuto)";
    include_once("../Estructura/Encabezado.php");
    include_once ("../../../Configuracion.php");

    $datos = data_submitted();
    $resp = false;
    $objAbmAuto = new AbmAuto();
    $objAbmPersona = new AbmPersona();
    $autoEncontrado = false;
    $personaEncontrada = false;
    $datos['nroDni'] = $datos['dniDuenio'];

    if(isset($datos['accion'])){
        if($datos['accion'] == 'nuevo'){
            $objAuto = $objAbmAuto->obtenerAuto($datos);
            $objPersona = $objAbmPersona->obtenerPersona($datos);
            //Chequeo que la persona esté cargada en la BD
            if(isset($objPersona)){
                $personaEncontrada = true;
                //Chequeo que el auto no esté ya cargado en la BD
                if(isset($objAuto)){
                    $autoEncontrado = true;
                }else{
                    if($objAbmAuto->alta($datos)){
                        $resp = true;
                        $objAuto = $objAbmAuto->obtenerAuto($datos);
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
                echo "<h3 align='center'>Se ha cargado el nuevo auto con exito</h3>";
                echo "<ul class= 'list-group' >";
                echo "<li class= 'list-group-item active' aria-current= 'true' align>Auto</li>";
             echo "<li class='list-group-item'><b>Patente</b>: " . $objAuto->getPatente() ."</li>";  
                echo "<li class='list-group-item'><b>Marca</b>: " . $objAuto->getMarca() ."</li>"; 
                echo "<li class='list-group-item'><b>Modelo</b>: " . $objAuto->getModelo() . "</li>";
                echo "<li class='list-group-item'><b>DNI del Dueño</b>: " . $objAuto->getObjPersona()->getNroDni() ."</li>";   
            }else{
                echo "<h5 align='center'>¡¡NO se ha cargado el nuevo auto!!</h5>";
            }
            if(!$personaEncontrada){
                echo "<h5 align='center'>¡¡NO existe una persona en la Base de Datos con el DNI ingresado. Debe ingresar otro DNI!!</h5>";
            }
            if($autoEncontrado){
                echo "<h5 align='center'>¡¡Ya existe un auto con la patente ingresada. Debe ingresar otra patente!!</h5>";
            }
        ?>
        <br><a href="../Ejercicios/NuevoAuto.php"><button class = "btn btn-primary">Volver</button></a>
    </div>
</div>

<div id="volver">
    <a href="../../../Indice/Vista/Estructura/Indice.php"><button class = "btn btn-dark">Volver al Menu</button></a>
</div>

<?php
    include_once("../estructura/pie.php");
?>