<?php

class UsuarioController
{

    public function __construct()
    {
        require_once "Modelo/UsuarioModelo.php";
    }

    public function ListarUsuarios()
    {
        $usuario = new UsuarioModelo();
        $data["titulo"] = "usuarios";
        $data["usuarios"] = $usuario->getUsuarios();

        require_once "Vista/Usuario.php";
    }

    public function Nuevo()
    {
        $data["titulo"] = "Nuevo usuario";
        require_once "Vista/Usuario/NuevoUsuario.php";
    }

    public function UsuariosEliminados()
    {
        $usuario = new UsuarioModelo();
        $data["titulo"] = "Usuarios Eliminados";
        $data["usuarios"] = $usuario->getUsuariosEliminados();
        require_once "Vista/Usuario/UsuariosEliminados.php";
    }

    public function Guardar()
    {
        $txtUsuario = $_POST['txtUsuario'];
        $txtcontrasena = $_POST['txtContrasena'];
        $idPersona = $_POST['slcidPersona'];
        date_default_timezone_set("America/Bogota");
        $fechaExpiracion = $_POST['dtFechaExpiracion']." ".date("H:i:s");
        $fecha = date("Y-m-d H:i:s");

        $usuario = new UsuarioModelo();
        $usuario->insertarUsuario($txtUsuario, $txtcontrasena, $idPersona, $fechaExpiracion, $fecha);
        $this->ListarUsuarios();
    }

    public function ModificarUsuario($idUsuario)
    {
        $usuario = new UsuarioModelo();

        $data["idUsuario"] = $idUsuario;
        $data["usuario"] = $usuario->getUsuarioPorId($idUsuario);
        $data["titulo"] = "Modificar Usuario";
        require_once "Vista/Usuario/ModificarUsuario.php";
    }

    public function ActualizarUsuario()
    {
        $idUsuario = $_POST['hdnIdUsuario'];
        $txtUsuario = $_POST['txtUsuario'];
        $txtcontrasena = $_POST['txtContrasena'];
        $idPersona = $_POST['slcidPersona'];
        $fechaExpiracion = $_POST['dtFechaExpiracion']." ".date("H:i:s");

        date_default_timezone_set("America/Bogota");
        $fecha = date("Y-m-d H:i:s");

        $usuario = new UsuarioModelo();
        $usuario->ModificarUsuario($idUsuario, $txtUsuario, $txtcontrasena, $fechaExpiracion, $idPersona, $fecha);
        $this->ListarUsuarios();
    }

    public function EliminarUsuario($idUsuario)
    {
        $usuario = new UsuarioModelo();
        $usuario->eliminarUsuario($idUsuario);
        $this->ListarUsuarios();
    }

    public function RestaurarUsuario($idUsuario)
    {
        $usuario = new UsuarioModelo();
        $usuario->restaurarUsuario($idUsuario);
        $this->ListarUsuarios();
    }

    public function ElimiDefinUsuar($idUsuario)
    {
        $usuario = new UsuarioModelo();
        $usuario->eliminarDefinUsuar($idUsuario);
        $this->ListarUsuarios();
    }
}
