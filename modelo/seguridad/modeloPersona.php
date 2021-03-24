<?php
class persona{
    private $idPersona;
    private $nombres;
    private $apellido;
    private $edad;
    private $genero;
    private $estado;
    private $Fecha_Creacion;
    private $Fecha_Modificacion;
    private $id_Usuario;
    private $id_Usuario_Modificacion;
    public $conn=null;

    //idPersona
    public function getidPersona(){return $this->idPersona;}
    public function setidPersona($idPersona){$this->idPersona = $idPersona;}

    //nombreCompleto
    public function getnombres(){return $this->nombres;}
    public function setnombres($nombres){$this->nombres = $nombres;} 

    //tipoDocumento
    public function getapellidos(){ return $this->apellidos;}
    public function setapellidos($apellidos) { $this->apellidos =$apellidos;}

    //numeroDocumento
    public function getedad(){ return $this->edad;}
    public function setedad($edad) { $this->edad =$edad;}

    //direccion
    public function getgenero(){ return $this->genero;}
    public function setgenero($genero) { $this->genero =$genero;}

     //telefono
     public function getestado(){ return $this->estado;}
     public function setestado($estado) { $this->estado =$estado;}

      //correo
    public function getFecha_Freacion(){ return $this->Fecha_Creacion;}
    public function setFecha_Creacion($Fecha_Creacion ) { $this->Fecha_Creacion =$Fecha_Creacion;}

 
    //direccion
    public function getFecha_Modificacion(){ return $this->Fecha_Modificacion;}
    public function setFecha_Modificacion($Fecha_Modificacion) { $this->Fecha_Modificacion =$Fecha_Modificacion;}

   //direccion
    public function getidUsuarioCreacion(){ return $this->idUsuarioCreacion;}
    public function setidUsuarioCreacion($genero) { $this->idUsuarioCreacion =$idUsuarioCreacion;}

    //direccion
    public function getidUsuarioCreacion(){ return $this->idUsuarioCreacion;}
    public function setidUsuarioCreacion($genero) { $this->idUsuarioCreacion =$idUsuarioCreacion;}



    //conexion
    public function __construct() {$this->conn = new Conexion();}

    public function Agregar(){
        $sentenciaSql = "INSERT INTO persona('idPersona', 'nombres', 'apellidos', 'edad', 'genero', 'estado', 'Fecha_Creacion', 'Fecha_Modificacion', 'idUsuarioCreacion', 'id_Usuario_Modificacion')
                        VALUES($this->'1', $this->'Esdilmar', $this->'de trujillo', $this->20, $this->'maculino' , $this->'activo', $this->'2021-03-03', $this->'2021-03-20' , $this->'1', $this->'1');    
        ";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Modificar(){
        $sentenciaSql = "UPDATE persona SET nombres=?, apellidos=?, edad=?, genero=?, estado=?, Fecha_Creacion=?, Fecha_Modificacion=?, idUsuarioCreacion=?, id_Usuario_Modificacion=? WHERE idPersona=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Eliminar(){
        $consulta="DELETE FROM persona WHERE idPersona=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Consultar(){
        $consulta="SELECT * FROM persona WHERE idPersona=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();

    private function obtenerCondicion(){
     
        
    }


    public function __destruct() {
        echo "<br>destruido: " . $this->idPersona;
        echo "<br>destruido: " . $this->nombres;
        echo "<br>destruido: " . $this->apellidos;
        echo "<br>destruido: " . $this->edad;
        echo "<br>destruido: " . $this->genero;
        echo "<br>destruido: " . $this->estado;
        echo "<br>destruido: " . $this->Fecha_Creacion;
        echo "<br>destruido: " . $this->Fecha_Modificacion;
        echo "<br>destruido: " . $this->idUsuarioCreacion;
        echo "<br>destruido: " . $this->id_Usuario_Modificacion;
    }       
}
?>