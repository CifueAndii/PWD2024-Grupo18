<?php
    class Control2 {
        public function contenidoArchivo($archivo){
            $nombreTemporalArchivo = $archivo['archivo']['tmp_name'];
            $tipo = $archivo['archivo']['type'];
            if ($tipo == 'text/plain'){
                $contenido = file_get_contents($nombreTemporalArchivo);
            } else {
                $contenido = "ERROR";
            }
            return $contenido;
        }
    }
?>