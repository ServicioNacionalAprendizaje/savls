<?php 
date_default_timezone_set("America/Bogota");

require_once '../modelo/conexion.php';
require_once '../modelo/crud.php';
require_once '../modelo/modeloGenerico.php';
require_once '../modelo/usuario.php';
require_once '../controlador/controladorUsuario.php';
require_once '../controlador/respuesta.php';
require_once '../constantes/EMensajes.php';

$ControladorUsuario = new ControladorUsuario();

/*Insertar*/
/*$respuesta = $ControladorUsuario->insertarUsuario([
  "usuario" => "Nuevo",
  "contrasena" => "nuevo123",
  "fecha_activacion" => date("Y-m-d H:i:s"),
  "fecha_expiracion" => date("Y-m-d H:i:s"),
  "estado" => 1,
  "fecha_creacion" => date("Y-m-d H:i:s"),
  "fecha_modificacion" => date("Y-m-d H:i:s"),
  "id_persona" => 1,
  "id_usuario_creacion" => 1,
  "id_usuario_modificacion" => 1
]);
echo "<br/>";
var_dump($respuesta);*/

/*Actualizar usuario*/
/*$usuario = [
  "idUsuario" => 5,
  "usuario" => "artunduaga23",
  "contrasena" => "123121"
];

$respuesta = $ControladorUsuario->actualizarUsuario($usuario);
echo "<pre>";
var_dump($respuesta);
echo "</pre>";
echo "<br/>";*/

/*Consultar*/
$respuesta = $ControladorUsuario->listarUsuario()->json();
echo $respuesta;


/*Buscar por ID*/
/*$respuesta = $ControladorUsuario->buscarUsuarioPorId(5);
echo "<pre>";
var_dump($respuesta);
echo "</pre>";*/

/*Eliminar*/
/*$respuesta = $ControladorUsuario->eliminarUsuario(7);
echo "<pre>";
var_dump($respuesta);
echo "</pre>";*/
?>