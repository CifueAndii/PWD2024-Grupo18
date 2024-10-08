<?php
    $tituloPagina = "TP 1 - Ejercicio 3";
    include_once("Estructura/Encabezado.php");
?>

<div id="ejercicio">
    <form id="ejercicioFormulario" name="form" method="post" action="Accion/AccionForm3.php">
        <table>
            <tr>
                <td class="textForm">Nombre: </td>
                <td><input type="text" name="nombre" id="nombre" class="inputForm" pattern="([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+)(\s+([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+))*" required></td>
            </tr>
            <tr>
                <td class="textForm">Apellido: </td>
                <td><input type="text" name="apellido" id="apellido" class="inputForm" pattern="([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+)(\s+([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+))*" required></td>
            </tr>
            <tr>
                <td class="textForm">Edad: </td>
                <td><input type="number" name="edad" id="edad" class="inputForm"  min="1" max="100" required></td>
            </tr>
            <tr>
                <td class="textForm">Dirección: </td>
                <td><input type="text" name="direccion" id="direccion" class="inputForm" pattern="([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+)(\s+([0-9a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+))*" required></td>
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