<?php
class rol{
    private $idRol;
    private $descripcion;
    private $estado;
    private $Fecha_Creacion;
    private $Fecha_Modificacion;
    private $id_Usuario_Creacion;
    private $id_Usuario_Modificacion;
    public $conn=null;

    //idAprendiz
    public function getidRol(){return $this->idRol;}
    public function setidRol($idRol){$this->idRol = $idRol;}

    //nombreCompleto
    public function getdescripcion(){return $this->descripcion;}
    public function setdescripcion($descripcion){$this->descripcion = $descripcion;} 

    //tipoDocumento
    public function getestado(){ return $this->estado;}
    public function setestado($estado) { $this->estado =$estado;}

    //numeroDocumento
    public function getFecha_Creacion(){ return $this->getFecha_Creacion;}
    public function setFecha_Creacion($Fecha_Creacion) { $this->Fecha_Creacion =$Fecha_Creacion;}

    //direccion
    public function getFecha_Modificacion(){ return $this->Fecha_Modificacion;}
    public function setFecha_Modificacion($Fecha_Modificacion) { $this->Fecha_Modificacion =$Fecha_Modificacion;}

     //telefono
     public function getid_Usuario_Creacion(){ return $this->id_Usuario_Creacion;}
     public function setid_Usuario_Creacion($id_Usuario_Creacion) { $this->id_Usuario_Creacion =$id_Usuario_Creacion;}

      //correo
    public function getid_Usuario_Modificacion(){ return $this->id_Usuario_Modificacion;}
    public function setid_Usuario_Modificacion($id_Usuario_Modificacion ) { $this->id_Usuario_Modificacion =$id_Usuario_Modificacion;}

 

    //conexion
    public function __construct() {$this->conn = new Conexion();}

    public function Agregar(){
        $sentenciaSql = "INSERT INTO rol( 'idRol', 'descripcion', 'estado', 'Fecha_Creacion', 'Fecha_Modificacion', 'id_Usuario_Creacion', 'id_Usuario_Modificacion')
                        VALUES($this->'1', $this->'hola mundo', $this->'activo', $this->'2021-04-02' , $this->'2021-05-30', $this->'1', $this->'1' );    
        ";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Modificar(){
        $sentenciaSql = "UPDATE rol SET descripcion=?, estado=?, Fecha_Creacion=?, Fecha_Modificacion=?, id_Usuario_Creacion=?, id_Usuario_Modificacion=? WHERE idRol=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Eliminar(){
        $consulta="DELETE FROM rol WHERE idRol=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Consultar(){
        $consulta="SELECT * FROM rol WHERE idRol=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();

    private function obtenerCondicion(){
     
        
    }


    public function __destruct() {

        echo "<br>destruido: " . $this->idRol;
        echo "<br>destruido: " . $this->descripcion;
        echo "<br>destruido: " . $this->estado;
        echo "<br>destruido: " . $this->Fecha_Creacion;
        echo "<br>destruido: " . $this->Fecha_Modificacion;
        echo "<br>destruido: " . $this->id_Usuario_Creacion;
        echo "<br>destruido: " . $this->id_Usuario_Modificacion;
    }       
}
?>
