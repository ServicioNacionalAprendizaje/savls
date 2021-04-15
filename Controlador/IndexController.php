<?php

class IndexController
{

    public function __construct()
    {
        require_once "modelo/IndexModelo.php";
    }

    public function VistaIndex()
    {
        require_once "vista/index.php";
    }
}
