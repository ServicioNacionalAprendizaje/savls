<?php
class Aprendiz{
    private $idAprendiz;
    private $nombreCompleto;
    private $tipDocumento;
    private $numeroDocumento;
    private $direccion;
    private $telefono;
    private $correo;
    public $conn=null;

    //idAprendiz
    public function getidAprendiz(){return $this->idAprendiz;}
    public function setidAprediz($idAprendiz){$this->idAprendiz = $idAprendiz;}

    //nombreCompleto
    public function getnombreCompleto(){return $this->nombreCompleto;}
    public function setnombreCompleto($nombreCompleto){$this->nombreCompleto = $nombreCompleto;} 

    //tipoDocumento
    public function gettipoDocumento(){ return $this->tipoDocumento;}
    public function settipoDocumento($tipDocumento) { $this->tipoDocumento =$tipDocumento;}

    //numeroDocumento
    public function getnumeroDocumento(){ return $this->numeroDocumento;}
    public function setnumeroDocumento($numeroDocumento) { $this->numeroDocumento =$numeroDocumento;}

    //direccion
    public function getdireccion(){ return $this->direccion;}
    public function setdireccion($direccion) { $this->direccion =$direccion;}

     //telefono
     public function gettelefono(){ return $this->telefono;}
     public function settelefono($telefono) { $this->telefono =$telefono;}

      //correo
    public function getcorreo(){ return $this->correo;}
    public function setcorreo($correo ) { $this->correo =$correo;}

 

    //conexion
    public function __construct() {$this->conn = new Conexion();}

    public function Agregar(){
        $sentenciaSql = "INSERT INTO Aprendiz( 'nombreCompleto', 'tipoDocumento', 'numeroDocumento', 'direccion', 'telefono', 'correo')
                        VALUES($this->'EsdilmarCabrera', $this->'CC', $this->202030303, $this->'cll 34 45-45' , $this->'3213472182', $this->'esdilmar123@gmail.com' );    
        ";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Modificar(){
        $sentenciaSql = "UPDATE Aprendiz SET nombreCompleto=?, tipoDocumento=?, numeroDocumento=?, direccion=?, telefono=?, correo=? WHERE idAprendiz=?";
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
