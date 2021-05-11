<!doctype html>
<html lang="es">

<head>
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
  <title>Registros | <?php echo $data["titulo"]; ?></title>
</head>

<body class="hold-transition">
  <div class="container-fluid">
    <h1 class="text-center"><?php echo $data["titulo"]; ?></h1>
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
        <?php } ?>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col">
        <a href="./?c=formularioRol&a=ListarFormulariosRol"><button class="btn btn-sm btn-info">Regresar <i class="fas fa-undo"></i></button></a>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-12">
        <table class="table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Fecha Modificación</th>
              <th>Formulario</th>
              <th>Rol</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php
              $cont = 1;
              foreach ($data["formulariosRol"] as $dato) {
              ?>
                <td><?php echo $cont++; ?></td>
                <td><?php echo $dato["fecha_modificacion"]; ?></td>
                <td><?php echo $dato["descripcion"]; ?></td>
                <td><?php echo $dato["descripcion"]; ?></td>
                <td>
                  <a href="./?c=formularioRol&a=RestaurarFormularioRol&idData=<?php echo $dato['id_formulario_rol']; ?>"><button class="btn btn-sm btn-primary"><i class="fas fa-trash-restore"></i></button></a>
                  <a href="./?c=formularioRol&a=ElimiDefinFormuRol&idData=<?php echo $dato['id_formulario_rol']; ?>"><button class="eliminar btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></a>
                </td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
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
<!-- JS SCRIPT -->
<script src="./js/main.js"></script>
</html>