<?php

function CargarControlador($controlador)
{
    $nombreControlador = ucwords($controlador) . "Controller";
    $archivoControlador = 'Controlador/' . ucwords($controlador) . '.php';

    if (!is_file($archivoControlador)) {
        $archivoControlador = 'Controlador/' . $nombreControlador . '.php';
    }

    require_once $archivoControlador;
    $control = new $nombreControlador();
    return $control;
}

function CargarAccion($controller, $accion, $idData = null)
{
    if (isset($accion) && method_exists($controller, $accion)) {
        if ($idData == null) {
            $controller->$accion();
        } else {
            $controller->$accion($idData);
        }
    } else {
        $controller->ACCION_PRINCIPAL();
    }
}
