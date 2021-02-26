<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Tracking Covid</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('frontend/assets/img/lukman1.jpeg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <p style="color:white" class="d-block">Lukman Suryana</p>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Indonesia
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('provinsi.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Provinsi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kota.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kota</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kecamatan.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kecamatan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kelurahan.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kelurahan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('rw.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rw</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kasus.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kasus</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                <a href="pages/UI/navbar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Navbar & Tabs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ribbons</p>
                </a>
              </li> -->
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=href="{{ route('logout') }}" onclick="event.preventDefault()
          document.getElementById('logout-form').submit();" role="button">
                        <i class="far nav-icon">Logout</i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="Post" class="d-nore">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
