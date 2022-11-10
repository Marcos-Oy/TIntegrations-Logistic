<aside class="main-sidebar sidebar-light-primary elevation-1">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Tu Paquete</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
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
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a id="dashboard" style="cursor: pointer;" class="nav-link" href="?control=Login&action=Dash">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li id="MenuAdministrar" class="nav-item menu-closed">
                    <a id="administrar" href="#" class="nav-link">
                        <i class="fas fa-stream"></i>
                        <p>
                            Administrar
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a id="users" style="cursor: pointer;" class="nav-link" href="?control=Users&action=Portal">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Usuarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="Nominar" style="cursor: pointer;" class="nav-link" href="?control=Ordenes&action=NominarOrden">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Nominar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li id="MenuOrdenes" class="nav-item menu-closed">
                    <a id="ordenes" href="#" class="nav-link">
                        <i class="fas fa-stream"></i>
                        <p>
                            Ordenes
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a id="asignar" style="cursor: pointer;" class="nav-link" href="?control=Ordenes&action=AsignarOrden">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Asignar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="recibir" style="cursor: pointer;" class="nav-link" href="../recibir/show.php">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Recibir</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="ODT" style="cursor: pointer;" class="nav-link" href="../CargarODTexterna/show.php">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cargar ODT Externa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="codigo" style="cursor: pointer;" class="nav-link" href="?control=Ordenes&action=AsignarConCodigo">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Asignar con código</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="devolver" style="cursor: pointer;" class="nav-link" href="../devolver/show.php">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Devolver</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="entregar" style="cursor: pointer;" class="nav-link" href="../entregar/show.php">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Entregar</p>
                            </a>
                        </li>
                    </ul>

                </li>
                <li class="nav-item">
                    <a id="NuevaOrden" style="cursor: pointer;" class="nav-link" href="?control=Ordenes&action=NuevaOrden">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Nueva orden
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a id="MisDatos" style="cursor: pointer;" class="nav-link" href="?control=Users&action=MisDatos">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Mis Datos
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a id="RevisarOrden" style="cursor: pointer;" class="nav-link" href="?control=Ordenes&action=RevisarOrden">
                        <i class=" far fa-circle nav-icon"></i>
                        <p>
                            Revisar orden
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

</aside>