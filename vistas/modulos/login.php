<div class="login-box col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div>
    <img src="vistas/recursos/img/logo-visan-spa.png" width="100%" height="auto" alt="Imagen Corporativa">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body ">
    <p class="login-box-msg">Ingrese sus datos de acceso</p>

    <form action="inicio" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nombre de usuario" name="name_user">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="contraseña" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Acceder</button>
        </div>
      </div>
      <?php 
      //require_once "controladores/sesion.controlador.php";
      $iniciarSesion = new InicioSesion();
      $iniciarSesion -> ctrIniciarSesion();
       ?>
    </form>
  </div>
</div>