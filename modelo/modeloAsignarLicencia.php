<?php
class asignarLicenciaPrograma{
    private $idAsignarLicenciaPrograma;
    private $idProgramaFormacion;
    public $conn=null;

    //idAsignarLicenciaPrograma
    public function getidAsignarLicenciaPrograma(){return $this->idAsignarLicenciaPrograma;}
    public function setidAsignarLicenciaPrograma($idAsignarLicenciaPrograma){$this->idAsignarLicenciaPrograma = $idAsignarLicenciaPrograma;}

    //idProgramaFormacion
    public function getidProgramaFormacion(){return $this->idProgramaFormacion;}
    public function setidProgramaFormacion($idProgramaFormacion){$this->idProgramaFormacion = $idProgramaFormacion;}

    

    //conexion
    public function __construct() {$this->conn = new Conexion();}

    public function Agregar(){
        $sentenciaSql = "INSERT INTO asignar_licencia_programa('idAsignarLicenciaPrograma','idProgramaFormacion')
                        VALUES(
                            $this->,$this->);  
        ";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();

    public function Modificar(){
        $sentenciaSql = "UPDATE asignar_licencia_programa SET idProgramaFormacion=?WHERE idAsignarLicenciaPrograma=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Eliminar(){
        $consulta="DELETE FROM asignar_licencia_programa WHERE idAsignarLicenciaPrograma=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Consultar(){
        $consulta="SELECT * FROM asignar_licencia_programa WHERE idAsignarLicenciaPrograma=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }
    private function obtenerCondicion(){
     
        
    }


    public function __destruct() {
            $this->idAsignarLicenciaPrograma;
            $this->idProgramaFormacion;
    }       
}
?>
