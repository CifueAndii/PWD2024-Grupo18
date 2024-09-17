<?php
    $tituloPagina = "TP 4 - Ejercicio 7 (NuevoAuto.php)";
    include_once("../Estructura/Encabezado.php");
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
    <h3 align="center">Ingreso Nuevo Auto</h3>
        <form method="post" action="../Accion/AccionNuevoAuto.php" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="patente"><b>Patente:</b></label>
                <input id="patente" name="patente" type="text" class="form-control" required pattern="[A-Z]{3} \d{3}">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    La patente es 3 letras mayúsculas, espacio y 3 números.
                </div>
            </div><br>
            <div class="form-group">
                <label for="marca"><b>Marca:</b></label>
                <input id="marca" name="marca" type="text" class="form-control" required pattern="[A-Za-z][A-Za-z0-9 ]*">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    El primer caracter de la marca debe ser una letra.
                </div>
            </div><br>
            <div class="form-group">
                <label for="modelo"><b>Modelo:</b></label>
                <input id="modelo" name="modelo" type="text" class="form-control" required pattern="[0-9]{1,4}">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    El modelo debe ser entre 1 y 4 números.
                </div>
            </div><br>
            <div class="form-group">
                <label for="dniDuenio"><b>DNI del Dueño:</b></label>
                <input id="dniDuenio" name="dniDuenio" type="text" class="form-control" required pattern="[0-9]{8}">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    El DNI consta de 8 números.
                </div>
            </div><br>
            <input id="accion" name="accion" value="nuevo" type="hidden">
            <button type="submit" class="btn btn-success">Enviar</button>
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