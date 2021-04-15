<?php

class UsuarioRolModelo
{
    private $db;
    private $usuarioRol;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->usuarioRol = array();
    }

    public function getUsuariosRol()
    {
        $sql = "SELECT ur.id_usuario_rol , ur.fecha_modificacion, r.descripcion, u.usuario FROM rol AS r INNER JOIN usuario_rol AS ur ON ur.id_rol = r.id_rol INNER JOIN usuario AS u ON ur.id_usuario = u.id_usuario WHERE ur.estado > 0";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->usuarioRol[] = $row;
        }
        return $this->usuarioRol;
    }

    public function getUsuariosRolEliminados()
    {
        $sql = "SELECT ur.id_usuario_rol , ur.fecha_modificacion, r.descripcion, u.usuario FROM rol AS r INNER JOIN usuario_rol AS ur ON ur.id_rol = r.id_rol INNER JOIN usuario AS u ON ur.id_usuario = u.id_usuario WHERE ur.estado = 0";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->usuarioRol[] = $row;
        }
        return $this->usuarioRol;
    }

    public function insertarUsuarioRol($fecha, $idUsuario, $idRol)
    {
        $resultado = $this->db->query("INSERT INTO usuario_rol (estado, fecha_creacion, fecha_modificacion, id_rol, id_usuario) VALUES ('1', '$fecha', '$fecha', $idRol, $idUsuario)");
        if ($resultado) {
            echo "<script>window.location.href='./?c=usuarioRol&a=ListarUsuariosRol&success=Se ha insertado el usuario rol exitosamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=usuarioRol&a=ListarUsuariosRol&error=Hubo un error al insertar el usuario rol.'</script>";
        }
    }

    public function ModificarUsuarioRol($idUsuarioRol, $fecha, $idRol, $idUsuario)
    {
        $resultado = $this->db->query("UPDATE usuario_rol SET fecha_modificacion='$fecha', id_usuario='$idUsuario', id_rol='$idRol' WHERE id_usuario_rol='$idUsuarioRol'");
        if ($resultado) {
            echo "<script>window.location.href='./?c=usuarioRol&a=ListarUsuariosRol&success=Se ha actualizado el usuario rol exitosamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=usuarioRol&a=ListarUsuariosRol&error=Hubo un error al actualizar el usuario rol.'</script>";
        }
    }

    public function eliminarUsuarioRol($idUsuarioRol)
    {
        $resultado = $this->db->query("UPDATE usuario_rol SET estado=0 WHERE id_usuario_rol='$idUsuarioRol'");
        if ($resultado) {
            echo "<script>window.location.href='./?c=usuarioRol&a=ListarUsuariosRol&success_error=Se ha eliminado el usuario rol exitosamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=usuarioRol&a=ListarUsuariosRol&error=Hubo un error al eliminar el usuario rol.'</script>";
        }
    }

    public function restaurarUsuarioRol($idUsuarioRol)
    {
        $resultado = $this->db->query("UPDATE usuario_rol SET estado=1 WHERE id_usuario_rol='$idUsuarioRol'");
        if ($resultado) {
            echo "<script>window.location.href='./?c=usuarioRol&a=ListarUsuariosRol&success=Se ha restaurado el usuario rol exitosamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=usuarioRol&a=ListarUsuariosRol&error=Hubo un error al restaurar el usuario rol.'</script>";
        }
    }

    public function eliminarDefinUsuarRol($idUsuarioRol)
    {
        $resultado = $this->db->query("DELETE FROM usuario_rol WHERE id_usuario_rol='$idUsuarioRol'");
        if ($resultado) {
            echo "<script>window.location.href='./?c=usuarioRol&a=ListarUsuariosRol&success_error=Se ha eliminado el usuario rol definitivamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=usuarioRol&a=ListarUsuariosRol&error=Hubo un error al eliminar el usuario rol.'</script>";
        }
    }

    public function getUsuarioRolPorId($idUsuarioRol)
    {
        $sql = "SELECT r.descripcion, u.usuario FROM usuario_rol AS u_r INNER JOIN rol AS r ON u_r.id_rol = r.id_rol INNER JOIN usuario AS u ON u.id_usuario = u_r.id_usuario WHERE id_usuario_rol = '$idUsuarioRol'";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();
        /* Acá me devuelve los datos de la BD asociados para después mostrarlos en la vista con el while */
        return $row;
    }
}
