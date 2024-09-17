<?php
class AbmAuto{
    /**
    * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
    * @param array $param
    * @return Auto
    */
    private function cargarObjeto($param){
        $objAuto = null;
        if(array_key_exists('patente',$param) and array_key_exists('marca',$param) and array_key_exists('modelo',$param) and array_key_exists('dniDuenio',$param)){
            $objAuto = new Auto();
            $objPersona = new Persona();
            $objPersona->setNroDni($param['dniDuenio']);
            $objPersona->cargar();
            $objAuto->setear($param['patente'],$param['marca'],$param['modelo'],$objPersona);
        }
        return $objAuto;
    }

    /**
    * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
    * @param array $param
    * @return Auto
    */
    private function cargarObjetoConClave($param){
        $objAuto = null;
        if(isset($param['patente'])){
            $objAuto = new Auto();
            $objAuto->setear($param['patente'],null,null,null);
        }
        return $objAuto;
    }

    /**
    * Corrobora que dentro del arreglo asociativo están seteados los campos claves
    * @param array $param
    * @return boolean
    */
    private function seteadosCamposClaves($param){
        $resp = false;
        if(isset($param['patente'])){
            $resp = true;
        }
        return $resp;
    }

    /**
    * Permite ingresar un objeto a la BD
    * @param array $param
    * @return boolean
    */
    public function alta($param){
        $resp = false;
        $objAuto = $this->cargarObjeto($param);
        // verEstructura($objAuto);
        if($objAuto != null and $objAuto->insertar()){
            $resp = true;
        }
        return $resp;
    }

    /**
    * Permite eliminar un objeto 
    * @param array $param
    * @return boolean
    */
    public function baja($param){
        $resp = false;
        if($this->seteadosCamposClaves($param)){
            $objAuto = $this->cargarObjetoConClave($param);
            if($objAuto != null and $objAuto->eliminar()){
                $resp = true;
            }
        }
        return $resp;
    }

    /**
    * Permite modificar un objeto
    * @param array $param
    * @return boolean
    */
    public function modificacion($param){
        $resp = false;
        if($this->seteadosCamposClaves($param)){
            $objAuto = $this->cargarObjeto($param);
            if($objAuto != null and $objAuto->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }

    /**
    * Obtiene todos los autos de la BD
    * @return array
    */
    public function obtenerAutos(){
        $objAuto = new Auto();
        $colAutos = $objAuto->listar("");
        return $colAutos;
    }

    /**
    * Obtiene un Auto buscado por su patente
    * @param array $param
    * @return Auto
    */
    public function obtenerAuto($param){
        $objAuto = $this->cargarObjetoConClave($param);
        $res = $this->buscarAuto($objAuto);
        if(!$res){
            $objAuto = null;
        }
        return $objAuto;
    }

    /**
    * Busca si un Auto se encuentra en la BD
    * @param array $param
    * @return boolean
    */
    public function buscarAuto($objAuto){
        $res = false;
        if(isset($objAuto)){
            $res = $objAuto->cargar();
        }
        return $res;
    }

    /**
    * Busca si un Auto le pertenece a una Persona
    * @param array $param
    * @return boolean
    */
    public function autoPertenece($auto,$dni){
        $res = false;
        if($auto->getObjPersona()->getNroDni() == $dni){
            $res = true;
        }
        return $res;
    }

    /**
    * Obtiene los Autos que posee una Persona
    * @param int
    * @return array
    */        
    public function obtenerAutosPersona($dni){
        $colAutos = $this->obtenerAutos();
        $autosPersona = null;
            
        foreach($colAutos as $objAuto){
            if($this->autoPertenece($objAuto,$dni)){
                $autosPersona[] = $objAuto;
            }
        }
        return $autosPersona;
    }

    /**
    * Permite buscar un objeto
    * @param array $param
    * @return boolean
    */
    public function buscar($param){
        $where = " true ";
        if ($param <> null) {
            if (isset($param['Patente'])) {
                $where .= " and Patente = '" . $param['Patente'] . "'";
            }
            if (isset($param['Marca'])) {
                $where .= " and Marca = '" . $param['Marca'] . "'";
            }
            if (isset($param['Modelo'])) {
                $where .= " and Modelo = '" . $param['Modelo'] . "'";
            }
            if (isset($param['DniDuenio'])) {
                $where .= " and DniDuenio = '" . $param['DniDuenio'] . "'";
            }
        } 
        $arreglo = Auto::listar($where);  
        return $arreglo;
    }
}
?>