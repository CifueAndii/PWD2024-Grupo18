<?php
    /**
     * Función de encapsulamiento de métodos $_POST, $_GET y $FILES
     * @return array
     */
    function data_submitted() {
        $aux = array();
        if(!empty($_POST)) {
            $aux = $_POST;
        }elseif(!empty($_GET)){
            $aux = $_GET;
        }

        if(!empty($_FILES)) {
            $aux = array_merge($aux,$_FILES);
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
