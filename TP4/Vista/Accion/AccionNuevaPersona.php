<?php
    $tituloPagina = "TP 4 - Ejercicio 6 (AccionNuevaPersona)";
    include_once("../Estructura/Encabezado.php");
    include_once ("../../../Configuracion.php");

    $datos = data_submitted();
    $resp = false;
    $objAbmPersona = new AbmPersona();
    $encontrado = false;

    if(isset($datos['accion'])){
        if($datos['accion'] == 'nuevo'){
            $objPersona = $objAbmPersona->obtenerPersona($datos);
            //Chequeo que la persona no esté ya cargada en la BD
            if(isset($objPersona)){
                $encontrado = true;
            }else{
                if($objAbmPersona->alta($datos)){
                    $resp = true;
                    $objPersona = $objAbmPersona->obtenerPersona($datos);
                }
            }
        }
    }

?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            if($resp){
                echo "<h3 align='center'>Se ha cargado la nueva persona con exito</h3>";
                echo "<ul class= 'list-group' >";
                echo "<li class= 'list-group-item active' aria-current= 'true' align>Persona</li>";
                echo "<li class='list-group-item'><b>Dni</b>: " . $objPersona->getNroDni() ."</li>";  
                echo "<li class='list-group-item'><b>Apellido</b>: " . $objPersona->getApellido() ."</li>"; 
                echo "<li class='list-group-item'><b>Nombre</b>: " . $objPersona->getNombre() . "</li>";
                echo "<li class='list-group-item'><b>Fecha de nacimiento</b>: " . $objPersona->getFechaNac() . "</li>";
                echo "<li class='list-group-item'><b>Telefono</b>: " . $objPersona->getTelefono() . "</li>";
                echo "<li class='list-group-item'><b>Domicilio</b>: " . $objPersona->getDomicilio() . "</li>";
            }else{
                echo "<h5 align='center'>¡¡NO se ha cargado la nueva persona!!</h5>";
            }
            if($encontrado){
                echo "<h5 align='center'>¡¡Ya existe una persona con el DNI ingresado. Debe ingresar otro DNI!!</h5>";
            }
        ?>
        <br><a href="../Ejercicios/NuevaPersona.php"><button class = "btn btn-primary">Volver</button></a>
    </div>
</div>

<div id="volver">
    <a href="../../../Indice/Vista/Estructura/Indice.php"><button class = "btn btn-dark">Volver al Menu</button></a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>