<?php
    $tituloPagina = "TP 4 - Ejercicio 9 (AccionActualizarDatosPersona)";
    include_once("../Estructura/Encabezado.php");

    session_start();
    $datos = $_SESSION['datos'];
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <h3 align="center">Editar Info Persona</h3>
            <form method="post" action="../Accion/AccionActualizarDatosPersona.php" class="needs-validation" novalidate>
                <div class="form-group">
                    <label><b>Número de DNI:</b></label>
                    <input id="nroDni" name="nroDni" class="form-control" type="text" value="<?php echo $datos['nroDni']?>" required readonly>
                </div><br>
                    
                <div class="form-group">
                    <label><b>Apellido:</b></label><br/>
                    <input id="apellido" name="apellido" class="form-control" type="text" value="<?php echo $datos['apellido']?>" required pattern="^[a-zA-Z][a-zA-Z\s]*$">
                    <div class="valid-feedback">
                        Correcto.
                    </div>
                    <div class="invalid-feedback">
                        Solo letras.
                    </div>
                </div><br>
                    
                <div class="form-group">
                    <label for="Nombre"><b>Nombre:</b></label><br/>
                    <input id="nombre" name="nombre" class="form-control" type="text" value="<?php echo $datos['nombre']?>" required pattern="^[a-zA-Z][a-zA-Z\s]*$">
                    <div class="valid-feedback">
                        Correcto.
                    </div>
                    <div class="invalid-feedback">
                        Solo letras.
                    </div>
                </div><br>
                    
                <div class="form-group">
                    <label for="fechaNac"><b>Fecha de Nacimiento:</b></label><br/>
                    <input id="fechaNac" name="fechaNac" class="form-control" type="text" value="<?php echo $datos['fechaNac']?>" required pattern="^(?!0000)(?:(?!02-29)(([1-9]\d(?:0[48]|[2468][048]|[13579][26])|([2468][048]|[13579][26])00)-02-29)|([1-9]\d{3}|[2-9]\d{3})-(0[1-9]|1[0-2])-(0[1-9]|1\d|2[0-8])|(?:([1-9]\d(?:0[48]|[2468][048]|[13579][26])|([2468][048]|[13579][26])00)-02-(?:29|30))|(?:([1-9]\d{3}|[2-9]\d{3})-(0[13-9]|1[0-2])-(?:29|30|31)))$">
                    <div class="valid-feedback">
                        Correcto.
                    </div>
                    <div class="invalid-feedback">
                        Ejemplo: 2000-05-30.
                    </div>
                </div><br>
                    
                <div class="form-group">
                    <label><b>Teléfono:</b></label><br/>
                    <input id="telefono" name="telefono" class="form-control" type="text" value="<?php echo $datos['telefono']?>" required pattern="[0-9]{7,10}">
                    <div class="valid-feedback">
                        Correcto.
                    </div>
                    <div class="invalid-feedback">
                        Minimo 7, Maximo 10.
                    </div>
                </div><br>

                <div class="form-group">
                    <label><b>Domicilio:</b></label><br/>
                    <input id="domicilio" name="domicilio" class="form-control" type="text" value="<?php echo $datos['direccion']?>" required pattern="^[a-zA-Z][a-zA-Z0-9\s]*$">
                    <div class="valid-feedback">
                        Correcto.
                    </div>
                    <div class="invalid-feedback">
                        Se aceptan números letras y espacios.
                    </div>
                </div>
                <br>
                <input id="accion" name ="accion" value="editar" type="hidden">
                <input type="submit" class="btn btn-success">
            </form>
            <script src="../JS/FuncionesJava.js"></script>
        <br><a href="../Ejercicios/BuscarPersona.php"><button class = "btn btn-primary">Volver</button></a>
    </div>
</div>

<div id="volver">
    <a href="../../../Indice/Vista/Estructura/Indice.php"><button class = "btn btn-dark">Volver al Menu</button></a>
</div>

<?php
    include_once("../estructura/pie.php");
?>