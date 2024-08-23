<?php
    class Control2_4 {
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