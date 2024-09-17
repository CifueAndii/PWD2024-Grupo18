<?php
    $tituloPagina = "TP 1 - Ejercicio 2";
    include_once("Estructura/Encabezado.php");
?>

<div id="ejercicio">
    <form align="center" id="ejercicioFormulario" name="ejercicio2" method="get" action="Accion/AccionForm2.php">
    <h3>Ingrese las horas por dia de Programaci&oacute;n Web Din&aacute;mica</h3><br>
        <table>
            <tr>
                <td class="textForm">Lunes: </td>
                <td><input type="number" name="lunes" id="lunes" class="inputForm" min="0" max="6" required></td>
            </tr>
            <tr>
                <td class="textForm">Martes: </td>
                <td><input type="number" name="martes" id="martes" class="inputForm" min="0" max="6" required></td>
            </tr>
            <tr>
                <td class="textForm">Miercoles: </td>
                <td><input type="number" name="miercoles" id="miercoles" class="inputForm" min="0" max="6" required></td>
            </tr>
            <tr>
                <td class="textForm">Jueves: </td>
                <td><input type="number" name="jueves" id="jueves" class="inputForm" min="0" max="6" required></td>
            </tr>
            <tr>
                <td class="textForm">Viernes: </td>
                <td><input type="number" name="viernes" id="viernes" class="inputForm" min="0" max="6" required></td>
            </tr>
            <tr>
            <td colspan="2"><br><div><input type="submit" name="submit" id="enviar" class="formulario_btn btn btn-primary" value="Enviar"></div></td>
            </tr>
        </table>
    </form>
</div>

<div id="volver">
    <a href="../../Indice/Vista/Estructura/Indice.php">Volver</a>
</div>

<?php
    include_once("Estructura/Pie.php");
?>