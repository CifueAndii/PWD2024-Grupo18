<?php
    $tituloPagina = "TP 2 - Ejercicio 2_2";
    include_once("../Estructura/Encabezado.php");
?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#ejercicioFormulario").validate({
            rules: {
                lunes: {
                    min: 0,
                    max: 6,
                    required: true,
                },
                martes: {
                    min: 0,
                    max: 6,
                    required: true,
                },
                miercoles: {
                    min: 0,
                    max: 6,
                    required: true,
                },
                jueves: {
                    min: 0,
                    max: 6,
                    required: true,
                },
                viernes: {
                    min: 0,
                    max: 6,
                    required: true,
                },
            },
        })
    });
</script>

<div id="ejercicio">
    <form align="center" id="ejercicioFormulario" name="ejercicio2" method="get" action="AccionForm2_2.php">
    <h5>Ingrese las horas por dia de Programaci&oacute;n Web Din&aacute;mica</h5><br>
        <table>
            <tr>
                <td class="textForm">Lunes: </td>
                <td><input type="number" name="lunes" id="lunes" class="inputForm"></td>
            </tr>
            <tr>
                <td class="textForm">Martes: </td>
                <td><input type="number" name="martes" id="martes" class="inputForm"></td>
            </tr>
            <tr>
                <td class="textForm">Miercoles: </td>
                <td><input type="number" name="miercoles" id="miercoles" class="inputForm"></td>
            </tr>
            <tr>
                <td class="textForm">Jueves: </td>
                <td><input type="number" name="jueves" id="jueves" class="inputForm"></td>
            </tr>
            <tr>
                <td class="textForm">Viernes: </td>
                <td><input type="number" name="viernes" id="viernes" class="inputForm"></td>
            </tr>
            <tr>
            <td colspan="2"><br><div><input type="submit" name="submit" id="enviar" class="formulario_btn btn btn-primary" value="Enviar"></div></td>
            </tr>
        </table>
    </form>
</div>

<div id="volver">
    <a href="../../../Indice/Vista/Estructura/Indice.php">Volver</a>
</div>

<?php
    include_once("../Estructura/Pie.php");
?>