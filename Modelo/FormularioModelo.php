<?php

class FormularioModelo
{
    private $db;
    private $formulario;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->formulario = array();
    }

    public function getFormularios()
    {
        $sql = "SELECT * FROM formulario WHERE estado > 0";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->formulario[] = $row;
        }
        return $this->formulario;
    }

    public function getFormulariosEliminados()
    {
        $sql = "SELECT * FROM formulario WHERE estado = 0";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->formulario[] = $row;
        }
        return $this->formulario;
    }

    public function insertarFormulario($descripcion, $etiqueta, $ubicacion, $fecha)
    {
        $resultado = $this->db->query("INSERT INTO formulario(
            descripcion,etiqueta,ubicacion,estado,fecha_creacion,fecha_modificacion)
            VALUES ('$descripcion', '$etiqueta', '$ubicacion', 1, '$fecha', '$fecha')");
        if ($resultado) {
            echo "<script>window.location.href='./?c=formulario&a=Listar&success=Se ha insertado el formulario exitosamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=formulario&a=Listar&error=Hubo un error al insertar el formulario.'</script>";
        }
    }

    public function modificarFormulario($idFormulario, $descripcion, $etiqueta, $ubicacion, $fecha)
    {
        $resultado = $this->db->query("UPDATE formulario SET descripcion='$descripcion', etiqueta='$etiqueta', ubicacion='$ubicacion', fecha_modificacion='$fecha' WHERE id_formulario='$idFormulario'");
        if ($resultado) {
            echo "<script>window.location.href='./?c=formulario&a=Listar&success=Se ha actualizado el formulario exitosamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=formulario&a=Listar&error=Hubo un error al actualizar el formulario.'</script>";
        }
    }

    public function eliminarFormulario($idFormulario)
    {
        $resultado = $this->db->query("UPDATE formulario SET estado=0 WHERE id_formulario='$idFormulario'");
        if ($resultado) {
            echo "<script>window.location.href='./?c=formulario&a=Listar&success_error=Se ha eliminado el formulario exitosamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=formulario&a=Listar&error=Hubo un error al eliminar el formulario.'</script>";
        }
    }

    public function restaurarFormulario($idFormulario)
    {
        $resultado = $this->db->query("UPDATE formulario SET estado=1 WHERE id_formulario='$idFormulario'");
        if ($resultado) {
            echo "<script>window.location.href='./?c=formulario&a=Listar&success=Se ha restaurado el formulario exitosamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=formulario&a=Listar&error=Hubo un error al restaurar el formulario.'</script>";
        }
    }

    public function eliminarDefinFormu($idFormulario)
    {
        $resultado = $this->db->query("DELETE FROM formulario WHERE id_formulario='$idFormulario'");
        if ($resultado) {
            echo "<script>window.location.href='./?c=formulario&a=Listar&success_error=Se ha eliminado el formulario definitivamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=formulario&a=Listar&error=Hubo un error al eliminar el formulario.'</script>";
        }
    }

    public function getFormularioPorId($idFormulario)
    {
        $sql = "SELECT * FROM formulario WHERE id_formulario = '$idFormulario'";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();
        return $row;
    }
}