<?php
class Rol{
    private $idRol;
    private $descripcion;
    private $estado;
    private $fechaCreacion;
    private $fechaModificacion;
    private $idUsuarioCreacion;
    private $idUsuarioModificacion;
    public $conn=null;

    //idAprendiz
    public function getIdRol(){return $this->idRol;}
    public function setIdRol($idRol){$this->idRol = $idRol;}

    //nombreCompleto
    public function getDescripcion(){return $this->descripcion;}
    public function setDescripcion($descripcion){$this->descripcion = $descripcion;} 

    //tipoDocumento
    public function getEstado(){ return $this->estado;}
    public function setEstado($estado) { $this->estado =$estado;}

    //numeroDocumento
    public function getFechaCreacion(){ return $this->fechaCreacion;}
    public function setFechaCreacion($fechaCreacion) { $this->fechaCreacion =$fechaCreacion;}

    //direccion
    public function getFechaModificacion(){ return $this->fechaModificacion;}
    public function setFechaModificacion($fechaModificacion) { $this->fechaModificacion =$fechaModificacion;}

     //telefono
     public function getIdUsuarioCreacion(){ return $this->idUsuarioCreacion;}
     public function setIdUsuarioCreacion($idUsuarioCreacion) { $this->idUsuarioCreacion =$idUsuarioCreacion;}

      //correo
    public function getIdUsuarioModificacion(){ return $this->idUsuarioModificacion;}
    public function setIdUsuarioModificacion($idUsuarioModificacion ) { $this->idUsuarioModificacion =$idUsuarioModificacion;}

 

    //conexion
    public function __construct() {$this->conn = new Conexion();}

    public function Agregar(){
        $sentenciaSql = "INSERT INTO rol( 'id_rol', 'descripcion', 'estado', 'fecha_creacion', 'fecha_modificacion', 'id_usuario_creacion', 'id_usuario_modificacion')
                        VALUES($this->'1', $this->'hola mundo', $this->'activo', $this->'2021-04-02' , $this->'2021-05-30', $this->'1', $this->'1' );    
        ";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Modificar(){
        $sentenciaSql = "UPDATE rol SET descripcion=?, estado=?, fecha_creacion=?, fecha_modificacion=?, id_usuario_creacion=?, id_usuario_modificacionn=? WHERE id_rol=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Eliminar(){
        $consulta="DELETE FROM rol WHERE id_rol=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Consultar(){
        $consulta="SELECT * FROM rol WHERE id_rol=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();

    private function obtenerCondicion(){
     
        
    }


    public function __destruct() {

        echo "<br>destruido: " . $this->idRol;
        echo "<br>destruido: " . $this->descripcion;
        echo "<br>destruido: " . $this->estado;
        echo "<br>destruido: " . $this->fechaCreacion;
        echo "<br>destruido: " . $this->fechaModificacion;
        echo "<br>destruido: " . $this->idUsuarioCreacion;
        echo "<br>destruido: " . $this->idUsuarioModificacion;
    }       
}
?>
