<?php 
Class ControladorEnrutamiento {
	public function traerRuta() {
		$enlace = $_GET["ruta"];
		if ($enlace == "inicio" ||
			$enlace == "salir" ||
			$enlace == "movimiento-entrada" ||
			$enlace == "movimiento-salida" ||
			$enlace == "login"){
			include "vistas/modulos/".$enlace.".php";
		} else {
			include "vistas/modulos/error404.php";
		}

	}

}

?>