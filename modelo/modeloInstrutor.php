<?php
class Instructor{
    private $idIntructor;
    private $nombreCompleto;
    private $tipoDocumento;
    private $numeroDocumento;
    private $direccion;
    private $telefono;
    private $correo;
    public $conn=null;

    //idInstructor
    public function getIdIstructor(){return $this->idIstructor;}
    public function setIdIstructor($idIstructor){$this->idIstructor = $idInstructor;}

    //nombreCompleto
    public function getnombreCompleto(){return $this->nombreCmpleto;}
    public function setnombreCompleto($nombreCompleto){$this->nombreCompleto = $nombreCompleto;}

    //tipoDocumento
    public function gettipoDocumento(){return $this->tipoDocumento;}
    public function settipoDocumento($tipoDocumento){$this->tipoDocumento = $tipoDocumento;} 


    //numeroDocumento
    public function getnumeroDocumento(){return $this->numeroDocumento;}
    public function setnumeroDocumento($numeroDocumento){$this->numeroDocumento = $numeroDocumento;} 

    //direccion
    public function getdireccion(){ return $this->direccion;}
    public function setdirccion($direccion) { $this->direccion =$direccion;}

    //telefono
    public function gettelefono(){ return $this->telefono;}
    public function settelefono($telefono) { $this->telefono =$telefono;}

    //correo
    public function getcorreo(){ return $this->correo;}
    public function setcorreo($correo) { $this->correo =$correo;}


    //conexion
    public function __construct() {$this->conn = new Conexion();}

    public function Agregar(){
        $sentenciaSql = "INSERT INTO instructor(nombreCompleto,tipoDocumento,numeroDocumento,direccion,telefono,correo)
                        VALUES($this->'pepe perez',$this->'cc',$this->1006463282,$this->'Carrera 21 29-10',$this->'3167341276',$this->'esdilmar@hotmail.com');    
        ";
            $this->conn->Preparar($sentenciaSql);
            $this->conn->Ejecutar();
    }

    public function Modificar(){
        $sentenciaSql = "UPDATE instructor SET nombreCompleto=?, tipoDocumento=?, numeroDocumento=?, direccion=?, telefono=?, correo=? WHERE numeroDocumento=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Eliminar(){
        $sentenciaSql="DELETE FROM instructor WHERE numeroDocumento=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Consultar(){
        $sentenciaSql="SELECT * FROM istructor WHERE numeroDocumento=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }
    private function obtenerCondicion(){
     
        
    }


    public function __destruct() {
       $this->idInstructor;
       $this->nombreCompleto;
       $this->tipoDocumento;
       $this->numeroDocumento;
       $this->direccion;
       $this->telefono;
       $this->correo;
    }       
}
?>