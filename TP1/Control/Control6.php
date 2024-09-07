<?php
    class Control6 {
        public function infoForm($datos){
            $mensaje = "Hola, yo soy ".$datos["nombre"]." ".$datos["apellido"].", tengo ".$datos["edad"]." año/s y vivo en ".$datos["direccion"].".<br><br>";
            return $mensaje;
        }
        
        public function esMayor($datos) {
            $edad = $datos['edad'];
            if ($edad >= 18) {
                $resultado = true;
            } else {
                $resultado = false;
            }
            return $resultado;
        }
        
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

        public function cantDeportes($datos) {
            $deportes = array();
            if(isset($datos['deporte'])) {
                $deportes = $datos['deporte'];
            }
            $cantDeportes = count($deportes);
            return $cantDeportes;
        }
    }
?>