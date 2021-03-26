<?php
class Formulario{
    private $idFormulario;
    private $descripcion;
    private $etiqueta;
    private $ubicacion; 
    private $estado;
    private $fechaCreacion;
    private $fechaModificacion;
    private $idUsuarioCreacion;
    private $idUsuarioModificacion;
    public $conn=null;

    //idFormulario
    public function getIdFormulario(){return $this->idFormulario;}
    public function setIdFormulario($idFormulario){$this->idFormulario = $idFormulario;}

    //descripcion
    public function getDescripcion(){return $this->descripcion;}
    public function setDescripcion($descripcion){$this->descripcion = $descripcion;}

    //etiqueta
    public function getEtiqueta(){return $this->etiqueta;}
    public function setEtiqueta($etiqueta){$this->etiqueta = $etiqueta;} 

    //ubicacion
    public function getUbicacion(){ return $this->ubicacion;}
    public function setUbicacion($ubicacion) { $this->ubicacion =$ubicacion;}

    //estado
    public function getEstado(){ return $this->estado;}
    public function setEstado($estado) { $this->estado =$estado;}

     //fechaCreacion
    public function getFechaCreacion(){ return $this-fechaCreacion;}
    public function setFechaCreacion($fechaCreacion ) { $this->fechaCreacion =$fechaCreacion;}

    //fechaModificacion
    public function getFechaModificacion(){ return $this->fechaModificacion;}
    public function setFechaModificacion($fechaModificacion ) { $this->fechaModificacion =$fechaModificacion;}

    //idUsuarioCreacion
    public function getIdUsuarioCreacion(){ return $this->idUsuarioCreacion;}
    public function setIdUsuarioCreacion($idUsuarioCreacion ) { $this->idUsuarioCreacion =$idUsuarioCreacion;}

     //idUsuarioModificacion
    public function getidUsuarioModificacion(){ return $this->idUsuarioModificacion;}
    public function setidUsuarioModificacion($idUsuarioModificacion ) { $this->idUsuarioModificacion =$idUsuarioModificacion;}
   
    //conexion
    public function __construct() {$this->conn = new Conexion();}

    public function Agregar(administrador){
        $sentenciaSql = "INSERT INTO formulario('descripcion','etiqueta','ubicacion','estado','fecha_creacion', 'fecha_modificacion', 'id_usuario_creacion', 'id_usuario_modificacion')
                        VALUES(
                            $this->'',$this->'',$this->'',$this->'',$this->'',$this->'',$this->,$this->);  
        ";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Modificar(){
        $sentenciaSql = "UPDATE formulario SET descripcion=?, etiqueta=?, ubicacion=?, estado=?, fecha_creacion=?, fecha_modificacion=?, id_usuario_creacion=?, id_usuario_modificacion=?, WHERE id_formulario=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Eliminar(){
        $consulta="DELETE FROM formulario WHERE id_formulario=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Consultar(){
        $consulta="SELECT * FROM formulario WHERE id_formulario=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();

    private function obtenerCondicion(){
     
        
    }


    public function __destruct() {
        $this->idFormulario;
        $this->descripcion;
        $this->etiqueta;
        $this->ubicacion;
        $this->estado;
        $this->fechaCreacion;
        $this->fechaModificacion;
        $this->idUsuarioCreacion;
        $this->idUsuarioModificacion;
    }       
}
?>