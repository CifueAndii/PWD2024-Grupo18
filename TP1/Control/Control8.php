<?php
    class Control8{
        public function precioEntrada($infoFormulario){
            $edad = $infoFormulario["edad"];
            $esEstudiante = $infoFormulario["estudiante"];

            if ($edad < 12 && $esEstudiante == 1){
                $precioEntrada = 160;
            }elseif($edad >= 12 && $esEstudiante == 1){
                $precioEntrada = 180;
            }else{
                $precioEntrada = 300;
            }
            return $precioEntrada;
        }
    }
?>