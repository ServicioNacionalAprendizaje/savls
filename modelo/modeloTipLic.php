<?php
class tipoLicencia{
    private $idTipLic;
    private $licenciasGenericas;
    private $licenciasGlobales;
    private $idLicencias; 
    private $licenciasIdLicencias;
    public $conn=null;

    //idTipLic
    public function getiidTipLic(){return $this->idTipLic;}
    public function setidTipLic($idTipLic){$this->idTipLic = $idTipLic;}

    //licenciasGenericas
    public function getlicenciasGenericas(){return $this->licenciasGenericas;}
    public function setlicenciasGenericas($licenciasGenericas){$this->licenciasGenericas = $licenciasGenericas;}

    //licenciasGlobales
    public function getlicenciasGlobales(){return $this->licenciasGlobales;}
    public function setlicenciasGlobales($licenciasGlobales){$this->licenciasGlobales = $licenciasGlobales;} 

    //idLicencias
    public function getidLicencias(){ return $this->idLicencias;}
    public function setidLicencias($idLicencias) { $this->idLicencias =$idLicencias;}

    //licenciasIdLicencias
    public function getlicenciasIdLicencias(){ return $this->licenciasIdLicencias;}
    public function setlicenciasIdLicencias($licenciasIdLicencias) { $this->licenciasIdLicencias =$licenciasIdLicencias;}

   
    //conexion
    public function __construct() {$this->conn = new Conexion();}

    public function Agregar(administrador){
        $sentenciaSql = "INSERT INTO entidad('licenciasGenericas','licenciasGlobales','idLicencias','licenciasIdLicencias')
                        VALUES(
                            $this->'',$this->'',$this->'',$this->'');  
        ";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Modificar(){
        $sentenciaSql = "UPDATE tipoLicencia SET licenciasGenericas=?, licenciasGlobales=?, idLicencias=?, licenciasIdLicencias=? WHERE idTipLic=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Eliminar(){
        $consulta="DELETE FROM tipoLicencia WHERE idTipLic=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Consultar(){
        $consulta="SELECT * FROM tipoLicencia WHERE idTipLic=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();

    private function obtenerCondicion(){
     
        
    }


    public function __destruct() {
        $this->idTipLic;
        $this->licenciasGenericas;
        $this->licenciasGlobales;
        $this->idLicencias;
        $this->licenciasIdLicencias;
    }       
}
?>