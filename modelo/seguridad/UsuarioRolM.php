<?php
class UsuarioRol{
    private $idUsuarioRol;
    private $idUsuario;
    private $idRol;
    private $estado;
    private $fechaCreacion;
    private $fechaModificacion;
    private $idUsuarioCreacion;
    private $idUsuarioModificacion;

    public $conn=null;

    //id_usuario_rol
    public function getIdUsuarioRol(){return $this->idUsuarioRol;}
    public function setIdUsuarioRol($idUsuarioRol){$this->idUsuarioRol = $idUsuarioRol;}

    //id_usuario
    public function getIdUsuario(){return $this->idUsuario;}
    public function setIdUsuario($idUsuario){$this->idUsuario = $idUsuario;} 

    //id_rol
    public function getIdRol(){ return $this->idRol;}
    public function setIdRol($idRol) { $this->idRol =$idRol;}

    //estado
    public function getEstado(){ return $this->estado;}
    public function setEstado($estado) { $this->estado =$estado;}

    //fecha_creacion
    public function getFechaCreacion(){ return $this->fechaCreacion;}
    public function setFechaCreacion($fechaCreacion) { $this->fechaCreacion =$fechaCreacion;}

     //fecha_modificacion
     public function getFechaModificacion(){ return $this->fechaModificacion;}
     public function setFechaModificacion($fechaModificacion) { $this->fechaModificacion =$fechaModificacion;}

     //id_usuario_creacion
     public function getIdUsuarioCreacion(){ return $this->idUsuarioCreacion;}
     public function setIdUsuarioCreacion($idUsuarioCreacion) { $this->idUsuarioCreacion =$idUsuarioCreacion;}

     //id_usuario_modificacion
     public function getIdUsuarioModificacion(){ return $this->idUsuarioModificacion;}
     public function setIdUsuarioModificacion($idUsuarioModificacion) { $this->idUsuarioModificacion =$idUsuarioModificacion;}



    //conexion
    public function __construct() {$this->conn = new Conexion();}

    public function Agregar(){
        $sentenciaSql = "INSERT INTO usuario_rol('id_usuario_rol', 'id_usuario', 'id_rol', 'estado', 'fecha_creacion', 'fecha_modificacion', 'id_usuario_creacion', 'id_usuario_modificacion')
                        VALUES($this->'1', $this->'1', $this->'1', $this->'activo' , $this->'2021-12-12', $this->'2021-12-20', $this->'1' , $this->'1');    
        ";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Modificar(){
        $sentenciaSql = "UPDATE usuario_rol SET id_usuario=?, id_rol=?, estado=?, fecha_creacion=?, fecha_modificacion=?, id_usuario_creacion=?, id_usuario_modificacion=? WHERE id_usuario_rol=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Eliminar(){
        $consulta="DELETE FROM usuario_rol WHERE id_usuario_rol=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Consultar(){
        $consulta="SELECT * FROM usuario_rol WHERE id_usuario_rol=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();

    private function obtenerCondicion(){
     
        
    }


    public function __destruct() {
        echo "<br>destruido: " . $this->idUsuarioRol;
        echo "<br>destruido: " . $this->idUsuario;
        echo "<br>destruido: " . $this->idRol;
        echo "<br>destruido: " . $this->estado;
        echo "<br>destruido: " . $this->fechaCreacion;
        echo "<br>destruido: " . $this->fechaModificacion;
        echo "<br>destruido: " . $this->idUsuarioCreacion;
        echo "<br>destruido: " . $this->idUsuarioModificacion;
       
    }       
}
?>
