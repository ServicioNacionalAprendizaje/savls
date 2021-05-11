<?php

class UsuarioModelo
{
    private $db;
    private $usuario;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->usuario = array();
    }

    public function getUsuarios()
    {
        $sql = "SELECT u.id_usuario ,u.usuario, u.contrasena, u.fecha_expiracion, u.fecha_modificacion, p.nombre, p.apellido FROM persona AS p INNER JOIN usuario AS u ON u.id_persona = p.id_persona WHERE u.estado > 0";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->usuario[] = $row;
        }
        return $this->usuario;
    }

    public function getUsuariosEliminados()
    {
        $sql = "SELECT u.id_usuario ,u.usuario, u.contrasena, u.fecha_expiracion, u.fecha_modificacion, p.nombre, p.apellido FROM persona AS p INNER JOIN usuario AS u ON u.id_persona = p.id_persona WHERE u.estado = 0";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->usuario[] = $row;
        }
        return $this->usuario;
    }

    public function insertarUsuario($txtUsuario, $hash, $idPersona, $fechaExpiracion, $fecha)
    {
        $resultado = $this->db->query("INSERT INTO usuario(
            usuario, contrasena, fecha_activacion, fecha_expiracion, estado, fecha_creacion, fecha_modificacion, id_persona)
            VALUES ('$txtUsuario', '$hash', '$fecha', '$fechaExpiracion', 1, '$fecha', '$fecha', '$idPersona')");
        if ($resultado) {
            echo "<script>window.location.href='./?c=usuario&a=ListarUsuarios&success=Se ha insertado la persona exitosamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=usuario&a=ListarUsuarios&error=Hubo un error al insertar la persona.'</script>";
        }
    }

    public function ModificarUsuario($idUsuario, $txtUsuario, $hash, $fechaExpiracion, $idPersona, $fecha)
    {
        $resultado = $this->db->query("UPDATE usuario SET usuario='$txtUsuario', contrasena='$hash', fecha_expiracion='$fechaExpiracion', fecha_modificacion='$fecha', id_persona='$idPersona' WHERE id_usuario='$idUsuario'");
        if ($resultado) {
            echo "<script>window.location.href='./?c=usuario&a=ListarUsuarios&success=Se ha actualizado la persona exitosamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=usuario&a=ListarUsuarios&error=Hubo un error al actualizar la persona.'</script>";
        }
    }

    public function eliminarUsuario($idUsuario)
    {
        $resultado = $this->db->query("UPDATE usuario SET estado=0 WHERE id_usuario='$idUsuario'");
        if ($resultado) {
            echo "<script>window.location.href='./?c=usuario&a=ListarUsuarios&success_error=Se ha eliminado la persona exitosamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=usuario&a=ListarUsuarios&error=Hubo un error al eliminar la persona.'</script>";
        }
    }

    public function restaurarUsuario($idUsuario)
    {
        $resultado = $this->db->query("UPDATE usuario SET estado=1 WHERE id_usuario='$idUsuario'");
        if ($resultado) {
            echo "<script>window.location.href='./?c=usuario&a=ListarUsuarios&success=Se ha restaurado la persona exitosamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=usuario&a=ListarUsuarios&error=Hubo un error al restaurar la persona.'</script>";
        }
    }

    public function eliminarDefinUsuar($idUsuario)
    {
        $resultado = $this->db->query("DELETE FROM usuario WHERE id_usuario='$idUsuario'");
        if ($resultado) {
            echo "<script>window.location.href='./?c=usuario&a=ListarUsuarios&success_error=Se ha eliminado la persona definitivamente.'</script>";
        } else {
            echo "<script>window.location.href='./?c=usuario&a=ListarUsuarios&error=Hubo un error al eliminar la persona.'</script>";
        }
    }

    public function getUsuarioPorId($idUsuario)
    {
        $sql = "SELECT u.id_usuario, u.usuario, u.contrasena, DATE(u.fecha_expiracion) AS fecha_expiracion, p.id_persona, p.nombre, p.apellido FROM usuario AS u INNER JOIN persona AS p ON u.id_persona = p.id_persona WHERE u.id_usuario = '$idUsuario'";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();
        /* Acá me devuelve los datos de la BD asociados para después mostrarlos en la vista con el while */
        return $row;
    }
}
