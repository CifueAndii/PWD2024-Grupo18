<?php
    class Control3{
        public function validarUsuario($datos){
            $mensaje = "";
            $usuarios[0] = ["username" => "alevi","password" => "contra"];
            $usuarios[1] = ["username" => "perezAlex", "password" => "A13xA"];
            $usuarios[2] = ["username" => "RidoZ", "password" => "XYZ321"];

            $encontrado = false; //no se encuentra de inicio
            $i = 0;

            while($i<count($usuarios) && !$encontrado){
                $unUsuario = $usuarios[$i]["username"];
                if($unUsuario == $datos["username"]){
                    $unaContrasenia = $usuarios[$i]["password"];
                    if($unaContrasenia == $datos["password"]){
                        $mensaje = "¡Bienvenido/a ".$datos["username"]."!\n";
                    }else{
                        $mensaje = "¡¡".$datos["username"]." su contraseña es Incorrecta!! \n";
                    }
                    $encontrado = true;
                }else{
                    $i++;
                }
            }
            if(!$encontrado){
                $mensaje = "¡¡El Usuario ".$datos["username"]." NO existe!! \n";
            }
            return $mensaje;
        }       
    }
?>