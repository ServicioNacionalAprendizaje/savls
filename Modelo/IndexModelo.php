<?php

class IndexModelo
{
    private $db;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        /* $this->persona = array(); */
    }

    public function verificarUsuario($user, $clave)
    {
        session_start();
        $sql = $this->db->query("SELECT id_usuario, contrasena FROM usuario WHERE usuario = '$user'") or die($this->db->error);
        if ($sql->num_rows > 0) {
            $campo = $sql->fetch_array();
            if (password_verify($clave, $campo['contrasena'])) {
                $_SESSION['id_user'] = $campo['id_usuario'];
                echo "<script>window.location.href='./?c=index&a=VistaIndexAdministrador'</script>";
                $this->db->close();
            } else {
                echo "<script>window.location.href='./?c=index&a=VistaIndex&error=Incorrecto, verifica los campos nuevamente'</script>";
            }
        } else {
            echo "<script>window.location.href='./?c=index&a=VistaIndex&error=El usuario $user no está registrado en nuestro sistema'</script>";
        }
    }
}
