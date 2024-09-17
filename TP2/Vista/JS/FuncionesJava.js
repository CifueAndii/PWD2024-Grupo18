$(document).ready(function() {
    $("#ejercicioFormulario").validate({
        rules: {
            numero: {
                required: true,
            },
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
            nombre: {
                pattern: /^([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+)(\s+([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+))*$/,
                required: true,
            },
            apellido: {
                pattern: /^([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+)(\s+([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+))*$/,
                required: true,
            },
            edad: {
                min: 1,
                max: 120,
                required: true,
            },
            direccion: {
                pattern: /^([0-9a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+)(\s+([0-9a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+))*$/,
                required: true,
            },
            estudio: {
                required: true,
            },
            sexo: {
                required: true,
            },
            username: {
                pattern: /^([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+)(\s+([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+))*$/,
                required: true,
            },
            password: {
                pattern: /^([0-9a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+)(\s+([0-9a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+))*$/,
                required: true,
                maxlength: 8,
            },
            estudiante: {
                required: true,
            },
        },
    })
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

