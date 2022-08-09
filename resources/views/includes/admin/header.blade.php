 <div id="wrapper">
    <!-- Sidebar -->
    <ul class=" navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center"style="background-color: #D46565" href="index.php">
        <div class="sidebar-brand-icon">
          <img src="{{ asset('template/admin/img/logo/logo3.png')}}">
        </div>
        <div class="sidebar-brand-text mx-2">ไก่ทอดหาดใหญ่</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>เกี่ยวกับ</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>อาหาร</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>คำสั่งซื้อ</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="content.php" >
        <i class="fab fa-fw fa-wpforms"></i>
          <span>เนื้อหา</span></a>
      </li>
      <hr class="sidebar-divider">
     
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top" style="background-color: #D46565">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
    
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="{{ asset('template/admin/img/boy.png')}}" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">{{ Auth::user()->name }}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    {{ __('Logout') }}
                </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                    </form>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->
        