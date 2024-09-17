$(document).ready(function(){
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
            imagen: {
                required: true,
            },
        },
    })
});

