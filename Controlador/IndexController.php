<?php

class IndexController
{

    public function __construct()
    {
        require_once "modelo/IndexModelo.php";
    }

    public function VistaIndex()
    {
        session_start();
        if (@$_SESSION['id_user'] != "") {
            echo "<script>window.location.href='./?c=index&a=VistaIndexAdministrador'</script>";
        } else {
            require_once "vista/index.php";
        }
    }

    public function VistaIndexAdministrador()
    {
        session_start();
        if (@$_SESSION['id_user'] == "") {
            echo "<script>window.location.href='./?c=index&a=VistaIndex'</script>";
        } else {
            require_once "vista/dashboard/index.php";
        }
    }

    public function CerrarSesion()
    {
        session_start();
        session_destroy();
        echo "<script>window.location.href='./?c=index&a=VistaIndex'</script>";
    }

    public function Verifica()
    {
        $user = $_POST['txtUsuario'];
        $clave = $_POST['pwdClave'];

        $usuario = new IndexModelo();
        $usuario->verificarUsuario($user, $clave);
    }
}
