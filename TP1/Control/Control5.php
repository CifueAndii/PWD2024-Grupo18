<?php
    class Control5 {
        public function infoEstudioSexo($datos) {
            $mensaje = "";
            if($datos["estudio"] == 1) {
                $mensaje = "No tengo estudios";
            }elseif($datos["estudio"] == 2) {
                $mensaje = "Tengo estudios primarios";
            }elseif($datos["estudio"] == 3) {
                $mensaje = "Tengo estudios secundarios";
            }
            $mensaje .= " y soy " . $datos["sexo"] . ". <br>";
            return $mensaje;
        }
    }
?>