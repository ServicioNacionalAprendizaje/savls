<?php

class PersonaController
{

    public function __construct()
    {
        require_once "modelo/PersonaModelo.php";
    }

    public function Listar()
    {
        $persona = new PersonaModelo();
        $data["titulo"] = "personas";
        $data["personas"] = $persona->getPersonas();

        require_once "vista/Persona.php";
    }

    public function Nuevo()
    {
        $data["titulo"] = "Nueva persona";
        require_once "vista/Persona/NuevaPersona.php";
    }

    public function PersonasEliminadas()
    {
        $persona = new PersonaModelo();
        $data["titulo"] = "Personas Eliminadas";
        $data["personas"] = $persona->getPersonasEliminadas();
        require_once "vista/Persona/PersonasEliminadas.php";
    }

    public function Guardar()
    {
        $nombres = $_POST['txtNombres'];
        $apellidos = $_POST['txtApellidos'];
        $edad = $_POST['txtEdad'];
        $genero = $_POST['rdoGenero'];
        date_default_timezone_set("America/Bogota");
        $fecha = date("Y-m-d H:i:s");

        $persona = new PersonaModelo();
        $persona->insertarPersona($nombres, $apellidos, $edad, $genero, $fecha);
        $this->Listar();
    }

    public function ModificarPersona($idPersona)
    {
        $persona = new PersonaModelo();

        $data["idPersona"] = $idPersona;
        $data["persona"] = $persona->getPersonaPorId($idPersona);
        $data["titulo"] = "Modificar Persona";
        require_once "vista/Persona/ModificarPersona.php";
    }

    public function ActualizarPersona()
    {
        $idPersona = $_POST['hdnIdPersona'];
        $nombres = $_POST['txtNombres'];
        $apellidos = $_POST['txtApellidos'];
        $edad = $_POST['txtEdad'];
        $genero = $_POST['rdoGenero'];
        date_default_timezone_set("America/Bogota");
        $fecha = date("Y-m-d H:i:s");

        $persona = new PersonaModelo();
        $persona->modificarPersona($idPersona, $nombres, $apellidos, $edad, $genero, $fecha);
        $this->Listar();
    }

    public function EliminarPersona($idPersona)
    {
        $persona = new PersonaModelo();
        $persona->eliminarPersona($idPersona);
        $this->Listar();
    }

    public function RestaurarPersona($idPersona)
    {
        $persona = new PersonaModelo();
        $persona->restaurarPersona($idPersona);
        $this->Listar();
    }

    public function ElimiDefinPerso($idPersona)
    {
        $persona = new PersonaModelo();
        $persona->eliminarDefinPerso($idPersona);
        $this->Listar();
    }
}
