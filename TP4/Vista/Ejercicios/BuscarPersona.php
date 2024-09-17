<?php
    $tituloPagina = "TP 4 - Ejercicio 9 (BuscarPersona.php)";
    include_once("../Estructura/Encabezado.php");
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
    <h3 align="center">Buscar Persona</h3>
        <form method="post" action="../Accion/AccionBuscarPersona.php" class="needs-validation" novalidate>
            <div class="form-group">
                <label for=""><b>DNI:</b></label><br/>
                <input id="nroDni" name="nroDni" class="form-control" type="text" required pattern="[0-9]{8}">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    Ingrese un DNI de 8 números.
                </div>    
            </div>
            <br>
            <input id="accion" name="accion" value="buscar" type="hidden">
            <input type="submit" class="btn btn-success">
        </form>
        <br><a href="ListaPersonas.php"><button class = "btn btn-primary">Ver Personas</button></a>
        <script src="../JS/FuncionesJava.js"></script>
    </div>
</div>

<div id="volver">
    <a href="../../../Indice/Vista/Estructura/Indice.php"><button class = "btn btn-dark">Volver al Menu</button></a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>