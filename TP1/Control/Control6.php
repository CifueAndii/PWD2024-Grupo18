<?php
    class Control6 {
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