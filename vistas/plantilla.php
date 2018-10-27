<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>VISAN</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- HOJAS DE ESTILO DE PLUGINS -->
  <link rel="stylesheet" href="vistas/recursos/css/bootstrap.min.css">
  <link rel="stylesheet" href="vistas/recursos/css/business-frontpage.css">
</head>

<body>
  <?php
    //inicializa una sesión
    session_start();
    if (isset($_SESSION["autenticar"]) && $_SESSION["autenticar"] == true) {
      echo '<div class="wrapper">';

      include "modulos/cabezal.php";
      // isset sirve para validar que una variable se encuentre inicializada      
      if (isset($_GET["ruta"])) {
        $enrutamiento = new ControladorEnrutamiento();
        $enrutamiento -> traerRuta();
        //include "modulos/modales/modal-".$_GET["ruta"].".php";
      } else {
        include "modulos/inicio.php";
      }

      include "modulos/pie-de-pagina.php";
      echo '<div>';
    } else {
      include "modulos/login.php";
    }
  ?>


  
</div>
<!-- PLUGINS DE JS  -->
<script src="vistas/recursos/js/jquery.min.js"></script>
<script src="vistas/recursos/js/bootstrap.min.js"></script>
</body>
</html>