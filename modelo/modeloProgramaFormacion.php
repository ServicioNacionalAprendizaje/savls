<?php
class programaFormacion{
    private $idProgramaFormacion;
    private $nombre;
    private $descripcion;
    private $instructorIdIstructor;
    private $administradorIdAdministrador;

    public $conn=null;

    //idProgramaFormacion
    public function getidProgramaFormacion(){return $this->idProgramaFormacion;}
    public function setidProgramaFormacion($idProgramaFormacion){$this->idProgramaFormacion = $idProgramaFormacion;}

    //nombre
    public function getnombre(){return $this->nombre;}
    public function setnombre($nombre){$this->nombre = $nombre;}

    //descripcion
    public function getdescripcion(){return $this->descripcion;}
    public function setdescripcion($descripcion){$this->descripcion = $descripcion;} 

    //instructorIdIstructor
    public function getinstructorIdIstructor(){ return $this->instructorIdIstructor;}
    public function setinstructorIdIstructor($instructorIdIstructor) { $this->instructorIdIstructor =$instructorIdIstructor;}

    //administradorIdAdministrador
    public function getadministradorIdAdministrador(){ return $this->administradorIdAdministrador;}
    public function setadministradorIdAdministrador($administradorIdAdministrador) { $this->administradorIdAdministrador =$administradorIdAdministrador;}

   

    //conexion
    public function __construct() {$this->conn = new Conexion();}

    public function Agregar(){
        $sentenciaSql = "INSERT INTO programa_formacion('idProgramaFormacion','nombre','descripcion','instructorIdIstructor','administradorIdAdministrador')
                        VALUES(
                            $this->,$this->'',$this->'',$this->,$this->);  
        ";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();

    public function Modificar(){
        $sentenciaSql = "UPDATE programa_formacion SET nombre=?, descripcion=?, instructorIdIstructor=?, administradorIdAdministrador=?  WHERE idProgramaFormacion=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }
    public function Eliminar(){
        $consulta="DELETE FROM programa_formacion WHERE idProgramaFormacion=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Consultar(){
        $consulta="SELECT * FROM programa_formacion WHERE idProgramaFormacion=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }
    private function obtenerCondicion(){
     
        
    }


    public function __destruct() {
    $this->idProgramaFormacion;
    $this->nombre;
    $this->descripcion;
    $this->instructorIdIstructor;
    $this->administradorIdAdministrador;
    }       
}
?>
