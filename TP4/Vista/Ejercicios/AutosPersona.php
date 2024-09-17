<?php
    $tituloPagina = "TP 4 - Ejercicio 5 (AutosPersona.php)";
    include_once("../Estructura/Encabezado.php");
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
    <h3 align="center">Buscar Autos de la Persona</h3>
        <form method="post" action="../accion/accionAutosPersona.php" class="needs-validation" novalidate>
            <div class="form-group">
                <label><b>DNI:</b></label><br/>
                <input id="nroDni" name="nroDni" class="form-control" type="text" required pattern="[0-9]{8}">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    Ingrese un DNI de 8 dígitos.
                </div>
            </div>
            <br/>
            <input id="accion" name ="accion" value="buscar" type="hidden">
            <input type="submit" class="btn btn-success">
        </form>
        <script src="../JS/FuncionesJava.js"></script>
        <br><a href="ListaPersonas.php"><button class = "btn btn-primary">Ver Personas</button></a>
    </div>
</div>

<div id="volver">
    <a href="../../../Indice/Vista/Estructura/Indice.php"><button class = "btn btn-dark">Volver al Menu</button></a>
</div>

<?php
    include_once("../estructura/pie.php");
?>