<?php
class Auto {
    private $patente;
    private $marca;
    private $modelo;
    private $objPersona;
    private $mensajeOperacion;

    public function __construct() {
        $this->patente = "";
        $this->marca = "";
        $this->modelo = "";
        $this->objPersona = new Persona();
        $this->mensajeOperacion = "";
    }

    public function setear($patente, $marca, $modelo, $objPersona) {
        $this->setPatente($patente);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setObjPersona($objPersona);
    }

    public function getPatente(){
        return $this->patente;
    }
    public function getMarca(){
        return $this->marca;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function getObjPersona(){
        return $this->objPersona;
    }
    public function getMensajeOperacion(){
        return $this->mensajeOperacion;
    }

    public function setPatente($patenteNueva){
        $this->patente = $patenteNueva;
    }
    public function setMarca($marcaNueva){
        $this->marca = $marcaNueva;
    }
    public function setModelo($modeloNuevo){
        $this->modelo = $modeloNuevo;
    }
    public function setObjPersona($objPersonaNuevo){
        $this->objPersona = $objPersonaNuevo;
    }
    public function setMensajeOperacion($mensajeOperacionNuevo){
        $this->mensajeOperacion = $mensajeOperacionNuevo;
    }

    public function cargar(){
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM auto WHERE patente = '" .$this->getPatente(). "'";
        if($base->Iniciar()){
            $res = $base->Ejecutar($sql);
            if($res > -1){
                if($res > 0){
                    $row = $base->Registro();
                    $objPersona = new Persona();
                    $objPersona->setNroDni($row['dniDuenio']);
                    $objPersona->cargar();
                    $this->setear($row['patente'], $row['marca'], $row['modelo'], $objPersona);
                    $resp = true;
                }
            }
        }else{
            $this->setmensajeoperacion("Auto->listar: " . $base->getError());
        }
        return $resp;
    }

    public static function listar($parametro = ""){ 
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM auto";
        if($parametro != ""){
            $sql .= 'WHERE ' . $parametro;
        }
        $res = $base->Ejecutar($sql);
        if($res > -1){
            if($res > 0){
                while($row = $base->Registro()){
                    $objAuto = new Auto();
                    $objPersona = new Persona();
                    $objPersona->setNroDni($row["dniDuenio"]);
                    $objPersona->cargar();
                    $objAuto->setear($row['patente'], $row['marca'], $row['modelo'], $objPersona);
                    $arreglo[] = $objAuto;
                }
            }
        }else{
            $this->setmensajeoperacion("Auto->listar: " . $base->getError());
        }
        return $arreglo;
    }

    public function insertar(){
        $resp = false;
        $base = new BaseDatos();
        $sql = "INSERT INTO auto(patente, marca, modelo, dniDuenio)
                VALUES ('".$this->getPatente()."','".$this->getMarca()."',".$this->getModelo().
                ",'".$this->getObjPersona()->getNroDni()."')";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            }else{
                $this->setmensajeoperacion("Auto->insertar: " . $base->getError());
            }
        }else{
            $this->setmensajeoperacion("Auto->insertar: " . $base->getError());
        }
        return $resp;
    }

    public function modificar(){
        $resp = false;
        $base = new BaseDatos();
        $sql = "UPDATE auto SET marca = '".$this->getMarca()."', modelo = ".$this->getModelo().
                ", dniDuenio = '".$this->getObjPersona()->getNroDni()."' WHERE patente = '".$this->getPatente()."'";
        if($base->Iniciar()){
            if($base->Ejecutar($sql)){
                $resp = true;
            }else{
                $this->setmensajeoperacion("Auto->modificar: " . $base->getError());
            }
        }else{
            $this->setmensajeoperacion("Auto->modificar: " . $base->getError());
        }
        return $resp;
    }

    public function eliminar(){
        $resp = false;
        $base = new BaseDatos();
        $sql = "DELETE FROM auto WHERE patente = '" . $this->getPatente() . "'";
        if($base->Iniciar()){
            if($base->Ejecutar($sql)){
                $resp = true;
            }else{
                $this->setmensajeoperacion("Auto->eliminar: " . $base->getError());
            }
        }else{
            $this->setmensajeoperacion("Auto->eliminar: " . $base->getError());
        }
        return $resp;
    }
}
?>