<?php

class UsuarioRolController
{

    public function __construct()
    {
        require_once "Modelo/UsuarioRolModelo.php";
    }

    public function ListarUsuariosRol()
    {
        $usuarioRol = new UsuarioRolModelo();
        $data["titulo"] = "usuariosRol";
        $data["usuariosRol"] = $usuarioRol->getUsuariosRol();

        require_once "Vista/UsuarioRol.php";
    }

    public function Nuevo()
    {
        $data["titulo"] = "Nuevo usuario rol";
        require_once "Vista/UsuarioRol/NuevoUsuarioRol.php";
    }

    public function UsuariosRolEliminados()
    {
        $usuarioRol = new UsuarioRolModelo();
        $data["titulo"] = "Usuarios Rol Eliminados";
        $data["usuariosRol"] = $usuarioRol->getUsuariosRolEliminados();
        require_once "Vista/UsuarioRol/UsuariosRolEliminados.php";
    }

    public function Guardar()
    {
        $idRol = $_POST['slcidRol'];
        $idUsuario = $_POST['slcidUsuario'];
        date_default_timezone_set("America/Bogota");
        $fecha = date("Y-m-d H:i:s");

        $usuarioRol = new UsuarioRolModelo();
        $usuarioRol->insertarUsuarioRol($fecha, $idUsuario, $idRol);
        $this->ListarUsuariosRol();
    }

    public function ModificarUsuarioRol($idUsuarioRol)
    {
        $usuarioRol = new UsuarioRolModelo();

        $data["idUsuarioRol"] = $idUsuarioRol;
        $data["usuarioRol"] = $usuarioRol->getUsuarioRolPorId($idUsuarioRol);
        $data["titulo"] = "Modificar Usuario Rol";
        require_once "Vista/UsuarioRol/ModificarUsuarioRol.php";
    }

    public function ActualizarUsuarioRol()
    {
        $idUsuarioRol = $_POST['hdnIdUsuarioRol'];
        $idRol = $_POST['slcidRol'];
        $idUsuario = $_POST['slcidUsuario'];

        date_default_timezone_set("America/Bogota");
        $fecha = date("Y-m-d H:i:s");

        $usuarioRol = new UsuarioRolModelo();
        $usuarioRol->ModificarUsuarioRol($idUsuarioRol,$fecha, $idRol, $idUsuario);
        $this->ListarUsuariosRol();
    }

    public function EliminarUsuarioRol($idUsuarioRol)
    {
        $usuarioRol = new UsuarioRolModelo();
        $usuarioRol->eliminarUsuarioRol($idUsuarioRol);
        $this->ListarUsuariosRol();
    }

    public function RestaurarUsuarioRol($idUsuarioRol)
    {
        $usuarioRol = new UsuarioRolModelo();
        $usuarioRol->restaurarUsuarioRol($idUsuarioRol);
        $this->ListarUsuariosRol();
    }

    public function ElimiDefinUsuarRol($idUsuarioRol)
    {
        $usuarioRol = new UsuarioRolModelo();
        $usuarioRol->eliminarDefinUsuarRol($idUsuarioRol);
        $this->ListarUsuariosRol();
    }
}
