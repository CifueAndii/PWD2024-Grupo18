<?php
    $tituloPagina = "TP 4 - Ejercicio 8 (CambioDuenio.php)";
    include_once("../Estructura/Encabezado.php");
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <h3 align="center">Cambio de Dueño</h3>
        <form method="post" action="../Accion/AccionCambioDuenio.php" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="patente"><b>Patente del Auto:</b></label><br/>
                <input id="patente" name="patente" width="80" type="text" class="form-control" required pattern="[A-Z]{3} \d{3}">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    La patente es 3 letras mayúsculas, espacio y 3 números.
                </div>
            </div><br>
            <div class="form-group">
                <label><b>DNI del Nuevo Dueño:</b></label><br/>
                <input id="dniDuenio" name="dniDuenio" type="text" class="form-control" required pattern="[0-9]{8}">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    El DNI consta de 8 números.
                </div>
            </div><br>
            <input id="accion" name ="accion" value="editar" type="hidden">
            <input type="submit" class="btn btn-success">
        </form>
        <script src="../JS/FuncionesJava.js"></script>
    </div>
</div>

<div id="volver">
    <a href="../../../Indice/Vista/Estructura/Indice.php"><button class = "btn btn-dark">Volver al Menu</button></a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>