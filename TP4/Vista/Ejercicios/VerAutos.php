<?php
    $tituloPagina = "TP 4 - Ejercicio 3 (VerAutos.php)";
    include_once("../Estructura/Encabezado.php");
    include_once ("../../../Configuracion.php");
    
    $objAbmAuto = new AbmAuto();
    $colAutos = $objAbmAuto->obtenerAutos();
    $i = 1;
?>
<div id="ejercicio">
    <div id="ejercicioFormulario">
    <br>
        <?php	
            if(count($colAutos) != 0){
                    echo "<h3 align='center'>Listado de Autos</h3>";
                    echo "<ul class= 'list-group' >";
                foreach($colAutos as $objAuto){
                    echo "<li class='list-group-item active' aria-current= 'true' align>Auto ". $i . "</li>";;
                    echo "<li class='list-group-item'><b>Patente</b>: " . $objAuto->getPatente() ."</li>";  
                    echo "<li class='list-group-item'><b>Marca</b>: " . $objAuto->getMarca() ."</li>"; 
                    echo "<li class='list-group-item'><b>Modelo</b>: " . $objAuto->getModelo() ."</li>"; 
                    echo "<li class='list-group-item'><b>Dni dueño</b>: " . $objAuto->getObjPersona()->getNroDni() ."</li>"; 
                    echo "<li class='list-group-item'><b>Dueño</b>: "  . $objAuto->getObjPersona()->getNombre() . " " . $objAuto->getObjPersona()->getApellido() ."</li>"; 
                    echo "<li class='list-group-item'><a href='../Accion/AccionBorrarAuto.php?accion=borrar&patente=" . $objAuto->getPatente() ."'><button class='btn btn-danger'>Borrar</button></a></li>";
                    echo "</ul><br>";
                    $i++;
                }
            } else {
                echo "<h5 align='center'>¡¡NO hay autos cargados en la base de datos!!</h5>";
            }
        ?>
    </div>
</div>

<div id="volver">
    <a href="../../../Indice/Vista/Estructura/Indice.php"><button class = "btn btn-dark">Volver al Menu</button></a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>