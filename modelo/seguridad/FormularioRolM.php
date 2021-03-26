<?php
class FormularioRol{
    private $idFormularioRol;
    private $idRol;    
    private $idFormulario;
    private $estado;
    private $fechaCreacion;
    private $fechaModificacion; 
    private $idUsuarioCreacion;
    private $idUsuarioModificacion;
    public $conn=null;

    //idFormularioRol
    public function getIdFormularioRol(){return $this->idFormularioRol;}
    public function setIdFormularioRol($idFormularioRol){$this->idFormularioRol = $idFormularioRol;}

    //idRol
    public function getIdRol(){ return $this->idRol;}
    public function setIdRol($idRol) { $this->idRol =$idRol;}
    

    //idFormulario
    public function getIdFormulario(){ return $this->idFormulario;}
    public function setIdFormulario($idFormulario) { $this->idFormulario =$idFormulario;}
    

    //estado
    public function getestado(){return $this->estado;}
    public function setestado($estado){$this->estado = $estado;} 

    //fechaCreacion
    public function getFechaCreacion(){ return $this->fechaCreacion;}
    public function setFechaCreacion($fechaCreacion) { $this->fechaCreacion =$fechaCreacion;}

    //fechaModificacion
    public function getFechaModificacion(){ return $this->fechaModificacion;}
    public function setFechaModificacion($fechaModificacion) { $this->fechaModificacion =$fechaModificacion;}

    //idUsuarioCreacion
    public function getIdUsuarioCreacion(){ return $this->idUsuarioCreacion;}
    public function setIdUsuarioCreacion($idUsuarioCreacion) { $this->idUsuarioCreacion =$idUsuarioCreacion}

    //idUsuarioModificacion
    public function getIdUsuarioModificacion(){ return $this->idUsuarioModificacion;}
    public function setIdUsuarioModificacion($idUsuarioModificacion) { $this->idUsuarioModificacion =$idUsuarioModificacion}


 

    //conexion
    public function __construct() {$this->conn = new Conexion();}

    public function Agregar(){
        $sentenciaSql = "INSERT INTO formulario_rol( 'id_formulario_rol', 'id_rol', 'id_formulario', 'estado', 'fecha_creacion', 'fecha_modificacion', 'id_usuario_creacion', 'id_usuario_modificacion') 
                        VALUES($this->, $this->, $this->, $this->'' , $this->'', $this->'', $this->, $this-> );    
        ";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Modificar(){
        $sentenciaSql = "UPDATE formulario_rol SET id_rol=?, id_formulario=?, estado=?, fecha_creacion=?, fecha_modificacion=?, id_usuario_creacion=? id_usuario_modificacion=? WHERE id_formulario_rol=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Eliminar(){
        $consulta="DELETE FROM formulario_rol WHERE id_formulario_rol=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Consultar(){
        $consulta="SELECT * FROM formulario_rol WHERE id_formulario_rol=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();

    private function obtenerCondicion(){
     
        
    }


    public function __destruct() {

        echo "<br>destruido: " . $this->idFormulario_Rol;
        echo "<br>destruido: " . $this->idRol;
        echo "<br>destruido: " . $this->idFormulario;
        echo "<br>destruido: " . $this->estado;
        echo "<br>destruido: " . $this->fechaCreacion;
        echo "<br>destruido: " . $this->fechaModificacion;
        echo "<br>destruido: " . $this->idUsuarioCreacion;
        echo "<br>destruido: " . $this->idUsuarioModificacion;
    }       
}
?>