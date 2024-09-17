<?php
    $tituloPagina = "TP 4 - Ejercicio 5 (ListaPersonas.php)";
    include_once("../Estructura/Encabezado.php");
    include_once ("../../../Configuracion.php");

    $objAbmPersona = new AbmPersona();
    $colPersonas = $objAbmPersona->obtenerPersonas();
    $i = 1;
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
    <br>
        <?php
            if(count($colPersonas) != 0){
                echo "<h3 align='center'>Listado de Personas</h3>";
                echo "<ul class= 'list-group' >";
                foreach($colPersonas as $objPersona){
                    echo "<li class= 'list-group-item active' aria-current= 'true' align>Persona ". $i . "</li>";
                    echo "<li class='list-group-item'><b>Dni</b>: " . $objPersona->getNroDni() ."</li>";  
                    echo "<li class='list-group-item'><b>Apellido</b>: " . $objPersona->getApellido() ."</li>"; 
                    echo "<li class='list-group-item'><b>Nombre</b>: " . $objPersona->getNombre() . "</li>";
                    echo "<li class='list-group-item'><b>Fecha de nacimiento</b>: " . $objPersona->getFechaNac() . "</li>";
                    echo "<li class='list-group-item'><b>Telefono</b>: " . $objPersona->getTelefono() . "</li>";
                    echo "<li class='list-group-item'><b>Domicilio</b>: " . $objPersona->getDomicilio() . "</li>";
                    echo "<li class='list-group-item'><a href='../Accion/AccionBorrarPersona.php?accion=borrar&nroDni=" . $objPersona->getNroDni() ."'><button class='btn btn-danger'>Borrar</button></a></li>";
                    echo "</ul><br><br>";
                    echo "<a href='AutosPersona.php'><button class = 'btn btn-primary'>Ver los Autos de una Persona</button></a>";
                    $i++;
                }
            }else{
                echo "<h5 align='center'>¡¡NO hay personas cargadas en la base de datos!!</h5>";
            }
        ?>
    </div>
</div>

<div id="volver">
    <a href="../../../Indice/Vista/Estructura/Indice.php"><button class = "btn btn-dark">Volver al Menu</button></a>
</div>

<?php
    include_once("../estructura/pie.php");
?>