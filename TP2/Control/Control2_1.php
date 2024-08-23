<?php
    class Control2_1{
        public function tipoNumero($num){
            if($num > 0){
                $resultado = 1;
            }elseif($num < 0){
                $resultado = -1;
            }else{
                $resultado = 0;
            }
            return $resultado;
        }
    }
?>