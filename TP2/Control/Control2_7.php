<?php
    class Control2_7 {
        public function infoOperacion($datos){
            $infoOperacion["operando1"] = $datos["numero1"];
            $infoOperacion["operando2"] = $datos["numero2"];
            $infoOperacion["operacion"] = $datos["operacion"];
            $operacion = $datos["operacion"];

            if($operacion == "SUMA"){
                $infoOperacion["resultado"] = $infoOperacion["operando1"] + $infoOperacion["operando2"];
            }elseif($operacion == "RESTA"){
                $infoOperacion["resultado"] = $infoOperacion["operando1"] - $infoOperacion["operando2"];
            }elseif($operacion == "MULTIPLICACION"){
                $infoOperacion["resultado"] = $infoOperacion["operando1"] * $infoOperacion["operando2"];
            }elseif($operacion == "DIVISION"){
                if($datos["numero2"] == 0){
                    $infoOperacion["resultado"] = "NO SE PUDE DIVIDIR POR 0";
                }else{
                    $infoOperacion["resultado"] = $infoOperacion["operando1"] / $infoOperacion["operando2"];
                }
            }
            return $infoOperacion;
        }
    }
?>