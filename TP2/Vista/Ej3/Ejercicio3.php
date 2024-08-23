<?php
    $tituloPagina = "TP 2 - Ejercicio 3";
    include_once("../Estructura/Encabezado.php");
?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#form_3").validate({
            rules: {
                username: {
                    pattern: /^([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+)(\s+([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+))*$/,
                    required: true,
                },
                password: {
                    pattern: /^([0-9a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+)(\s+([0-9a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+))*$/,
                    required: true,
                    maxlength: 8,
                },
            },
        })
    });
</script>

<script type="text/javascript">
    function contraIgual(){
        var $enviar;
        var $error = document.getElementById("error");
        if($("#password").val() !== $("#username").val()) {
            $enviar = true;
        }else{
            $error.style.display = "flex";
            $error.style.justifyContent = "center";
            $enviar = false;
        }
        return $enviar;
    }
</script>

<html>
<section>
<div>
    <form id="form_3" method="post" action="AccionForm3.php" onsubmit="return contraIgual();">
        <div class="container d-flex justify-content-center">
            <div class="bg-secondary m-4  d-flex justify-content-center align-items-center" style="height: 300px; width: 300px;">
                <div class="bg-light position-relative" style="height: 270px; width: 270px;">
                    <div class="d-grid gap-2 col-10 mx-auto position-absolute top-50 start-50 translate-middle">
                        <div>
                            <p class="h3 text-center">Member Login</p>
                        </div>
                        <div>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                        </div>
                        <div>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <div id="formconsole" class="error"></div>
                        <input type="submit" value="Login" id="boton" class="btn btn-success btn-primar">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
</section>

<div id="volver">
    <a href="../../../Indice/Vista/Estructura/Indice.php">Volver</a>
</div>
</html>
<?php
    include_once("../Estructura/Pie.php");
?>