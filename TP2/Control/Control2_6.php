<?php
    class Control2_6 {
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