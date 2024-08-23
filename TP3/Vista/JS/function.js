// Funciones Ejercicio 3

function borrar() {
    $("#year").css("borderColor","black");
    $("#duracion").css("borderColor","black");
}

function campos() {
    var $vacio;
    if ($("#titulo").val() !== "" && $("#actores").val() !== "" && $("#director").val() !== ""  
    && $("#guion").val() !== "" && $("#produccion").val() !== "" && $("#year").val() !== ""  
    && $("#nacionalidad").val() !== ""  && $("#genero").val() !== "" && $("#duracion").val() !== "" &&
    $("#sinopsis").val() !== "" ) {
        //campos no vacíos
        $vacio = false;
    } else {
        $vacio = true;
    }                
    return $vacio;
}

function validador() {
    //campos obligatorios
    if (!campos()) {
        //los campos no estan vacios
        var $enviar = false;
        if($("#year").val() > 1900 && $("#year").val() <= 2023) {
            //verifico el año
            $("#year").css("borderColor","green");
            if ($("#duracion").val() > 100 && $("#duracion").val() < 999) {
                //verifico la duracion
                $("#duracion").css("borderColor","green");
                $enviar = true;
            } else {
                $("#duracion").css("borderColor","red");
            }
        } else {
            $("#year").css("borderColor","red");
        }  
    } else {
        $("#form").css("borderColor","red");
    }
    return $enviar;
}