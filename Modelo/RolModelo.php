<?php

class RolModelo
{
    private $db;
    private $rol;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->rol = array();
    }

    public function getRoles()
    {
        $sql = "SELECT * FROM rol WHERE estado > 0";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->rol[] = $row;
        }
        return $this->rol;
    }

    public function getRolesEliminados()
    {
        $sql = "SELECT * FROM rol WHERE estado = 0";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->rol[] = $row;
        }
        return $this->rol;
    }

    public function insertarRol($descripcion, $fecha)
    {
        $resultado = $this->db->query("INSERT INTO rol(
            descripcion,estado,fecha_creacion,fecha_modificacion)
            VALUES ('$descripcion', 1, '$fecha', '$fecha')");
        if ($resultado) {
            echo "<script>window.location.href='./?c=roles&a=ListarRoles&success=Se ha insertado el rol exitosamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=roles&a=ListarRoles&error=Hubo un error al insertar el rol.'</script>";
        }
    }

    public function modificarRol($idRol, $descripcion, $fecha)
    {
        $resultado = $this->db->query("UPDATE rol SET descripcion='$descripcion', fecha_modificacion='$fecha' WHERE id_rol='$idRol'");
        if ($resultado) {
            echo "<script>window.location.href='./?c=roles&a=ListarRoles&success=Se ha actualizado el rol exitosamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=roles&a=ListarRoles&error=Hubo un error al actualizar el rol.'</script>";
        }
    }

    public function eliminarRol($idRol)
    {
        $resultado = $this->db->query("UPDATE rol SET estado=0 WHERE id_rol='$idRol'");
        if ($resultado) {
            echo "<script>window.location.href='./?c=roles&a=ListarRoles&success_error=Se ha eliminado el rol exitosamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=roles&a=ListarRoles&error=Hubo un error al eliminar el rol.'</script>";
        }
    }

    public function restaurarRol($idRol)
    {
        $resultado = $this->db->query("UPDATE rol SET estado=1 WHERE id_rol='$idRol'");
        if ($resultado) {
            echo "<script>window.location.href='./?c=roles&a=ListarRoles&success=Se ha restaurado el rol exitosamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=roles&a=ListarRoles&error=Hubo un error al restaurar el rol.'</script>";
        }
    }

    public function eliminarDefinRol($idRol)
    {
        $resultado = $this->db->query("DELETE FROM rol WHERE id_rol='$idRol'");
        if ($resultado) {
            echo "<script>window.location.href='./?c=roles&a=ListarRoles&success_error=Se ha eliminado el rol definitivamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=roles&a=ListarRoles&error=Hubo un error al eliminar el rol.'</script>";
        }
    }

    public function getRolPorId($idRol)
    {
        $sql = "SELECT * FROM rol WHERE id_rol = '$idRol'";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();
        return $row;
    }
}