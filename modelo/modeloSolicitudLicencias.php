<?php
class solicitudLicencias{
    private $idSolicitudLicencias;
    private $estdoAprovacion;
    private $idIstructor
    private $idAprendiz;
    private $instructorIdIstructor;
    private $administradorIdAdministrador;
    private $aprendizIdAprendiz;
    public $conn=null;

    //idSolicitudLicencias
    public function getidSolicitudLicencias(){return $this->idSolicitudLicencias;}
    public function setidSolicitudLicencias($idSolicitudLicencias){$this->idSolicitudLicencias = $idSolicitudLicencias;}

    //estdoAprovacion
    public function getestdoAprovacion(){return $this->estdoAprovacion;}
    public function setestdoAprovacion($estdoAprovacion){$this->estdoAprovacion = $estdoAprovacion;}

    //idIstructor
    public function getidIstructor(){return $this->idIstructor;}
    public function setidIstructor($idIstructor){$this->idIstructor = $idIstructor;} 

    //idAprendiz
    public function getidAprendiz(){ return $this->idAprendiz;}
    public function setidAprendiz($idAprendiz) { $this->idAprendiz =$idAprendiz;}

    //instructorIdIstructor
    public function getinstructorIdIstructor(){ return $this->instructorIdIstructor;}
    public function setinstructorIdIstructor($instructorIdIstructor) { $this->instructorIdIstructor =$instructorIdIstructor;}

    //administradorIdAdministrador
    public function getadministradorIdAdministrador(){ return $this->administradorIdAdministrador;}
    public function setadministradorIdAdministrador($administradorIdAdministrador) { $this->administradorIdAdministrador =$administradorIdAdministrador;}

    //aprendizIdAprendiz
    public function getaprendizIdAprendiz(){ return $this->aprendizIdAprendiz;}
    public function setaprendizIdAprendiz($aprendizIdAprendiz) { $this->aprendizIdAprendiz =$aprendizIdAprendiz;}

   

    //conexion
    public function __construct() {$this->conn = new Conexion();}

    public function Agregar(){
        $sentenciaSql = "INSERT INTO solicitud_licencias('idSolicitudLicencias','estdoAprovacion','idIstructor','idAprendiz','instructorIdIstructor','administradorIdAdministrador','aprendizIdAprendiz')
                        VALUES($this->,$this->'',$this->,$this->,$this->,$this->);  
        ";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();

    public function Modificar(){
        $sentenciaSql = "UPDATE solicitud_licencias SET estdoAprovacion=?, idIstructor=?, idAprendiz=?, instructorIdIstructor=?, administradorIdAdministrador=?, aprendizIdAprendiz=?  WHERE idSolicitudLicencias=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Eliminar(){
        $consulta="DELETE FROM solicitud_licencias WHERE idSolicitudLicencias=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Consultar(){
        $consulta="SELECT * FROM solicitud_licencias WHERE idSolicitudLicencias=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }
    private function obtenerCondicion(){
     
        
    }


    public function __destruct() {
        $this->idSolicitudLicencias;
       $this->estdoAprovacion;
       $this->idIstructor;
       $this->idAprendiz;
       $this->instructorIdIstructor;
       $this->administradorIdAdministrador;
       $this->aprendizIdAprendiz;
    }       
}
?>
