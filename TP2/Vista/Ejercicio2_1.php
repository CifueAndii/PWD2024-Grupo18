<?php
    $tituloPagina = "TP 2 - Ejercicio 2_1";
    include_once("Estructura/Encabezado.php");
?>

<div id="ejercicio">
    <form align="center" name="ejercicio1" id="ejercicioFormulario" method="get" action="Accion/AccionForm2_1.php">
    <h4>Ingrese un Numero</h4>
    <table>
        <tr>
            <td><input type="number" name="numero" id="numero" class="inputForm"></td>
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