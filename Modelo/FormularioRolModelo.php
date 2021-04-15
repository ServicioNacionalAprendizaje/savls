<?php

class FormularioRolModelo
{
    private $db;
    private $formularioRol;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->formularioRol = array();
    }

    public function getFormulariosRol()
    {
        $sql = "SELECT fr.id_formulario_rol , fr.fecha_modificacion, f.descripcion AS formuDescr, r.descripcion AS rolDescr FROM formulario AS f INNER JOIN formulario_rol AS fr ON fr.id_formulario = f.id_formulario INNER JOIN rol AS r ON fr.id_rol = r.id_rol WHERE fr.estado > 0";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->formularioRol[] = $row;
        }
        return $this->formularioRol;
    }

    public function getFormulariosRolEliminados()
    {
        $sql = "SELECT fr.id_formulario_rol , fr.fecha_modificacion, f.descripcion, r.descripcion FROM formulario AS f INNER JOIN formulario_rol AS fr ON fr.id_formulario = f.id_formulario INNER JOIN rol AS r ON fr.id_rol = r.id_rol WHERE fr.estado = 0";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->formularioRol[] = $row;
        }
        return $this->formularioRol;
    }

    public function insertarFormularioRol($fecha, $idFormulario, $idRol)
    {
        $resultado = $this->db->query("INSERT INTO formulario_rol(
            estado, fecha_creacion, fecha_modificacion, id_formulario, id_rol)
            VALUES ( 1, '$fecha', '$fecha', '$idFormulario', '$idRol')");
        if ($resultado) {
            echo "<script>window.location.href='./?c=formularioRol&a=ListarFormulariosRol&success=Se ha insertado el formulario rol exitosamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=formularioRol&a=ListarFormulariosRol&error=Hubo un error al insertar el formulario rol.'</script>";
        }
    }

    public function ModificarFormularioRol($idFormularioRol, $fecha, $idFormulario, $idRol)
    {
        $resultado = $this->db->query("UPDATE formulario_rol SET fecha_modificacion='$fecha', id_formulario='$idFormulario', id_rol='$idRol' WHERE id_formulario_rol='$idFormularioRol'");
        if ($resultado) {
            echo "<script>window.location.href='./?c=formularioRol&a=ListarFormulariosRol&success=Se ha actualizado el formulario rol exitosamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=formularioRol&a=ListarFormulariosRol&error=Hubo un error al actualizar el formulario rol.'</script>";
        }
    }

    public function eliminarFormularioRol($idFormularioRol)
    {
        $resultado = $this->db->query("UPDATE formulario_rol SET estado=0 WHERE id_formulario_rol='$idFormularioRol'");
        if ($resultado) {
            echo "<script>window.location.href='./?c=formularioRol&a=ListarFormulariosRol&success_error=Se ha eliminado el formulario rol exitosamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=formularioRol&a=ListarFormulariosRol&error=Hubo un error al eliminar el formulario rol.'</script>";
        }
    }

    public function restaurarFormularioRol($idFormularioRol)
    {
        $resultado = $this->db->query("UPDATE formulario_rol SET estado=1 WHERE id_formulario_rol='$idFormularioRol'");
        if ($resultado) {
            echo "<script>window.location.href='./?c=formularioRol&a=ListarFormulariosRol&success=Se ha restaurado el formulario rol exitosamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=formularioRol&a=ListarFormulariosRol&error=Hubo un error al restaurar el formulario rol.'</script>";
        }
    }

    public function eliminarDefinFormuRol($idFormularioRol)
    {
        $resultado = $this->db->query("DELETE FROM formulario_rol WHERE id_formulario_rol='$idFormularioRol'");
        if ($resultado) {
            echo "<script>window.location.href='./?c=formularioRol&a=ListarFormulariosRol&success_error=Se ha eliminado el formulario rol definitivamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=formularioRol&a=ListarFormulariosRol&error=Hubo un error al eliminar el formulario rol.'</script>";
        }
    }

    public function getFormularioRolPorId($idFormularioRol)
    {
        $sql ="SELECT f.id_formulario AS idFormulario, f.descripcion AS formuDescr, r.id_rol AS idRol, r.descripcion AS rolDescr FROM formulario_rol AS f_r INNER JOIN formulario AS f ON f_r.id_formulario = f.id_formulario INNER JOIN rol AS r ON r.id_rol = f_r.id_rol WHERE id_formulario_rol = '$idFormularioRol'";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();
        /* Acá me devuelve los datos de la BD asociados para después mostrarlos en la vista con el while */
        return $row;
    }
}
