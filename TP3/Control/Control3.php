<?php
    class Control3{
        public function infoCine($datosForm){
            $tipo = $datosForm['imagen']['type'];
            if($tipo == 'image/jpeg' || $tipo == 'image/png'){
                $archivoTemporal = $datosForm['imagen']['tmp_name'];
            }else{
                $archivoTemporal = "ERROR!! NO se ha subido ninguna imagen";
            }

            $array = ['titulo' => $datosForm['titulo'],'director' => $datosForm['director'],
            'actores' => $datosForm['actores'],'guion' => $datosForm['guion'],
            'produccion' => $datosForm['produccion'],'year' => $datosForm['year'],
            'nacionalidad' => $datosForm['nacionalidad'],'genero' => $datosForm['genero'],
            'duracion' => $datosForm['duracion'],'restriccion' => $datosForm['restriccion'],
            'sinopsis' => $datosForm['sinopsis'],'imagen' => $archivoTemporal];
        return $array;
        }
    }
?>