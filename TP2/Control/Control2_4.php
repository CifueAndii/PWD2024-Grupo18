<?php
    class Control2_4 {
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
    }
?>