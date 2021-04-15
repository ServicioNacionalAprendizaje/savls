<?php

require_once "config/Config.php";
require_once "core/routes.php";
require_once "config/Conexion.php";
require_once "controlador/IndexController.php";

if (@$_GET['c']) {
    $controlador = CargarControlador($_GET['c']);
    if (isset($_GET['a'])) {
        if (isset($_GET['idData'])) {
            CargarAccion($controlador, $_GET['a'], $_GET['idData']);
        } else {
            CargarAccion($controlador, $_GET['a']);
        }
    } else {
        CargarAccion($controlador, ACCION_PRINCIPAL);
    }
} else {
    $controlador = CargarControlador(CONTROLADOR_PRINCIPAL);
    $accionTmp = ACCION_PRINCIPAL;
    $controlador->$accionTmp();
}
