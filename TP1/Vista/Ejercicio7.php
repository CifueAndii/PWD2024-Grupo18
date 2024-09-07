<?php
    $tituloPagina = "TP 1 - Ejercicio 7";
    include_once("Estructura/Encabezado.php");
?>

<div id="ejercicio">
    <form id="ejercicioFormulario" name="formulario" method="get" action="Accion/AccionForm7.php">
    <table>
    <tr>
            <td class="textForm">Num 1: </td>
            <td><input type="number" name="numero1" id="numero1" class="form-control formulario_input" required></td>
        </tr>
        <tr>
            <td class="textForm">Num2: </td>
            <td><input type="number" name="numero2" id="numero2" class="form-control formulario_input" required></td>
        </tr>
        </tr>
            <tr>
                <td class="textForm">Operación: </td>
                <td>
                <select name="operacion" id="operacion" class="formulario_input form-select" required>
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
    <a href="../../Indice/Vista/Estructura/Indice.php">Volver</a>
</div>

<?php
    include_once("Estructura/Pie.php");
?>