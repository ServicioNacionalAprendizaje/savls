<!DOCTYPE html>
<html lang="es">

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
                            <h1 class="m-0">Lista de <?php echo $data["titulo"]; ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Módulo <?php echo $data["titulo"]; ?></a></li>
                                <li class="breadcrumb-item active"><?php echo $data["titulo"]; ?></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
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
                    <div class="row mt-3">
                        <div class="col">
                            <a href="./?c=formularioRol&a=Nuevo"><button class="btn btn-sm btn-info">Nuevo Formulario Rol <i class="fas fa-plus"></i></button></a>
                            <a href="./?c=formularioRol&a=FormulariosRolEliminados"><button class="btn btn-sm btn-danger">Formularios roles eliminados <i class="fas fa-trash"></i></button></a>
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
                                            <td><?php echo $dato["formuDescr"]; ?></td>
                                            <td><?php echo $dato["rolDescr"]; ?></td>
                                            <td>
                                                <a href="./?c=formularioRol&a=ModificarFormularioRol&idData=<?php echo $dato['id_formulario_rol']; ?>"><button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button></a>
                                                <a href="./?c=formularioRol&a=EliminarFormularioRol&idData=<?php echo $dato['id_formulario_rol']; ?>"><button class="eliminar btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></a>
                                            </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
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