<?php
class Persona {
    private $nroDni;
    private $apellido;
    private $nombre;
    private $fechaNac;
    private $telefono;
    private $domicilio;
    private $mensajeOperacion;

    public function __construct() {
        $this->nroDni = "";
        $this->apellido = "";
        $this->nombre = "";
        $this->fechaNac = "";
        $this->telefono = "";
        $this->domicilio = "";
        $this->mensajeOperacion = "";
    }

    public function setear($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio) {
        $this->setNroDni($nroDni);
        $this->setApellido($apellido);
        $this->setNombre($nombre);
        $this->setFechaNac($fechaNac);
        $this->setTelefono($telefono);
        $this->setDomicilio($domicilio);
    }

    public function getNroDni(){
        return $this->nroDni;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getFechaNac(){
        return $this->fechaNac;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function getDomicilio(){
        return $this->domicilio;
    }
    public function getMensajeOperacion(){
        return $this->mensajeOperacion;
    }

    public function setNroDni($nroDniNuevo){
        $this->nroDni = $nroDniNuevo;
    }
    public function setApellido($apellidoNuevo){
        $this->apellido = $apellidoNuevo;
    }
    public function setNombre($nombreNuevo){
        $this->nombre = $nombreNuevo;
    }
    public function setFechaNac($fechaNacNuevo){
        $this->fechaNac = $fechaNacNuevo;
    }
    public function setTelefono($telefonoNuevo){
        $this->telefono = $telefonoNuevo;
    }
    public function setDomicilio($domicilioNuevo){
        $this->domicilio = $domicilioNuevo;
    }
    public function setMensajeOperacion($mensajeOperacionNuevo){
        $this->mensajeOperacion = $mensajeOperacionNuevo;
    }

    public function cargar(){
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM persona WHERE nroDni = '" . $this->getNroDni() . "'";
        if($base->Iniciar()){
            $res = $base->Ejecutar($sql);
            if($res > -1){
                if($res > 0){
                    $row = $base->Registro();
                    $this->setear($row['nroDni'], $row['apellido'], $row['nombre'], $row['fechaNac'], $row['telefono'], $row['domicilio']);
                    $resp = true;
                }
            }
        }else{
            $this->setMensajeOperacion("Persona->listar: " . $base->getError());
        }
        return $resp;
    }

    public static function listar($parametro = ""){
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM persona";
        if($parametro != "") {
            $sql .= 'WHERE ' . $parametro;
        }
        $res = $base->Ejecutar($sql);
        if($res > -1){
            if($res > 0){
                while($row = $base->Registro()){
                    $objPersona = new Persona();
                    $objPersona->setear($row['nroDni'], $row['apellido'], $row['nombre'], $row['fechaNac'], $row['telefono'], $row['domicilio']);
                    $arreglo[] = $objPersona;
                }
            }
        }else{
            $this->setMensajeOperacion("Persona->listar: " . $base->getError());
        }
        return $arreglo;
    }

    public function insertar(){
        $resp = false;
        $base = new BaseDatos();
        $sql = "INSERT INTO persona(nroDni, apellido, nombre, fechaNac, telefono, domicilio)
                VALUES ('".$this->getNroDni()."','".$this->getApellido()."','".$this->getNombre().
                "','".$this->getFechaNac()."','".$this->getTelefono()."','".$this->getDomicilio()."')";
        if($base->Iniciar()){
            if($base->Ejecutar($sql)){
                $resp = true;
            }else{
                $this->setmensajeOperacion("Persona->insertar: " . $base->getError());
            }
        }else{
            $this->setmensajeOperacion("Persona->insertar: " . $base->getError());
        }
        return $resp;
    }

    public function modificar(){
        $resp = false;
        $base = new BaseDatos();
        $sql = "UPDATE persona SET apellido = '".$this->getApellido()."', nombre = '".$this->getNombre().
                "', fechaNac = '".$this->getFechaNac()."', telefono = '".$this->getTelefono().
                "', domicilio = '".$this->getDomicilio()."' WHERE nroDni = '".$this->getNroDni()."'";
        if($base->Iniciar()){
            if($base->Ejecutar($sql)){
                $resp = true;
            }else{
                $this->setMensajeOperacion("Persona->modificar: " . $base->getError());
            }
        }else{
            $this->setMensajeOperacion("Persona->modificar: " . $base->getError());
        }
        return $resp;
    }

    public function eliminar(){
        $resp = false;
        $base = new BaseDatos();
        $sql = "DELETE FROM persona WHERE nroDni = '" . $this->getNroDni() . "'";
        if($base->Iniciar()){
            if($base->Ejecutar($sql)){
                $resp = true;
            }else{
                $this->setMensajeOperacion("Persona->eliminar: " . $base->getError());
            }
        }else{
            $this->setMensajeOperacion("Persona->eliminar: " . $base->getError());
        }
        return $resp;
    }
}
?>