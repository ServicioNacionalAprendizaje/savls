<?php
class licencias{
    private $idLicencias;
    private $nombre;
    private $descripcion;
    private $tipoLicencia; 
    private $fechaAct;
    private $fechaVen;
    public $conn=null;

    //idLicencias
    public function getiidLicencias(){return $this->idLicencias;}
    public function setidLicencias($idLicencias){$this->idLicencias = $idLicencias;}

    //nombre
    public function getnombre(){return $this->nombre;}
    public function setnombre($nombre){$this->nombre = $nombre;}

    //descripcion
    public function getdescripcion(){return $this->descripcion;}
    public function setdescripcion($descripcion){$this->descripcion = $descripcion;} 

    //tipoLicencia
    public function gettipoLicencia(){ return $this->tipoLicencia;}
    public function settipoLicencia($tipLic) { $this->tipoLicencia =$tipoLicencia;}

    //fechaAct
    public function getfechaAct(){ return $this->fechaAct;}
    public function setfechaAct($fechaAct) { $this->fechaAct =$fechaAct;}

    //fechaVen
    public function getfechaVen(){ return $this->fechaVen;}
    public function setfechaVen($fechaVen ) { $this->fechaVen =$fechaVen;}

   
    //conexion
    public function __construct() {$this->conn = new Conexion();}

    public function Agregar(licencias){
        $sentenciaSql = "INSERT INTO entidad('nombre','descripcion','tipoLicencia','fechaAct','fechaVen')
                        VALUES(
                            $this->'',$this->'',$this->'',$this->'',$this->'');  
        ";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Modificar(){
        $sentenciaSql = "UPDATE licencias SET nombre=?, descripcion=?, tipoLicencia=?, fechaAct=?, fechaVen=? WHERE idLicencias=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Eliminar(){
        $consulta="DELETE FROM licencias WHERE idLicencias=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Consultar(){
        $consulta="SELECT * FROM licencias WHERE idLicencias=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();

    private function obtenerCondicion(){
     
        
    }


    public function __destruct() {
        $this->idLicencias;
        $this->nombre;
        $this->descripcion;
        $this->tipoLicencia;
        $this->fechaAct;
        $this->fechaVen;
    }       
}
?>