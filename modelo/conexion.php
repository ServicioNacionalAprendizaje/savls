<?php 

class Conexion{
	private $conexion;
	private $configuracion = [
		"driver" => "mysql",
		"host" => "localhost",
		"database" => "savls",
		"port" => "3306",
		"username" => "root",
		"password" => "",
		"charset" => "utf8mb4"
	];

	public function __construct(){

	}

	public function conectar(){
		try{
			$controlador = $this->configuracion["driver"];
			$servidor = $this->configuracion["host"];
			$base_datos = $this->configuracion["database"];
			$puerto = $this->configuracion["port"];
			$usuario = $this->configuracion["username"];
			$clave = $this->configuracion["password"];
			$codificacion = $this->configuracion["charset"];

			$url = "{$controlador}:host={$servidor}:{$puerto};"
			. "dbname={$base_datos};charset={$codificacion}";

			/*Crear conexión*/
			$this->conexion = new PDO($url, $usuario, $clave);

			return $this->conexion;
		}catch(Exception $exc){
			echo $exc->getTraceAsString();
		}
	}
}

?>