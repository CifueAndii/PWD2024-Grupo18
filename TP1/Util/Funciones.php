<?php
    /**
     * Función de encapsulamiento de métodos $_POST y $_GET
     * @return array
     */
    function data_submitted() {
        $aux = array();
        if(!empty($_POST)) {
            $aux = $_POST;
        }elseif(!empty($_GET)){
            $aux = $_GET;
        }
        if(count($aux)) {
            foreach($aux as $indice => $valor){
                if($valor == ""){
                    $aux[$indice] = null;
                }
            }
        }
        return $aux;
    }
?>
