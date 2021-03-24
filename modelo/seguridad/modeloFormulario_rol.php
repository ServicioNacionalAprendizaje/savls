<?php
class formulario_rol{
    private $idFormulario_Rol;
    private $estado;
    private $Fecha_Creacion;
    private $Fecha_Modificacion;
    private $id_Rol;
    private $id_Formulario;
    private $id_Usuario_Creacion;
    private $id_Usuario_Modificacion;
    public $conn=null;

    //idAprendiz
    public function getidFormulario_Rol(){return $this->idFormulario_Rol;}
    public function setidFormulario_Rol($idFormulario_Rol){$this->idFormulario_Rol = $idFormulario_Rol;}

    //nombreCompleto
    public function getestado(){return $this->estado;}
    public function setestado($estado){$this->estado = $estado;} 

    //tipoDocumento
    public function getFecha_Creacion(){ return $this->Fecha_Creacion;}
    public function setFecha_Creacion($tipDocumento) { $this->tipoDocumento =$tipDocumento;}

    //numeroDocumento
    public function getFecha_Modificacion(){ return $this->Fecha_Modificacion;}
    public function setFecha_Modificacion($Fecha_Modificacion) { $this->Fecha_Modificacion =$Fecha_Modificacion;}

    //direccion
    public function getid_Rol(){ return $this->id_Rol;}
    public function setid_Rol($id_Rol) { $this->id_Rol =$id_Rol;}

     //telefono
     public function getidFormulario(){ return $this->id_Formulario;}
     public function setidFormulario($id_Formulario) { $this->id_Formulario =$id_Formulario;}

      //correo
    public function getid_Usuario_Creacion(){ return $this->Usuario_Creacion;}
    public function setUsuario_Creacion($Usuario_Creacion ) { $this->Usuario_Creacion =$Usuario_Creacion}

      //correo
    public function getid_Usuario_Modificacion(){ return $this->id_Usuario_Modificacion;}
    public function setid_Usuario_Modificacion($id_Usuario_Modificacion ) { $this->id_Usuario_Modificacion =$id_Usuario_Modificacion}


 

    //conexion
    public function __construct() {$this->conn = new Conexion();}

    public function Agregar(){
        $sentenciaSql = "INSERT INTO formulario_rol( 'idFormulario_Rol', 'estado', 'Fecha_Creacion', 'Fecha_Modificacion', 'id_Rol', 'id_Formulario', 'id_Usuario_Creacion', 'id_Usuario_Modificacion') 
                        VALUES($this->'1', $this->'activo', $this->'2021-09-23', $this->'2021-10-30' , $this->'1', $this->'1', $this->'1', $this->'1' );    
        ";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Modificar(){
        $sentenciaSql = "UPDATE formulario_rol SET estado=?, Fecha_Creacion=?, Fecha_Modificacion=?, id_Rol=?, id_Formulario=?, id_Usuario_Creacion=? id_Usuario_Modificacion=? WHERE idFormulario_Rol=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Eliminar(){
        $consulta="DELETE FROM formulario_rol WHERE idFormulario_Rol=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Consultar(){
        $consulta="SELECT * FROM formulario_rol WHERE idFormulario_Rol=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();

    private function obtenerCondicion(){
     
        
    }


    public function __destruct() {

        echo "<br>destruido: " . $this->idFormulario_Rol;
        echo "<br>destruido: " . $this->estado;
        echo "<br>destruido: " . $this->Fecha_Creacion;
        echo "<br>destruido: " . $this->Fecha_Modificacion;
        echo "<br>destruido: " . $this->id_Rol;
        echo "<br>destruido: " . $this->id_Formulario;
         echo "<br>destruido: " . $this->id_Usuario_Creacion;
          echo "<br>destruido: " . $this->id_Usuario_Modificacion;
    }       
}
?>