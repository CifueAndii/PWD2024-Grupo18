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

    function verEstructura($e){
        echo "<pre>";
        print_r($e);
        echo "</pre>"; 
    }
    
    // function __autoload($class_name){} <== DEPRECATED since PHP v7.2.0 / REMOVED since PHP v8.0.0
    /*function __autoload($class_name){
        //echo "class ".$class_name ;
        $directorys = array(
            $_SESSION['ROOT'].'Modelo/',
            $_SESSION['ROOT'].'Modelo/conector/',
            $_SESSION['ROOT'].'Control/',
          //  $GLOBALS['ROOT'].'util/class/',
        );
        //print_object($directorys) ;
        foreach($directorys as $directory){
            if(file_exists($directory.$class_name . '.php')){
                // echo "se incluyo".$directory.$class_name . '.php';
                require_once($directory.$class_name . '.php');
                return;
            }
        }
    }*/
 
    spl_autoload_register(function($class_name) {
        //echo "class " . $class_name ;
        $directorys = array(
            $_SESSION['ROOT'].'Modelo/',
            $_SESSION['ROOT'].'Modelo/conector/',
            $_SESSION['ROOT'].'Control/',
          //$GLOBALS['ROOT'].'util/class/',
        );
        //print_object($directorys) ;
        foreach($directorys as $directory) {
            if (file_exists($directory.$class_name . '.php')) {
                //echo "se incluyo" . $directory.$class_name . '.php';
                require_once($directory.$class_name . '.php');
                return;
            }
        }
    });
?>
