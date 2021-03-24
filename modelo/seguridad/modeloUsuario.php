<?php
class usuario{
    private $idUsuario;
    private $rol;
    private $tipoDocumento;
    private $usuario;
    private $contraseña;
    private $fechaActivacion;
    private $fechaVencimieto;
    private $estado;
    private $numeroFicha;
    private $fechaCreacion;
    private $fechaModificacion;
    private $idPersona;
    private $idAprendiz;
    private $idIstructor;
    private $idAdministrador;
    private $idUsuarioCreacion;
    private $idUsuarioModificacion;
    private $personaIdPersona;
    public $conn=null;

    //idUsuario
    public function getIdUsuario(){return $this->idUsuario;}
    public function setIdUsuario($idUsuario){$this->idUsuario = $idUsuario;}

    //rol
    public function getRol(){return $this->rol;}
    public function setRol($rol){$this->rol = $rol;}

    //TipoDocumento
    public function gettipoDocumento(){return $this->tipoDocumento;}
    public function settipoDocumento($tipoDocumento){$this->tipoDocumento = $tipoDocumento;} 

    //usuario
    public function getusuario(){ return $this->usuario;}
    public function setusuario($usuario) { $this->usuario =$usuario;}

    //contraseña
    public function getcontraseña(){ return $this->contraseña;}
    public function setcontraseña($contraseña) { $this->contraseña =$contraseña;}

    //fechaActivacion
    public function getFechaActivacion(){ return $this->fechaActivacion;}
    public function setFechaActivacion($fechaActivacion) { $this->fechaActivacion =$fechaActivacion;}

    //fechaVencimineto
    public function getfechaVencimiento(){ return $this->fechaVencimiento;}
    public function setfechaVencimiento($fechaVencimiento) { $this->fechaVencimiento =$fechaVencimiento;}

    //estado
    public function getestado(){ return $this->estado;}
    public function setestado($estado) { $this->estado =$estado;}

    //numeroFicha
    public function getnumeroFicha(){ return $this->numeroFicha;}
    public function setnumeroFicha($numeroFicha) { $this->numeroFicha =$numeroFicha;}

    //fechaModificacion
    public function getfechaCreacion(){ return $this->fechaCreacion;}
    public function setfechaCreacion($fechaCreacion) { $this->fechaCreacion =$fechaCreacion;} 

    //fechaModificacion
    public function getfechaModificacion(){ return $this->fechaModificacion;}
    public function setfechaModificacion($fechaModificacion) { $this->fechaModificacion =$fechaModificacion;} 

    //idPersona
    public function getidPersona(){ return $this->idPersona;}
    public function setidPersona($idPersona) { $this->idPersona =$idPersona;} 

    //idAprendiz
    public function getidAprendiz(){ return $this->idAprendiz;}
    public function setidAprendiz($idAprendiz) { $this->idAprendiz =$idAprendiz;}  
    
    //idInstructor
    public function getidInstructor(){ return $this->idInstructor;}
    public function setidInstructor($idInstructor) { $this->idInstructor =$idInstructor;}     

    //idAdministrador
    public function getidAdministrador(){ return $this->idAdministrador;}
    public function setidAdministrador($idAdministrador) { $this->idAdministrador =$idAdministrador;} 

    //idUsarioCreacion
    public function getidUsarioCreacion(){ return $this->idUsarioCreacion;}
    public function setidUsarioCreacion($idUsarioCreacion) { $this->idUsarioCreacion =$idUsarioCreacion;}

    //idUsuarioModidificacion
    public function getidUsuarioModidificacion(){ return $this->idUsuarioModidificacion;}
    public function setidUsuarioModidificacion($idUsuarioModidificacion) { $this->idUsuarioModidificacion =$idUsuarioModidificacion;}   

    //personaIdPersona
    public function getpersonaIdPersona(){ return $this->personaIdPersona;}
    public function setpersonaIdPersona($personaIdPersona) { $this->personaIdPersona =$personaIdPersona;}       


    //conexion
    public function __construct() {$this->conn = new Conexion();}

    public function Agregar(){
        $sentenciaSql = "INSERT INTO usuario('idUsuario','rol','tipoDocumento','usuario','contraseña','fechaActivacion','fechaVencimiento','estado','numeroFicha','fechaCreacion','fechaModificacion','idPersona','idAprendiz','idInstructor','idAdministrador','idUsarioCreacion','idUsuarioModidificacion','personaIdPersona')
                        VALUES(
                            $this->,$this->'',$this->'',$this->'',$this->'',$this->'',$this->'',$this->'',$this->,$this->,$this->,$this->,$this->,$this->,$this->,$this->,$this->,$this->);  
        ";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();

    public function Modificar(){
        $sentenciaSql = "UPDATE usuario SET rol=?, tipoDocumento=?, usuario=?, contraseña=?, fechaActivacion=?, fechaVencimiento=?, estado=? , numeroFicha=?, fechaCreacion=?, fechaModificacion=?, idPersona=?, idAprendiz=?, idInstructor=?, idAdministrador=?, idUsarioCreacion=?, idUsuarioModidificacion=?, personaIdPersona=? WHERE idUsuario=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Eliminar(){
        $consulta="DELETE FROM usuario WHERE idUsuario=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();
    }

    public function Consultar(){
        $consulta="SELECT * FROM usuario WHERE idUsuario=?";
        $this->conn->Preparar($sentenciaSql);
        $this->conn->Ejecutar();

       
    }
    private function obtenerCondicion(){
     
        
    }


    public function __destruct() {
       
    $this->idUsuario;
    $this->rol;
    $this->tipoDocumento;
    $this->usuario;
    $this->contraseña;
    $this->fechaActivacion;
    $this->fechaVencimieto;
    $this->estado;
    $this->numeroFicha;
    $this->fechaCreacion;
    $this->fechaModificacion;
    $this->idPersona;
    $this->idAprendiz;
    $this->idIstructor;
    $this->idAdministrador;
    $this->idUsuarioCreacion;
    $this->idUsuarioModificacion;
    $this->personaIdPersona;
    }       
}
?>
