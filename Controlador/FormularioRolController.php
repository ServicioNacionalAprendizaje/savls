<?php

class FormularioRolController
{

    public function __construct()
    {
        require_once "Modelo/FormularioRolModelo.php";
    }

    public function ListarFormulariosRol()
    {
        $formularioRol = new FormularioRolModelo();
        $data["titulo"] = "formulariosRol";
        $data["formulariosRol"] = $formularioRol->getFormulariosRol();

        require_once "Vista/FormularioRol.php";
    }

    public function Nuevo()
    {
        $data["titulo"] = "Nuevo formulario rol";
        require_once "Vista/FormularioRol/NuevoFormularioRol.php";
    }

    public function FormulariosRolEliminados()
    {
        $formularioRol = new FormularioRolModelo();
        $data["titulo"] = "Formularios Rol Eliminados";
        $data["formulariosRol"] = $formularioRol->getFormulariosRolEliminados();
        require_once "Vista/FormularioRol/FormulariosRolEliminados.php";
    }

    public function Guardar()
    {
        $idFormulario = $_POST['slcidFormulario'];
        $idRol = $_POST['slcidRol'];
        date_default_timezone_set("America/Bogota");
        $fecha = date("Y-m-d H:i:s");

        $formularioRol = new FormularioRolModelo();
        $formularioRol->insertarFormularioRol($fecha, $idFormulario, $idRol);
        $this->ListarFormulariosRol();
    }

    public function ModificarFormularioRol($idFormularioRol)
    {
        $formularioRol = new FormularioRolModelo();

        $data["idFormularioRol"] = $idFormularioRol;
        $data["formularioRol"] = $formularioRol->getFormularioRolPorId($idFormularioRol);
        $data["titulo"] = "Modificar Formulario Rol";
        require_once "Vista/FormularioRol/ModificarFormularioRol.php";
    }

    public function ActualizarFormularioRol()
    {
        $idFormularioRol = $_POST['hdnIdFormularioRol'];
        $idFormulario = $_POST['slcidFormulario'];
        $idRol = $_POST['slcidRol'];

        date_default_timezone_set("America/Bogota");
        $fecha = date("Y-m-d H:i:s");

        $formularioRol = new FormularioRolModelo();
        $formularioRol->ModificarFormularioRol($idFormularioRol,$fecha, $idFormulario, $idRol);
        $this->ListarFormulariosRol();
    }

    public function EliminarFormularioRol($idFormularioRol)
    {
        $formularioRol = new FormularioRolModelo();
        $formularioRol->eliminarFormularioRol($idFormularioRol);
        $this->ListarFormulariosRol();
    }

    public function RestaurarFormularioRol($idFormularioRol)
    {
        $formularioRol = new FormularioRolModelo();
        $formularioRol->restaurarFormularioRol($idFormularioRol);
        $this->ListarFormulariosRol();
    }

    public function ElimiDefinFormuRol($idFormularioRol)
    {
        $formularioRol = new FormularioRolModelo();
        $formularioRol->eliminarDefinFormuRol($idFormularioRol);
        $this->ListarFormulariosRol();
    }
}
