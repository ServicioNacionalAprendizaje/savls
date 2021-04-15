<?php

class PersonaModelo
{
    private $db;
    private $persona;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->persona = array();
    }

    public function getPersonas()
    {
        $sql = "SELECT * FROM persona WHERE estado > 0";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->persona[] = $row;
        }
        return $this->persona;
    }

    public function getPersonasEliminadas()
    {
        $sql = "SELECT * FROM persona WHERE estado = 0";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->persona[] = $row;
        }
        return $this->persona;
    }

    public function insertarPersona($nombres, $apellidos, $edad, $genero, $fecha)
    {
        $resultado = $this->db->query("INSERT INTO persona(
            nombre,apellido,edad,genero,estado,fecha_creacion,fecha_modificacion)
            VALUES ('$nombres', '$apellidos', '$edad', '$genero', 1, '$fecha', '$fecha')");
        if ($resultado) {
            echo "<script>window.location.href='./?c=persona&a=Listar&success=Se ha insertado la persona exitosamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=persona&a=Listar&error=Hubo un error al insertar la persona.'</script>";
        }
    }

    public function modificarPersona($idPersona, $nombres, $apellidos, $edad, $genero, $fecha)
    {
        $resultado = $this->db->query("UPDATE persona SET nombre='$nombres', apellido='$apellidos', edad='$edad', genero='$genero', fecha_modificacion='$fecha' WHERE id_persona='$idPersona'");
        if ($resultado) {
            echo "<script>window.location.href='./?c=persona&a=Listar&success=Se ha actualizado la persona exitosamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=persona&a=Listar&error=Hubo un error al actualizar la persona.'</script>";
        }
    }

    public function eliminarPersona($idPersona)
    {
        $resultado = $this->db->query("UPDATE persona SET estado=0 WHERE id_persona='$idPersona'");
        if ($resultado) {
            echo "<script>window.location.href='./?c=persona&a=Listar&success_error=Se ha eliminado la persona exitosamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=persona&a=Listar&error=Hubo un error al eliminar la persona.'</script>";
        }
    }

    public function restaurarPersona($idPersona)
    {
        $resultado = $this->db->query("UPDATE persona SET estado=1 WHERE id_persona='$idPersona'");
        if ($resultado) {
            echo "<script>window.location.href='./?c=persona&a=Listar&success=Se ha restaurado la persona exitosamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=persona&a=Listar&error=Hubo un error al restaurar la persona.'</script>";
        }
    }

    public function eliminarDefinPerso($idPersona)
    {
        $resultado = $this->db->query("DELETE FROM persona WHERE id_persona='$idPersona'");
        if ($resultado) {
            echo "<script>window.location.href='./?c=persona&a=Listar&success_error=Se ha eliminado la persona definitivamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=persona&a=Listar&error=Hubo un error al eliminar la persona.'</script>";
        }
    }

    public function getPersonaPorId($idPersona)
    {
        $sql = "SELECT * FROM persona WHERE id_persona = '$idPersona'";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();
        /* Acá me devuelve los datos de la BD asociados para después mostrarlos en la vista con el while */
        return $row;
    }
}
