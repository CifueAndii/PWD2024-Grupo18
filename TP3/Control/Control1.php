<?php
    class Control1{
        public function miArchivo($archivo){
            $resultado = "";
            $tamanio = $archivo['archivo']['size'];
            $tipo = $archivo['archivo']['type'];
            $error = $archivo['archivo']['error'];
            if($error <= 0){
                if(($tipo == 'application/pdf' || $tipo == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document')){
                    if($tamanio <= 2 * 1024 * 1024){
                        $resultado = "EXITO";
                    }else{
                        $resultado = "ERROR!! Tamaño superado";
                    }
                }else{
                    $resultado = "ERROR!! Tipo de archivo invalido";
                }
            }
            return $resultado;
        }
    }
?>