<?php
require_once "./config/Conexion.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

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
    <!-- Select2 -->
    <link rel="stylesheet" href="./componentes/plugins/select2/css/select2.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="./componentes/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php include('./layouts/navbar.php'); ?>
        <!-- /. Navbar -->

        <!-- Main Sidebar Container -->
        <?php include('./layouts/sidebar.php'); ?>
        <!-- /. Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?php echo $data["titulo"]; ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Módulo Usuario</a></li>
                                <li class="breadcrumb-item active"><?php echo $data["titulo"]; ?></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="register-box">
                                <div class="card card-outline card-primary">
                                    <div class="card-header text-center">
                                        <a href="#" class="h1"><b>Registros </b><?php echo $data["titulo"]; ?></a>
                                    </div>
                                    <div class="card-body">
                                        <p class="login-box-msg">Registrar un nuevo usuario</p>

                                        <form action="./?c=usuario&a=Guardar" method="post" autocomplete="off">
                                            <div class="form-group">
                                                <label>Usuario</label>
                                                <input type="text" class="form-control" name="txtUsuario" placeholder="Ingrese su usuario" maxlength="20" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Contraseña</label>
                                                <input type="text" class="form-control" name="txtContrasena" placeholder="Ingrese su contraseña" maxlength="20" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Persona</label>
                                                <select name="slcidPersona" class="form-control js-buscador" required>
                                                    <?php
                                                    $this->db = Conectar::conexion();
                                                    $sqlPersonas = "SELECT * FROM persona WHERE estado > 0";
                                                    $resultado = $this->db->query($sqlPersonas);
                                                    while ($row = $resultado->fetch_array()) { ?>
                                                        <option value="<?php echo $row['id_persona']; ?>"><?php echo $row['nombre'] . " " . $row['apellido']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Fecha Expiración</label>
                                                <input type="date" class="form-control" name="dtFechaExpiracion" required>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <button class="btn btn-block btn-primary">Crear nuevo usuario</button>
                                                </div>
                                                <div class="col">
                                                    <a href="./?c=usuario&a=ListarUsuarios"><button type="button" class="btn btn-block btn-danger">Regresar</button></a>
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
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Footer -->
        <?php include('./layouts/footer.php'); ?>
        <!-- /. Footer -->
    </div>
    <!-- ./wrapper -->

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
    <!-- Select2 -->
    <script src="./componentes/plugins/select2/js/select2.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./componentes/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="./componentes/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="./componentes/dist/js/pages/dashboard.js"></script>
    <!-- JS Funciones -->
    <script src="./js/main.js"></script>
</body>

</html>