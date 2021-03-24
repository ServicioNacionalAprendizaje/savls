<?php
class usuario_rol{
    private $id_Usuario_Rol;
    private $estado;
    private $Fecha_Creacion;
    private $Fecha_Modificacion;
    private $id_Usuario;
    private $id_Rol;
    private $id_Usuario_Creacion;
    private $id_Usuario_Modificacion;
    private $UsuarioIdUsuario;
    private $Rol_id_Rol;
    private $Formulario_Id_Formulario;

    public $conn=null;

    //idAprendiz
    public function getid_Usuario_Rol(){return $this->id_Usuario_Rol;}
    public function setid_Usuario_Rol($id_Usuario_Rol){$this->id_Usuario_Rol = $id_Usuario_Rol;}

    //nombreCompleto
    public function getestado(){return $this->estado;}
    public function setestado($estado){$this->estado = $estado;} 

    //tipoDocumento
    public function getFecha_Creacion(){ return $this->Fecha_Creacion;}
    public function setFecha_Creacion($Fecha_Creacion) { $this->Fecha_Creacion =$Fecha_Creacion;}

    //numeroDocumento
    public function getFecha_Modificacion(){ return $this->Fecha_Modificacion;}
    public function setFecha_Modificacion($Fecha_Modificacion) { $this->Fecha_Modificacion =$Fecha_Modificacion;}

    //direccion
    public function getid_Usuario(){ return $this->id_Usuario;}
    public function setid_Usuario($id_Usuario) { $this->id_Usuario =$id_Usuario;}

     //telefono
     public function getid_Rol(){ return $this->id_Rol;}
     public function setid_Rol($id_Rol) { $this->id_Rol =$id_Rol;}

     //telefono
     public function getid_Usuario_Creacion(){ return $this->id_Usuario_Creacion;}
     public function setid_Usuario_Creacion($id_Usuario_Creacion) { $this->id_Usuario_Creacion =$id_Usuario_Creacion;}

 //telefono
     public function getid_Usuario_Modificacion(){ return $this->id_Usuario_Modificacion;}
     public function setid_Usuario_Modificacion($id_Usuario_Modificacion) { $this->id_Usuario_Modificacion =$id_Usuario_Modificacion;}

 //telefono
     public function getUsuarioIdUsuario(){ return $this->UsuarioIdUsuario;}
     public function setUsuarioIdUsuario($UsuarioIdUsuario) { $this->UsuarioIdUsuario =$UsuarioIdUsuario;}

 //telefono
     public function getRol_id_Rol(){ return $this->Rol_id_Rol;}
     public function setRol_id_Rol($Rol_id_Rol) { $this->Rol_id_Rol =$Rol_id_Rol;}

 //telefono
     public function getFormulario_Id_Formulario(){ return $this->Formulario_Id_Formulario;}
     public function setFormulario_Id_Formulario($Formulario_Id_Formulario) { $this->Formulario_Id_Formulario =$Formulario_Id_Formulario;}

 

    //conexion
    public function __construct() {$this->conn = new Conexion();}

    public function Agregar(){
        $sentenciaSql = "INSERT INTO usuario_rol('id_Usuario_Rol', 'estado', 'Fecha_Creacion', 'Fecha_Modificacion', 'id_Usuario', 'id_Rol', 'id_Usuario_Creacion', 'id_Usuario_Modificacion', , 'UsuarioIdUsuario',  'Rol_id_Rol',  'Formulario_Id_Formulario')
                        VALUES($this->'1', $this->'activo', $this->'2021-04-09', $this->'2021-06-23' , $this->'1', $this->'1', $this->'1' , $this->'1' , $this->'1' , $this->'1' , $this->'1' );    
        ";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Modificar(){
        $sentenciaSql = "UPDATE usuario_rol SET estado=?, Fecha_Creacion=?, Fecha_Modificacion=?, id_Usuario=?, id_Rol=?, id_Usuario_Creacion=?, id_Usuario_Modificacion=?, UsuarioIdUsuario=?, Rol_id_Rol=?, Formulario_Id_Formulario=? WHERE id_Usuario_Rol=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Eliminar(){
        $consulta="DELETE FROM usuario_rol WHERE id_Usuario_Rol=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Consultar(){
        $consulta="SELECT * FROM usuario_rol WHERE id_Usuario_Rol=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();

    private function obtenerCondicion(){
     
        
    }


    public function __destruct() {
        echo "<br>destruido: " . $this->id_Usuario_Rol;
        echo "<br>destruido: " . $this->estado;
        echo "<br>destruido: " . $this->Fecha_Creacion;
        echo "<br>destruido: " . $this->Fecha_Modificacion;
        echo "<br>destruido: " . $this->id_Usuario;
        echo "<br>destruido: " . $this->id_Usuario;
        echo "<br>destruido: " . $this->id_Usuario_Creacion;
        echo "<br>destruido: " . $this->id_Usuario_Modificacion;
        echo "<br>destruido: " . $this->UsuarioIdUsuario;
        echo "<br>destruido: " . $this->Rol_id_Rol;
        echo "<br>destruido: " . $this->Formulario_Id_Formulario;
    }       
}
?>
