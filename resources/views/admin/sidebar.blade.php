  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="." class="brand-link">
        <img src="{{ asset('assets/img/umkm.png') }}" alt="Umkm Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Umkm TI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Project Pemweb 2</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    
                    <ul class="nav nav-treeview">

                    @if(Auth::user()->role == 'admin')
                        <li class="nav-item">
                            <a href="../admin/pembina" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pembina</p>
                            </a>
                        </li>
                        @endif

                        @if(Auth::user()->role == 'admin')
                        <li class="nav-item">
                            <a href="../admin/kabkota" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kabupaten/Kota</p>
                            </a>
                        </li>
                        @endif

                        @if(Auth::user()->role == 'admin')
                        <li class="nav-item">
                            <a href="../admin/kategori_umkm" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kategori UMKM</p>
                            </a>
                        </li>
                        @endif

                        @if(Auth::user()->role == 'admin')
                        <li class="nav-item">
                            <a href="../admin/provinsi" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Provinsi</p>
                            </a>
                        </li>
                        @endif

                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
