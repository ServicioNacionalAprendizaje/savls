<?php
class formulario{
    private $idFormulario;
    private $descripcion;
    private $etiqueta;
    private $ubicacion; 
    private $estado;
    private $fechaCreacion;
    private $fechaModificacion;
    private $idUsuaCrea;
    private $idUsuaModi;
    public $conn=null;

    //idFormulario
    public function getiidFormulario(){return $this->idFormulario;}
    public function setidFormulario($idFormulario){$this->idFormulario = $idFormulario;}

    //descripcion
    public function getdescripcion(){return $this->descripcion;}
    public function setdescripcion($descripcion){$this->descripcion = $descripcion;}

    //etiqueta
    public function geetiqueta(){return $this->etiqueta;}
    public function setetiqueta($etiqueta){$this->etiqueta = $etiqueta;} 

    //ubicacion
    public function getubicacion(){ return $this->ubicacion;}
    public function setubicacion($ubicacion) { $this->ubicacion =$ubicacion;}

    //estado
    public function getestado(){ return $this->estado;}
    public function setestado($estado) { $this->estado =$estado;}

     //fechaCreacion
    public function getfechaCreacion(){ return $this-fechaCreacion;}
    public function setfechaCreacion($fechaCreacion ) { $this->fechaCreacion =$fechaCreacion;}

    //fechaModificacion
    public function getfechaModificacion(){ return $this->fechaModificacion;}
    public function setfechaModificacion($fechaModificacion ) { $this->fechaModificacion =$fechaModificacion;}

    //idUsuaCrea
    public function getidUsuaCrea(){ return $this->idUsuaCrea;}
    public function setidUsuaCrea($idUsuaCrea ) { $this->idUsuaCrea =$idUsuaCrea;}

     //idUsuaModi
    public function getidUsuaModi(){ return $this->idUsuaModi;}
    public function setidUsuaModi($idUsuaModi ) { $this->idUsuaModi =$idUsuaModi;}
   
    //conexion
    public function __construct() {$this->conn = new Conexion();}

    public function Agregar(administrador){
        $sentenciaSql = "INSERT INTO entidad('descripcion','etiqueta','ubicacion','estado','fechaCreacion', 'fechaModificacion', 'idUsuaCrea', 'idUsuaModi')
                        VALUES(
                            $this->'',$this->'',$this->'',$this->'',$this->'',$this->'',$this->'',$this->'');  
        ";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Modificar(){
        $sentenciaSql = "UPDATE formulario SET descripcion=?, etiqueta=?, ubicacion=?, estado=?, fechaCreacion=?, fechaModificacion=?, idUsuaCrea=?, idUsuaModi=?, WHERE idFormulario=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Eliminar(){
        $consulta="DELETE FROM formulario WHERE idFormulario=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Consultar(){
        $consulta="SELECT * FROM formulario WHERE idFormulario=?";
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
        $this->idUsuaCrea;
        $this->idUsuaModi;
    }       
}
?>