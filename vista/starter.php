<!doctype html>
<html lang="en">
<head>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../componentes/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../componentes/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../componentes/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../componentes/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../componentes/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../componentes/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../componentes/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../componentes/plugins/summernote/summernote-bs4.min.css">
    <title>Usuarios | Registro</title>
</head>
<body class="hold-transition login-page">
    <div class="register-box">
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="#" class="h1"><b>Usuarios </b>Registro</a>
      </div>
      <div class="card-body">
          <p class="login-box-msg">Registrar un nuevo usuario</p>

          <form action="../../index.html" method="post">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Usuario">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
              </div>
          </div>
      </div>
      <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
          </div>
      </div>
  </div>
      <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
          </div>
      </div>
  </div>
<div class="input-group mb-3">
  <input type="password" class="form-control" placeholder="Retype password">
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-lock"></span>
  </div>
</div>
</div>
<div class="row">
  <div class="col-8">
    <div class="icheck-primary">
      <input type="checkbox" id="agreeTerms" name="terms" value="agree">
      <label for="agreeTerms">
       I agree to the <a href="#">terms</a>
   </label>
</div>
</div>
<!-- /.col -->
<div class="col-4">
    <button type="submit" class="btn btn-primary btn-block">Register</button>
</div>
<!-- /.col -->
</div>
</form>

<div class="social-auth-links text-center">
    <a href="#" class="btn btn-block btn-primary">
      <i class="fab fa-facebook mr-2"></i>
      Sign up using Facebook
  </a>
  <a href="#" class="btn btn-block btn-danger">
      <i class="fab fa-google-plus mr-2"></i>
      Sign up using Google+
  </a>
</div>

<a href="login.html" class="text-center">I already have a membership</a>
</div>
<!-- /.form-box -->
</div><!-- /.card -->
</div>
<!-- /.register-box -->
</body>
<!-- jQuery -->
<script src="../componentes/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../componentes/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../componentes/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../componentes/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../componentes/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../componentes/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../componentes/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../componentes/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../componentes/plugins/moment/moment.min.js"></script>
<script src="../componentes/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../componentes/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../componentes/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../componentes/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../componentes/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../componentes/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../componentes/dist/js/pages/dashboard.js"></script>
</html>