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

<body class="hold-transition login-page">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="register-box">
                <div class="card card-outline card-primary">
                    <div class="card-header text-center">
                        <a href="#" class="h1"><b>Registros </b><?php echo $data["titulo"]; ?></a>
                    </div>
                    <div class="card-body">
                        <p class="login-box-msg"><?php echo $data["titulo"]; ?></p>

                        <form action="./?c=formulario&a=ActualizarFormulario" method="post" autocomplete="off">
                            <input type="hidden" name="hdnIdFormulario" value="<?php echo $data["idFormulario"]; ?>">
                            <div class="form-group">
                                <label>Descripción</label>
                                <input type="text" class="form-control" name="txtDescripcion" value="<?php echo $data["formulario"]["descripcion"]; ?>" placeholder="Ingrese la descripción" maxlength="100" required>
                            </div>
                            <div class="form-group">
                                <label>Etiqueta</label>
                                <input type="text" class="form-control" name="txtEtiqueta" value="<?php echo $data["formulario"]["etiqueta"]; ?>" placeholder="Ingrese la etiqueta" maxlength="100" required>
                            </div>
                            <div class="form-group">
                                <label>Ubicación</label>
                                <input type="text" class="form-control" name="txtUbicacion" value="<?php echo $data["formulario"]["ubicacion"]; ?>" placeholder="Ingresa la ubicación" maxlength="100" required>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-block btn-primary">Actualizar </button>
                                </div>
                                <div class="col">
                                    <a href="./?c=formulario&a=Listar"><button type="button" class="btn btn-block btn-danger">Regresar</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.form-box -->
                </div><!-- /.card -->
            </div>
            <!-- /.register-box -->
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

</html>