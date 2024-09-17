<?php
    class Control4{
        public function infoCinema($datos){
            //print_r($datos);
            $array = ['titulo' => $datos['titulo'],'director' => $datos['director'],
            'actores' => $datos['actores'],'guion' => $datos['guion'],
            'produccion' => $datos['produccion'],'year' => $datos['year'],
            'nacionalidad' => $datos['nacionalidad'],'genero' => $datos['genero'],
            'duracion' => $datos['duracion'],'restriccion' => $datos['restriccion'],
            'sinopsis' => $datos['sinopsis']];
        return $array;
        }
    }
?>