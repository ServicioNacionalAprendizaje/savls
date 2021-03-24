<?php
class Aprendiz{
    private $idAprendiz;
    private $nombre;
    private $apellido;
    private $genero; 
    private $edad;
    private $idPersona;
    public $conn=null;

    //idAprendiz
    public function getidAprendiz(){return $this->idAprendiz;}
    public function setidAprediz($idAprendiz){$this->idAprendiz = $idAprendiz;}
    
    //nombre
    public function getnombre(){return $this->nombre;}
    public function setnombre($nombre){$this->nombre = $nombre;}

    //apellido
    public function getapellido(){return $this->apellido;}
    public function setapellido($apellido){$this->apellido = $apellido;} 

    //genero
    public function getgenero(){ return $this->genero;}
    public function setgenero($genero) { $this->genero =$genero;}

    //edad
    public function getedad(){ return $this->edad;}
    public function setedad($edad) { $this->edad =$edad;}

    //idPersona
    public function getidPersona(){ return $this->idPersona;}
    public function setidPersona($idPersona ) { $this->idPersona =$idPersona;}

 

    //conexion
    public function __construct() {$this->conn = new Conexion();}

    public function Agregar(){
        $sentenciaSql = "INSERT INTO Aprendiz('nombre', 'apellido', 'genero', 'edad', 'idPersona')
                        VALUES($this->'', $this->'',$this->'' , $this->'', $this->'' );    
        ";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Modificar(){
        $sentenciaSql = "UPDATE Aprendiz SET nombre=?, apellido=?, genero=?, edad=?, idPersona=? WHERE idAprendiz=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Eliminar(){
        $consulta="DELETE FROM Aprendiz WHERE idAprendiz=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Consultar(){
        $consulta="SELECT * FROM Aprendiz WHERE idAprendiz=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();

    private function obtenerCondicion(){
     
        
    }


    public function __destruct() {
        $this->idAprendiz;
        $this->nombre;
        $this->apellido;
        $this->genero;
        $this->edad;
        $this->idPersona;
    }       
}
?>
