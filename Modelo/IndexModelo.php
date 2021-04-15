<?php

class IndexModelo
{
    private $db;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        /* $this->persona = array(); */
    }
}
