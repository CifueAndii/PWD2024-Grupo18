<?php
    $tituloPagina = "TP 2 - Ejercicio 2_6";
    include_once("Estructura/Encabezado.php");
?>

<div id="ejercicio">
    <form id="ejercicioFormulario" name="form" method="get" action="Accion/AccionForm2_6.php">
        <table>
            <tr>
                <td class="textForm">Nombre: </td>
                <td><input type="text" name="nombre" id="nombre" class="inputForm"></td>
            </tr>
            <tr>
                <td class="textForm">Apellido: </td>
                <td><input type="text" name="apellido" id="apellido" class="inputForm"></td>
            </tr>
            <tr>
                <td class="textForm">Edad: </td>
                <td><input type="number" name="edad" id="edad" class="inputForm"></td>
            </tr>
            <tr>
                <td class="textForm">Dirección: </td>
                <td><input type="text" name="direccion" id="direccion" class="inputForm"></td>
            </tr>
            <tr>
                <td class="textForm">Nivel de Estudio: </td>
                <td>
                    <input type="radio" name="estudio" id="estudio" value="1">1 - No tiene estudios.<br>
                    <input type="radio" name="estudio" id="estudio" value="2">2 - Estudios primarios.<br>
                    <input type="radio" name="estudio" id="estudio" value="3">3 - Estudios secundarios.<br>
                </td>
            </tr>
            <tr>
                <td class="textForm">Sexo: </td>
                <td>
                    <select name="sexo" id="sexo" class="formulario_input form-select">
                        <option disabled selected value>Elija una opción</option>
                        <option value="hombre">Hombre</option>
                        <option value="mujer">Mujer</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="textForm">Deportes que practica: </td>
                <td>
                    <input type="checkbox" name="deporte[]" id="deporte" value="futbol">Futbol <br>
                    <input type="checkbox" name="deporte[]" id="deporte" value="basket">Basket <br>
                    <input type="checkbox" name="deporte[]" id="deporte" value="tennis">Tennis <br>
                    <input type="checkbox" name="deporte[]" id="deporte" value="voley">Voley <br>
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