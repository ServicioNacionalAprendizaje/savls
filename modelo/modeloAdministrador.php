<?php
class Administrador{
    private $idAdministrador;
    private $nombreCompleto;
    private $tipoDocumento;
    private $numeroDocumento;
    private $dirección;
    private $telefono;
    private $correo;
    public $conn=null;

    //idAdministrador
    public function getidAadministrador(){return $this->idAdministrador;}
    public function setidAdministrador($idAdministrador){$this->idAdministrador = $idAdministrador;}

    //nombreCompleto
    public function getnombreCompleto(){return $this->nombreCompleto;}
    public function setnombreCompleto($nombreCompleto){$this->nombreCompleto = $nombreCompleto;}

    //tipoDocumento
    public function gettipoDocumento(){return $this->tipoDocumento;}
    public function settipoDocumento($tipoDocumento){$this->tipoDocumento = $tipoDocumento;} 

    //numeroDocumento
    public function getnumeroDocumento(){return $this->numeroDocumento;}
    public function setnumeroDocumento($numeroDocumento){$this->numeroDocumento = $numeroDocumento;} 

    //dirección
    public function getdirección(){ return $this->dirección;}
    public function setdirección($dirección) { $this->dirección =$dirección;}

    //telefono
    public function gettelefono(){ return $this->telefono;}
    public function settelefono($telefono) { $this->telefono =$telefono;}

    //correo
    public function getcorreo(){ return $this->correo;}
    public function setcorreo($correo = 1) { $this->correo =$correo;}

   
    //conexion
    public function __construct() {$this->conn = new Conexion();}

    public function Agregar(administrador){
        $sentenciaSql = "INSERT INTO entidad('nombreCompleto','tipoDocumento','numeroDocumento','direccion','telefono','correo')
                        VALUES(
                            $this->'',$this->'',$this->,$this->'',$this->'',$this->'');  
        ";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Modificar(){
        $sentenciaSql = "UPDATE Aprendiz SET nombreCompleto=?, tipoDocumento=?, numeroDocumento=?, direccion=?, telefono=?, correo=? WHERE idAdministrador=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Eliminar(){
        $consulta="DELETE FROM Aprendiz WHERE numeroDocumento=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Consultar(){
        $consulta="SELECT * FROM Aprendiz WHERE numeroDocumento=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();

    private function obtenerCondicion(){
     
        
    }


    public function __destruct() {
        echo "<br>destruido: " . $this->nombreCompleto;
        echo "<br>destruido: " . $this->tipoDocumento;
        echo "<br>destruido: " . $this->numeroDocumento;
        echo "<br>destruido: " . $this->direccion;
        echo "<br>destruido: " . $this->telefono;
        echo "<br>destruido: " . $this->correo;
    }       
}
?>
