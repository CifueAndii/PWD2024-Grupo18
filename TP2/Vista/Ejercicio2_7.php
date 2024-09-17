<?php
    $tituloPagina = "TP 2 - Ejercicio 2_7";
    include_once("../Estructura/Encabezado.php");
?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#ejercicioFormulario").validate({
            rules: {
                numero1: {
                    required: true,
                },
                numero2: {
                    required: true,
                },
                operacion: {
                    required: true,
                },
            },
        })
    });
</script>

<div id="ejercicio">
    <form id="ejercicioFormulario" name="formulario" method="get" action="AccionForm2_7.php">
    <table>
        <tr>
            <td class="textForm">Num 1: </td>
            <td><input type="number" name="numero1" id="numero1" class="form-control formulario_input"></td>
        </tr>
        <tr>
            <td class="textForm">Num2: </td>
            <td><input type="number" name="numero2" id="numero2" class="form-control formulario_input"></td>
        </tr>
        </tr>
            <tr>
                <td class="textForm">Operación: </td>
                <td>
                <select name="operacion" id="operacion" class="formulario_input form-select">
                    <option disabled selected value>Elija una operación</option>
                    <option value="SUMA">SUMA</option>
                    <option value="RESTA">RESTA</option>
                    <option value="MULTIPLICACION">MULTIPLICACION</option>
                    <option value="DIVISION">DIVISION</option>
                </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><br><div><input type="submit" name="submit" id="enviar" class="formulario_btn btn btn-primary" value="Enviar"></div></td>
            </tr>
    </table>
    </form>
</div>

<div id="volver">
    <a href="../../../Indice/Vista/Estructura/Indice.php" >Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>