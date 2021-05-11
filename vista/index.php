<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Iniciar Sesión</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./componentes/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="./componentes/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="./componentes/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="./componentes/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./componentes/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="./componentes/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="./componentes/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="./componentes/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <img src="./componentes/dist/img/AdminLTELogo.png" width="200px" style="margin-bottom: -50px;">
      <!--<a href="#"><b>Andres Motos </b>Racing</a>-->
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Iniciar sesión</p>

        <div class="row">
          <div class="col">
            <?php
            if (@$_GET['success']) { ?>
              <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <strong>Excelente!</strong> <?php echo @$_GET['success']; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php }
            if (@$_GET['error']) { ?>
              <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                <strong>Error!</strong> <?php echo @$_GET['error']; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php }
            if (@$_GET['success_error']) { ?>
              <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                <strong>Excelente!</strong> <?php echo @$_GET['success_error']; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php } ?>
          </div>
        </div>

        <form action="./?c=index&a=Verifica" method="post" autocomplete="off">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="txtUsuario" placeholder="Usuario" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="pwdClave" placeholder="Contraseña" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block" name="sign">Iniciar Sesión</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <!--<div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Iniciar Sesión Usando Google+
        </a>
      </div>-->
        <!-- /.social-auth-links -->

        <!-- <p class="mb-1">
          <a href="#">Olvidé mi contraseña <span class="badge badge-danger right">En Mantenimiento <i class="fa fa-sync fa-spin"></i></span></a>
        </p> -->
        <!-- <p class="mb-0">
          <a href="./?c=register&a=VistaRegister" class="text-center">Registrar a un nuevo usuario</a>
        </p> -->
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="./componentes/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="./componentes/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="./componentes/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="./componentes/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="./componentes/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="./componentes/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="./componentes/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="./componentes/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="./componentes/plugins/moment/moment.min.js"></script>
  <script src="./componentes/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="./componentes/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="./componentes/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="./componentes/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="./componentes/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="./componentes/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="./componentes/dist/js/pages/dashboard.js"></script>
</body>

</html>