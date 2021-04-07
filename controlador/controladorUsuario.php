<?php 

class ControladorUsuario{

	function __construct(){

	}

	public function insertarUsuario($usuario) {
        $usuarioModel = new Usuario();
        $id = $usuarioModel->insert($usuario);
        $insersionExitosa = ($id > 0);
        $respuesta = new Respuesta($insersionExitosa ? EMensajes::INSERCION_EXITOSA : EMensajes::ERROR_INSERSION);
        $respuesta->setDatos($id);
        return $respuesta;
    }

    public function listarUsuario() {
        $usuarioModel = new Usuario();
        $lista = $usuarioModel->get();
        $v = count($lista);
        $respuesta = new Respuesta($v ? EMensajes::CORRECTO : EMensajes::ERROR);
        $respuesta->setDatos($lista);
        return $respuesta;
    }

	public function actualizarUsuario($usuario){
		$usuarioModel = new Usuario();
		$actualizados = $usuarioModel->where("id_usuario", "=", $usuario["idUsuario"])->update($usuario);
		$v = ($actualizados > 0);
		return new Respuesta($v ? EMensajes::ACTUALIZACION_EXITOSA : EMensajes::ERROR_ACTUALIZACION);
	}

	public function eliminarUsuario($idUsuario){
		$usuarioModel = new Usuario();
		$eliminados = $usuarioModel->where("id_usuario", "=", $idUsuario)->delete();
		$v = ($eliminados > 0);
		return new Respuesta($v ? EMensajes::ELIMINACION_EXITOSA : EMensajes::ERROR_ELIMINACION);
	}

	public function buscarUsuarioPorId($idUsuario){
		$usuarioModel = new Usuario();
		$usuario = $usuarioModel->where("id_usuario", "=", $idUsuario)->first();
		$v = ($usuario != null);
		return new Respuesta($v ? EMensajes::CORRECTO : EMensajes::NO_HAY_REGISTROS);
	}
}

?>