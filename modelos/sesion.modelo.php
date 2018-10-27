<?php 	

class InicioSesion {

	public function ctrIniciarSesion() {

		if ( isset($_POST["name_user"])) {
			$tabla = "usuario";
			$name_user = $_POST["user"];
			$password = $_POST["pass"];

			$respuesta = SesionModelo::mdlInicioSesion($tabla, $name_user);

			//var_dump permite leer un arreglo de datos.
			
			
			if ($respuesta["user"] == $name_user && $respuesta["pass"] == $password) {
				//DEFINIMOS TODAS LAS VARIABLES GLOBALES DE SESION
				$_SESSION["autenticar"] = true;
				$_SESSION["user"] = $respuesta["user"];
				
				echo '<script>
						window.location = "inicio"
					</script>
					';
			} else {
				echo '<br>
				<div class="alert alert-danger">
						<i class="fa fa-exclamation" aria-hidden="true"></i> Datos incorrectos. Inténtelo nuevamente.
					</div>';
			}
		}
		


	}

}

?>