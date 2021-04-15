<?php

if (!@$_GET['c']) {
  $menu_principal = "menu-open";
  $estado_menu = "active";
  $estado_index = "active";
}

if (@$_GET['c'] == 'persona') {
  $menu_principal_persona = "menu-open";
  $estado_menu_persona = "active";
  $estado_personas = "active";
} elseif (@$_GET['c'] == 'roles') {
  $menu_principal_roles = "menu-open";
  $estado_menu_roles = "active";
  $estado_roles = "active";
}elseif (@$_GET['c'] == 'usuario') {
  $menu_principal_usuarios = "menu-open";
  $estado_menu_usuarios = "active";
  $estado_usuarios = "active";
}elseif (@$_GET['c'] == 'formulario') {
  $menu_principal_formulario = "menu-open";
  $estado_menu_formulario = "active";
  $estado_formulario = "active";
}elseif (@$_GET['c'] == 'formularioRol') {
  $menu_principal_formulario_rol = "menu-open";
  $estado_menu_formulario_rol = "active";
  $estado_formulario_rol = "active";
}elseif (@$_GET['c'] == 'usuarioRol') {
  $menu_principal_usuario_rol = "menu-open";
  $estado_menu_usuario_rol = "active";
  $estado_usuario_rol = "active";
}

?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="./componentes/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Nombre System</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./componentes/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

    <!-- SidebarSearch Form -->
    <div class="form-inline mt-3">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-header">TABLERO PRINCIPAL</li>
        <li class="nav-item <?php echo $menu_principal; ?>">
          <a href="#" class="nav-link <?php echo $estado_menu; ?>">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Panel principal
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./" class="nav-link <?php echo $estado_index; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Pagina de inicio</p>
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-header">PERSONAS</li>
        <li class="nav-item <?php echo $menu_principal_persona; ?>">
          <a href="#" class="nav-link <?php echo $estado_menu_persona; ?>">
            <i class="fas fa-users"></i>
            <p>
              Módulo Personas
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./?c=persona&a=Listar" class="nav-link <?php echo $estado_personas; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Personas</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">ROLES</li>
        <li class="nav-item <?php echo $menu_principal_roles; ?>">
          <a href="#" class="nav-link <?php echo $estado_menu_roles; ?>">
          <i class="fas fa-user-tag"></i>
            <p>
              Módulo Roles
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./?c=roles&a=ListarRoles" class="nav-link <?php echo $estado_roles; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Roles</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">USUARIOS</li>
        <li class="nav-item <?php echo $menu_principal_usuarios; ?>">
          <a href="#" class="nav-link <?php echo $estado_menu_usuarios; ?>">
            <i class="fas fa-user"></i>
            <p>
              Módulo Usuarios
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./?c=usuario&a=ListarUsuarios" class="nav-link <?php echo $estado_usuarios; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Usuarios</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">FORMULARIOS</li>
        <li class="nav-item <?php echo $menu_principal_formulario; ?>">
          <a href="#" class="nav-link <?php echo $estado_menu_formulario; ?>">
          <i class="fas fa-user-tag"></i>
            <p>
              Módulo Formularios
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./?c=formulario&a=Listar" class="nav-link <?php echo $estado_formulario; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Formularios</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">FORMULARIOS ROL</li>
        <li class="nav-item <?php echo $menu_principal_formulario_rol; ?>">
          <a href="#" class="nav-link <?php echo $estado_menu_formulario_rol; ?>">
          <i class="fas fa-user-tag"></i>
            <p>
              Módulo Formularios Rol
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./?c=formularioRol&a=ListarFormulariosRol" class="nav-link <?php echo $estado_formulario_rol; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Formularios Rol</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">USUARIOS ROL</li>
        <li class="nav-item <?php echo $menu_principal_usuario_rol; ?>">
          <a href="#" class="nav-link <?php echo $estado_menu_usuario_rol; ?>">
          <i class="fas fa-user-tag"></i>
            <p>
              Módulo Usuarios Rol
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./?c=usuarioRol&a=ListarUsuariosRol" class="nav-link <?php echo $estado_usuario_rol; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Usuarios Rol</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>