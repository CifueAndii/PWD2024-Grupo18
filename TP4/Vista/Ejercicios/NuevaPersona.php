<?php
    $tituloPagina = "TP 4 - Ejercicio 6 (NuevaPersona.php)";
    include_once("../Estructura/Encabezado.php");
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <h3 align="center">Ingreso Nueva Persona</h3>
        <form method="post" action="../Accion/AccionNuevaPersona.php" class="needs-validation" novalidate>
            <div class="form-group">
                <label for=""><b>DNI:</b></label>
                <input id="nroDni" name="nroDni" class="form-control" type="text" required pattern="[0-9]{8}">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    Ingrese un DNI de 8 digitos.
                </div>
            </div><br>
            <div class="form-group">
                <label for=""><b>Apellido:</b></label>
                <input id="apellido" class="form-control" name="apellido" type="text" required pattern="^[a-zA-Z][a-zA-Z\s]*$">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    Ingrese su apellido.
                </div>
            </div><br>
            <div class="form-group">
                <label for=""><b>Nombre:</b></label>
                <input id="nombre" name="nombre" class="form-control" type="text" required pattern="^[a-zA-Z][a-zA-Z\s]*$">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    Ingrese su nombre.
                </div>
            </div><br>
            <div class="form-group">
                <label for=""><b>Fecha de Nacimiento:</b></label><br/>
                <input id="fechaNac" name="fechaNac" class="form-control" type="text" required pattern="^((2000|2400|2800|(19|2[0-9])(0[48]|[2468][048]|[13579][26]))-02-29)|(((19|2[0-9])[0-9]{2})-02-(0[1-9]|1[0-9]|2[0-8]))|(((19|2[0-9])[0-9]{2})-(0[13578]|10|12)-(0[1-9]|[12][0-9]|3[01]))|(((19|2[0-9])[0-9]{2})-(0[469]|11)-(0[1-9]|[12][0-9]|30))$">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    Formato de fecha: "AAAA-MM-DD"
                </div>
            </div><br>
            <div class="form-group">
                <label for=""><b>Telefono:</b></label><br/>
                <input id="telefono" name="telefono" class="form-control" type="text" required pattern="^[0-9][0-9]{4,}$">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    El número debe tener como mínimo 5 dígitos.
                </div>
            </div><br>
            <div class="form-group">
                <label for=""><b>Domicilio:</b></label><br/>
                <input id="domicilio" class="form-control" name="domicilio" type="text" required pattern="^[a-zA-Z][a-zA-Z0-9\s]*$">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    Ingrese su domicilio.    
                </div>
            </div><br>
            <br>
            <input id="accion" name="accion" value="nuevo" type="hidden">
            <input type="submit" class="btn btn-success">
        </form>
        <script src="../JS/FuncionesJava.js"></script>
    </div>
</div>

<div id="volver">
    <a href="../../../Indice/Vista/Estructura/Indice.php"><button class = "btn btn-dark">Volver al Menu</button></a>
</div>

<?php
    include_once("../estructura/pie.php");
?>