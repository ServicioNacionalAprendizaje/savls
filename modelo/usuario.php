<?php 

class Usuario extends ModeloGenerico{
	protected $id_usuario;
	protected $usuario;
	protected $contrasena;
	protected $fecha_activacion;
	protected $estado;
	protected $fecha_creacion;
	protected $fecha_modificacion;
	protected $id_persona;
	protected $id_usuario_creacion;
	protected $id_usuario_modificacion;

	public function __construct($propiedades = null){
		parent::__construct("usuario", Usuario::class, $propiedades);
	}

	function getIdUsuario(){
		return $this->id_usuario;
	}

	function getUsuario(){
		return $this->usuario;
	}

	function getContrasena(){
		return $this->contrasena;
	}

	function getFechaActivacion(){
		return $this->fecha_activacion;
	}

	function getEstado(){
		return $this->estado;
	}

	function getFechaCreacion(){
		return $this->fecha_creacion;
	}

	function getIdPersona(){
		return $this->id_persona;
	}

	function getIdUsuarioCreacion(){
		return $this->id_usuario_creacion;
	}

	function getIdUsuarioModificacion(){
		return $this->id_usuario_modificacion;
	}

	function setIdUsuario(){
		$this->idUsuario = $id_usuario;
	}

	function setUsuario(){
		$this->usuario = $usuario;
	}

	function setContrasena(){
		$this->contrasena = $contrasena;
	}

	function setFechaActivacion(){
		$this->fechaActivacion = $fecha_activacion;
	}

	function setEstado(){
		$this->estado = $estado;
	}

	function setFechaCreacion(){
		$this->fechaCreacion = $fecha_creacion;
	}

	function setFechaModificacion(){
		$this->fechaModificacion = $fecha_modificacion;
	}

	function setIdPersona(){
		$this->idPersona = $id_persona;
	}

	function setIdUsuarioCreacion(){
		$this->idUsuarioCreacion = $id_usuario_creacion;
	}

	function setIdUsuarioModificacion(){
		$this->idUsuarioModificacion = $id_usuario_modificacion;
	}
}
?>