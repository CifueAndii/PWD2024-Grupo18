<?php
    class Control2_2{
        public function suma($horas){
            $suma = $horas['lunes'] + $horas['martes'] + $horas['miercoles'] + $horas['jueves'] + $horas['viernes'];
            return $suma;
        }
    }
?>