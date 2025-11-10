<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 menu_lateral">

    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="vistas/assets/dist/img/cemesa.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">
    <i class="fas fa-user-friends nav-icon"></i> TURNERO
</span>

    </a>

    <!-- Sidebar -->
    <div class="sidebar">

    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="vistas/assets/dist/img/cemesa.png" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info d-flex align-items-center ml-2">
        <i class="fas fa-hospital nav-icon mr-2"></i>
        <a href="#" class="d-block">CEMESA</a>
    </div>
</div>



        <!-- Sidebar Menu -->
        <nav class="mt-2 ">
            
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                
                <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-md"></i>
                        <p>
                          Radiologia
                          <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/rayosx.php')" class="nav-link" style="cursor: pointer;">
                                <i class="fas fa-x-ray nav-icon"></i>
                                <p>Rayos X</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/mamografia.php')" class="nav-link" style="cursor: pointer;">
                                <i class="fas fa-microscope nav-icon"></i>
                                <p>Mamografia</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/ultrasonido.php')" class="nav-link" style="cursor: pointer;">
                                <i class="fas fa-stethoscope nav-icon"></i>
                                <p>Ultrasonido</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/tomografiacomputarizada.php')" class="nav-link" style="cursor: pointer;">
                                <i class="fas fa-laptop-medical nav-icon"></i>
                                <p>T.C.</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/resonanciamagnetica.php')" class="nav-link" style="cursor: pointer;">
                                <i class="fas fa-magnet nav-icon"></i>
                                <p>R.M.</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/fluroscopia.php')" class="nav-link" style="cursor: pointer;">
                                <i class="fas fa-video nav-icon"></i>
                                <p>Fluoroscopia</p>
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