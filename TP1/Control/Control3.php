<?php
    class Control3 {
        public function infoForm($datos){
            $mensaje = "Hola, yo soy ".$datos["nombre"]." ".$datos["apellido"].", tengo ".$datos["edad"]." año/s y vivo en ".$datos["direccion"].".<br><br>";
            return $mensaje;
        }
    }
?>