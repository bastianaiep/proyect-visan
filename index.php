<?php 
require_once "controladores/plantilla.controlador.php";
require_once "controladores/enrutamiento.controlador.php";
require_once "controladores/sesion.controlador.php";

require_once "modelos/sesion.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> traerPlantilla();
?>