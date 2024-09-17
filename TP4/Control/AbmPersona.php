<?php
class AbmPersona{
    /**
    * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
    * @param array $param
    * @return Persona
    */
    private function cargarObjeto($param){
        $objPersona = null;
        if(array_key_exists('nroDni',$param) and array_key_exists('apellido',$param) and array_key_exists('nombre',$param) and array_key_exists('fechaNac',$param) and array_key_exists('telefono',$param) and array_key_exists('domicilio',$param)){
            $objPersona = new Persona();
            $objPersona->setear($param['nroDni'],$param['apellido'],$param['nombre'],$param['fechaNac'],$param['telefono'],$param['domicilio']);
        }
        return $objPersona;
    }

    /**
    * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
    * @param array $param
    * @return Persona
    */
    private function cargarObjetoConClave($param){
        $objPersona = null;
        if(isset($param['nroDni'])){
            $objPersona = new Persona();
            $objPersona->setear($param['nroDni'],null,null,null,null,null);
        }
        return $objPersona;
    }

    /**
    * Corrobora que dentro del arreglo asociativo están seteados los campos claves
    * @param array $param
    * @return boolean
    */
    private function seteadosCamposClaves($param){
        $resp = false;
        if(isset($param['nroDni'])){
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
        $objPersona = $this->cargarObjeto($param);
        //verEstructura($objPersona);
        if($objPersona != null and $objPersona->insertar()){
            $resp = true;
        }
        return $resp;
    }

    /**
    * Permite eliminar un objeto de la BD
    * @param array $param
    * @return boolean
    */
    public function baja($param){
        $resp = false;
        if($this->seteadosCamposClaves($param)){
            $objPersona = $this->cargarObjetoConClave($param);
            if($objPersona != null and $objPersona->eliminar()){
                $resp = true;
            }
        }
        return $resp;
    }

    /**
    * Permite modificar un objeto de la BD
    * @param array $param
    * @return boolean
    */
    public function modificacion($param){
        $resp = false;
        if($this->seteadosCamposClaves($param)){
            $objPersona = $this->cargarObjeto($param);
            if($objPersona != null and $objPersona->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }

    /**
    * Obtiene todas las Personas de la BD
    * @return array
    */
    public function obtenerPersonas(){
        $objPersona = new Persona();
        $col = $objPersona->listar("");
        return $col;
    }

    /**
    * Obtiene una Persona buscada por su documento
    * @param array $param
    * @return Persona
    */
    public function obtenerPersona($param){
        $objPersona = $this->cargarObjetoConClave($param);
        $res = $this->buscarPersona($objPersona);
        if(!$res){
            $objPersona = null;
        }
        return $objPersona;
    }

    /**
    * Busca si una Persona se encuentra en la BD
    * @param array $param
    * @return boolean
    */
    public function buscarPersona($objPersona){
        $res = false;
        if(isset($objPersona)){
            $res = $objPersona->cargar();
        }
        return $res;
    }

    public function arregloInfoAuto($param){
        $objPersona = $this->obtenerPersona($param);
        $infoAuto = null;

        if(isset($objPersona)){
            $infoAuto['nroDni'] = $objPersona->getNroDni();
            $infoAuto['apellido'] = $objPersona->getApellido();
            $infoAuto['nombre'] = $objPersona->getNombre();
            $infoAuto['fechaNac'] = $objPersona->getFechaNac();
            $infoAuto['telefono'] = $objPersona->getTelefono();
            $infoAuto['direccion'] = $objPersona->getDomicilio();
        }
        return $infoAuto;
    }

    /**
    * Permite buscar un objeto
    * @param array $param
    * @return boolean
    */
    public function buscar($param){
        $where = " true ";
        if ($param <> null) {
            if (isset($param['nroDni'])) {
                $where .= " and nroDni =" . $param['nroDni'];
            }
            if (isset($param['apellido'])) {
                $where .= " and apellido ='" . $param['apellido'] . "'";
            }
            if (isset($param['nombre'])) {
                $where .= " and nombre ='" . $param['nombre'] . "'";
            }
            if (isset($param['fechaNac'])) {
                $where .= " and fechaNac ='" . $param['fechaNac'] . "'";
            }
            if (isset($param['telefono'])) {
                $where .= " and telefono ='" . $param['telefono'] . "'";
            }
            if (isset($param['direccion'])) {
                $where .= " and direccion ='" . $param['direccion'] . "'";
            }
        }
        $arreglo = Persona::listar($where);  
        return $arreglo;
    }
}
?>