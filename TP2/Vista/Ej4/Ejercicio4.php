<?php
    $tituloPagina = "TP 2 - Ejercicio 4";
    include_once("../Estructura/Encabezado.php");
?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#formulario").validate({
            rules: {
                titulo: {
                    pattern: /^([0-9a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+)(\s+([0-9a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+))*$/,
                    required: true,
                },
                director: {
                    pattern: /^([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+)(\s+([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+))*$/,
                    required: true,
                },
				produccion: {
                    pattern: /^([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+)(\s+([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+))*$/,
                    required: true,
                },
				nacionalidad: {
                    pattern: /^([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+)(\s+([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+))*$/,
                    required: true,
                },
				duracion: {
                    required: true,
					min: 1,
					max: 999,
                },
				actores: {
                    pattern: /^([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ'-,]+)(\s+([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ'-,]+))*$/,
                    required: true,
                },
				guion: {
                    pattern: /^([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+)(\s+([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+))*$/,
                    required: true,
                },
				year: {
                    required: true,
					min: 1,
					max: 9999,
                },
				genero: {
                    required: true,
                },
				restriccion: {
                    required: true,
                },
				sinopsis: {
					pattern: /^([0-9a-zñüáéíóúA-ZÑÜÁÉÍÓÚ'.,]+)(\s+([0-9a-zñüáéíóúA-ZÑÜÁÉÍÓÚ'.,]+))*$/,
                    required: true,
                },
				
            },
        })
    });
</script>

<section>
<div class="row justify-content-center">
	<div class="col-md-12">
		<form class="formulario needs-validation row g-3" id="formulario" method="post" action="AccionForm4.php">
			<div class="titulo  pl-0 mt-4">
				<h5><i class="bi bi-pencil-square"></i>Cinem@s</h5>
			</div>
			<div class="col">
				<!--TITULO-->
				<div id="grupo_titulo">
					<label class="formulario_label form-label mb-0">Titulo</label>
					<div class="formulario_grupo-input">
						<input type="text" class="formulario_input form-control" id="titulo" name="titulo">
					</div>
				</div>
				<!--DIRECTOR-->
				<div id="grupo_director">
					<label class="formulario_label form-label mb-0">Director</label>
					<div class="formulario_grupo-input">
						<input type="text" class="formulario_input form-control" id="director" name="director">
					</div>
				</div>
				<!--PRODUCCION-->
				<div id="grupo_produccion">
					<label class="formulario_label form-label mb-0">Produccion</label>
					<div class="formulario_grupo-input">
						<input type="text" class="formulario_input form-control" id="produccion" name="produccion">
					</div>
				</div>
				<!--NACIONALIDAD-->
				<div id="grupo_nacionalidad">
					<label class="formulario_label form-label mb-0">Nacionalidad</label>
					<div class="formulario_grupo-input">
						<input type="text" class="formulario_input form-control" id="nacionalidad" name="nacionalidad">
					</div>
				</div>
				<!--DURACION-->
				<div id="grupo_duracion">
					<label class="formulario_label form-label mb-0">Duracion</label>
					<input type="number" class="formulario_input form-control" id="duracion" name="duracion">
				</div>

			</div>
			<div class="col">
				<!--ACTORES-->
				<div id="grupo_actores">
					<label class="formulario_label form-label mb-0">Actores</label>
					<div class="formulario_grupo-input">
						<input type="text" class="formulario_input form-control" id="actores" name="actores">
					</div>
				</div>
				<!--GUION-->
				<div id="grupo_guion">
					<label class="formulario_label form-label mb-0">Guion</label>
					<div class="formulario_grupo-input">
						<input type="text" class="formulario_input form-control" id="guion" name="guion">
					</div>
				</div>
				<!--AÑO-->
				<div id="grupo_anio">
					<label class="formulario_label form-label mb-0">Año</label>
					<div class="formulario_grupo-input">
						<input type="number" class="form-control formulario_input" id="year" name="year">
					</div>
				</div>
				<!--GENERO-->
				<div class="formulario_grupo col-3 mb-3" id="grupo_genero">
					<label class="formulario_label form-label mb-0">Genero</label>
					<div class="formulario_grupo-input">
						<select id="genero" name="genero" class="formulario_input form-select">
							<option selected disabled value="">Elije...</option>
							<option>Comedia</option>
							<option>Drama</option>
							<option>Terror</option>
							<option>Romanticas</option>
							<option>Suspenso</option>
							<option>Otras</option>
						</select>
					</div>
				</div>
				<!--EDAD-->
				<div id="grupo_edad">
					<label class="formulario_label mb-2">Restricciones de edad</label>
					<div class="formulario_grupo-input">
						<input type="radio" name="restriccion" id="restriccion" value="a" class="formulario_input form-check-input"><label class="formulario_label etiqueta form-check-label">Todo publico</label>
						<input type="radio" name="restriccion" id="restriccion" value="b" class="formulario_input form-check-input"><label class="formulario_label form-check-label"> Mayores de 7 años</label>
						<input type="radio" name="restriccion" id="restriccion" value="c" class="formulario_input form-check-input"><label class="formulario_label form-check-label"> Mayores de 18 años</label>
					</div>
				</div>
			</div>
			<!--SINOPSIS-->
			<div class="row">
				<div id="sinopsis">
					<label class="formulario_label form-label">Sinopsis</label>
					<div clas="formulario_grupo-input">
						<textarea class="formulario_input form-control" id="sinopsis" rows="3" name="sinopsis"></textarea>
					</div>
				</div>
			</div>
			<!--ENVIAR-->
			<div class="row justify-content-center pb-3 align-items-center">
				<div class="col-6">
					<div class="formulario_grupo formulario_grupo-btn-enviar d-flex justify-content-end">
						<button type="submit" class="formulario_btn btn btn-primary" value="Enviar">Enviar</button>
						<button type="reset" class="formulario_btn btn btn-secondary ms-2">Borrar</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
</section>

<div id="volver">
	<a href="../../../Indice/Vista/Estructura/Indice.php">Volver</a>
</div>

