<?php
    $tituloPagina = "TP 2 - Ejercicio 2_8";
    include_once("../Estructura/Encabezado.php");
?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#ejercicioFormulario").validate({
            rules: {
                edad: {
                    required: true,
                },
                estudiante: {
                    required: true,
                },
            },
        })
    });
</script>

<div id="ejercicio">
    <form id="ejercicioFormulario" name="formulario" method="get" action="AccionForm2_8.php">
    <table>
        <tr>
            <td class="textForm">Edad: </td>
            <td><input type="number" name="edad" id="edad" class="form-control formulario_input"></td>
        </tr>
        <tr>
            <td class="textForm">¿Eres Estudiante?: </td>
            <td>
                <input type="radio" name="estudiante" id="estudiante" class="formulario_input form-check-input" value="1">Si<br>
                <input type="radio" name="estudiante" id="estudiante" class="formulario_input form-check-input" value="0">No.<br>
            </td>
        </tr>
    </table>
        <br><div><input type="submit" name="submit" class="formulario_btn btn btn-primary" id="enviar" value="Enviar"></div>
        <br><div><input type="reset" name="reset" class="formulario_btn btn btn-secondary" id="reset" value="Limpiar"></div>
    </form>
</div>

<div id="volver">
    <a href="../../../Indice/Vista/Estructura/Indice.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>