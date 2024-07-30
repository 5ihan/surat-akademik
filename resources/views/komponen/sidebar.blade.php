<body>
    <div class="container-scroller d-flex">
      <!-- Sidebar -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item sidebar-category">
            <p>Navigation</p>
            <span></span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/index') }}index.html">
              <i class="mdi mdi-view-quilt menu-icon"></i>
              <span class="menu-title">Dashboard</span>
              <div class="badge badge-info badge-pill">2</div>
            </a>
          </li>
          <li class="nav-item sidebar-category"></li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('/addadmin') }}">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Add Admin</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('/viewadmin') }}">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">View Admin</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('/suratmasuk') }}">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Surat Masuk</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('/suratditolak') }}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Surat Ditolak</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('/suratkeluar') }}">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">Surat Keluar</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- Sidebar End -->

      <!-- Main Content -->
      <div class="container-fluid page-body-wrapper">
        <!-- Navbar -->
        <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <div class="navbar-brand-wrapper">
              <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo" /></a>
            </div>
            <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">Welcome back, ADMIN 1</h4>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown mr-1">
                <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown"></a>
              </li>
              <li class="nav-item dropdown mr-2">
                <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-success">
                        <i class="mdi mdi-information mx-0"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-normal">Application Error</h6>
                      <p class="font-weight-light small-text mb-0 text-muted">Just now</p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-warning">
                        <i class="mdi mdi-settings mx-0"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-normal">Settings</h6>
                      <p class="font-weight-light small-text mb-0 text-muted">Private message</p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-info">
                        <i class="mdi mdi-account-box mx-0"></i>
                      </div>
                    </div>
                  </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <!-- Navbar End -->
