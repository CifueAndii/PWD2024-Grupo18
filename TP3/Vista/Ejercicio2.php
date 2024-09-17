<?php
    $tituloPagina = "TP 3 - Ejercicio 2";
    include_once("Estructura/Encabezado.php");
?>

<div id="ejercicio">
    <form id="ejercicioFormulario" name="formulario" method="post" action="Accion/AccionForm2.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td><h5>Cargar archivo txt</h5></td>
                <td><input id="archivo" name="archivo" type="file" class="form-control" required /></td>
            </tr>
        </table>
        <input type="submit" value="Enviar Archivo" name="Submit" class="formulario_btn btn btn-primary">
    </form>
</div>

<div id="volver">
    <a href="../../Indice/Vista/Estructura/Indice.php">Volver</a>
</div>

<?php
    include_once("Estructura/Pie.php");
?>