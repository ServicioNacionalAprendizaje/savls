<?php

class FormularioController
{

    public function __construct()
    {
        require_once "Modelo/FormularioModelo.php";
    }

    public function Listar()
    {
        $formulario = new FormularioModelo();
        $data["titulo"] = "formularios";
        $data["formularios"] = $formulario->getFormularios();

        require_once "Vista/Formulario.php";
    }

    public function Nuevo()
    {
        $data["titulo"] = "Nuevo formulario";
        require_once "Vista/Formulario/NuevoFormulario.php";
    }

    public function FormulariosEliminados()
    {
        $formulario = new FormularioModelo();
        $data["titulo"] = "Formularios Eliminados";
        $data["formularios"] = $formulario->getFormulariosEliminados();
        require_once "Vista/Formulario/FormulariosEliminados.php";
    }

    public function Guardar()
    {
        $descripcion = $_POST['txtDescripcion'];
        $etiqueta = $_POST['txtEtiqueta'];
        $ubicacion = $_POST['txtUbicacion'];
        date_default_timezone_set("America/Bogota");
        $fecha = date("Y-m-d H:i:s");

        $formulario = new FormularioModelo();
        $formulario->insertarFormulario($descripcion, $etiqueta, $ubicacion, $fecha);
        $this->Listar();
    }

    public function ModificarFormulario($idFormulario)
    {
        $formulario = new FormularioModelo();

        $data["idFormulario"] = $idFormulario;
        $data["formulario"] = $formulario->getFormularioPorId($idFormulario);
        $data["titulo"] = "Modificar Formulario";
        require_once "Vista/Formulario/ModificarFormulario.php";
    }

    public function ActualizarFormulario()
    {
        $idFormulario = $_POST['hdnIdFormulario'];
        $descripcion = $_POST['txtDescripcion'];
        $etiqueta = $_POST['txtEtiqueta'];
        $ubicacion = $_POST['txtUbicacion'];
        date_default_timezone_set("America/Bogota");
        $fecha = date("Y-m-d H:i:s");

        $formulario = new FormularioModelo();
        $formulario->modificarFormulario($idFormulario, $descripcion, $etiqueta, $ubicacion, $fecha);
        $this->Listar();
    }

    public function EliminarFormulario($idFormulario)
    {
        $formulario = new FormularioModelo();
        $formulario->eliminarFormulario($idFormulario);
        $this->Listar();
    }

    public function RestaurarFormulario($idFormulario)
    {
        $formulario = new FormularioModelo();
        $formulario->restaurarFormulario($idFormulario);
        $this->Listar();
    }

    public function ElimiDefinFormu($idFormulario)
    {
        $formulario = new FormularioModelo();
        $formulario->eliminarDefinFormu($idFormulario);
        $this->Listar();
    }
}
