<?php

class RolesController
{

    public function __construct()
    {
        require_once "modelo/RolModelo.php";
    }

    public function ListarRoles()
    {
        $rol = new RolModelo();
        $data["titulo"] = "roles";
        $data["roles"] = $rol->getRoles();

        require_once "vista/Roles.php";
    }

    public function NuevoRol()
    {
        $data["titulo"] = "Nuevo rol";
        require_once "vista/Rol/NuevoRol.php";
    }

    public function RolesEliminados()
    {
        $rol = new RolModelo();
        $data["titulo"] = "Roles Eliminados";
        $data["roles"] = $rol->getRolesEliminados();
        require_once "vista/Rol/RolesEliminados.php";
    }

    public function Guardar()
    {
        $descripcion = $_POST['txtDescripcion'];
        date_default_timezone_set("America/Bogota");
        $fecha = date("Y-m-d H:i:s");

        $rol = new RolModelo();
        $rol->insertarRol($descripcion, $fecha);
        $this->ListarRoles();
    }

    public function ModificarRol($idRol)
    {
        $rol = new RolModelo();

        $data["idRol"] = $idRol;
        $data["rol"] = $rol->getRolPorId($idRol);
        $data["titulo"] = "Modificar Rol";
        require_once "vista/Rol/ModificarRol.php";
    }

    public function ActualizarRol()
    {
        $idRol = $_POST['hdnIdRol'];
        $descripcion = $_POST['txtDescripcion'];
        date_default_timezone_set("America/Bogota");
        $fecha = date("Y-m-d H:i:s");

        $rol = new RolModelo();
        $rol->modificarRol($idRol, $descripcion, $fecha);
        $this->ListarRoles();
    }

    public function EliminarRol($idRol)
    {
        $rol = new RolModelo();
        $rol->eliminarRol($idRol);
        $this->ListarRoles();
    }

    public function RestaurarRol($idRol)
    {
        $rol = new RolModelo();
        $rol->restaurarRol($idRol);
        $this->ListarRoles();
    }

    public function ElimiDefinRol($idRol)
    {
        $rol = new RolModelo();
        $rol->eliminarDefinRol($idRol);
        $this->ListarRoles();
    }
}
