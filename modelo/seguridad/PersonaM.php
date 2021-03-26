<?php
class Persona{
    private $idPersona;
    private $nombre;
    private $apellido;
    private $edad;
    private $genero;
    private $estado;
    private $fechaCreacion;
    private $fechaModificacion;
    private $idUsuarioCreacion;
    private $idUsuarioModificacion;
    public $conn=null;

    //idPersona
    public function getIdPersona(){return $this->idPersona;}
    public function setIdPersona($idPersona){$this->idPersona = $idPersona;}

    //nombreCompleto
    public function getNombre(){return $this->nombre;}
    public function setNombre($nombre){$this->nombre = $nombre;} 

    //Apellido
    public function getApellido(){ return $this->apellido;}
    public function setApellido($apellido) { $this->apellido =$apellido;}

    //Edad
    public function getEdad(){ return $this->edad;}
    public function setEdad($edad) { $this->edad =$edad;}

    //genero
    public function getGenero(){ return $this->genero;}
    public function setGenero($genero) { $this->genero =$genero;}

    //estado
    public function getEstado(){ return $this->estado;}
    public function setEstado($estado) { $this->estado =$estado;}

    //fechaCreacion
    public function getFechaCreacion(){ return $this->fechaCreacion;}
    public function setFechaCreacion($fechaCreacion ) { $this->fechaCreacion =$fechaCreacion;}

 
    //fechaModificacion
    public function getFechaModificacion(){ return $this->fechaModificacion;}
    public function setFechaModificacion($fechaModificacion) { $this->fechaModificacion =$fechaModificacion;}

    //idUsuarioCreacion
    public function getIdUsuarioCreacion(){ return $this->idUsuarioCreacion;}
    public function setIdUsuarioCreacion($idUsuarioCreacion) { $this->idUsuarioCreacion =$idUsuarioCreacion;}

    //idUsuarioModificacion
    public function getIdUsuarioModificacion(){ return $this->idUsuarioModificacion;}
    public function setIdUsuarioModificacion($idUsuarioModificacion) { $this->idUsuarioModificacion =$idUsuarioModificacion;}



    //conexion
    public function __construct() {$this->conn = new Conexion();}

    public function Agregar(){
        $sentenciaSql = "INSERT INTO persona('id_persona', 'nombre', 'apellido', 'edad', 'genero', 'estado', 'fecha_creacion', 'fecha_modificacion', 'id_usuario_creacion', 'id_usuario_modificacion')
                        VALUES($this->'1', $this->'Esdilmar', $this->'de trujillo', $this->20, $this->'M' , $this->'activo', $this->'2021-03-03', $this->'2021-03-20' , $this->'1', $this->'1');    
        ";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Modificar(){
        $sentenciaSql = "UPDATE persona SET nombre=?, apellido=?, edad=?, genero=?, estado=?, fecha_creacion=?, fecha_modificacion=?, idusuariocreacion=?, id_usuario_modificacion=? WHERE id_persona=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Eliminar(){
        $consulta="DELETE FROM persona WHERE id_persona=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Consultar(){
        $consulta="SELECT * FROM persona WHERE id_persona=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();

    private function obtenerCondicion(){
     
        
    }


    public function __destruct() {
        echo "<br>destruido: " . $this->idpersona;
        echo "<br>destruido: " . $this->nombre;
        echo "<br>destruido: " . $this->apellido;
        echo "<br>destruido: " . $this->edad;
        echo "<br>destruido: " . $this->genero;
        echo "<br>destruido: " . $this->estado;
        echo "<br>destruido: " . $this->fechaCreacion;
        echo "<br>destruido: " . $this->fechaModificacion;
        echo "<br>destruido: " . $this->idUsuarioCreacion;
        echo "<br>destruido: " . $this->idUsuarioModificacion;
    }       
}
?>