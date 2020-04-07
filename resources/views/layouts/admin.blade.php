<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
  <!-- Custom styles for this template-->
  <link rel="stylesheet" href="{{ asset('css/admin.min.css') }}">
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-success sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <div class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-text mx-3">ADMIN</div>
      </div>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <li class="nav-item  {{ request()->is('admin/students*') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/students">
          <i class="fas fa-user"></i>
          <span>Quản lý học viên</span></a>
      </li>
      <li class="nav-item {{ request()->is('admin/majors*') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/majors">
          <i class="fas fa-book"></i>
          <span>Quản lý ngành đào tạo</span></a>
      </li>
      <li class="nav-item {{ request()->is('admin/courses*') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/courses">
          <i class="fas fa-atlas"></i>
          <span>Quản lý khóa học</span>
        </a>
      </li>
      <li class="nav-item {{ request()->is('admin/classes*') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/classes">
          <i class="fas fa-users"></i>
          <span>Quản lý lớp</span>
        </a>
      </li>
      <li class="nav-item {{ request()->is('admin/subjects*') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/subjects">
          <i class="fas fa-book-reader"></i>
          <span>Quản lý môn học</span></a>
      </li>
      <li class="nav-item {{ request()->is('admin/news*') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/news">
          <i class="fas fa-newspaper"></i>
          <span>Quản lý tin tức</span></a>
      </li>
      <li class="nav-item {{ request()->is('admin/results*') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/results">
          <i class="fas fa-poll"></i>
          <span>Quản lý điểm</span></a>
      </li>
      <li class="nav-item {{ request()->is('admin/documents*') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/documents">
          <i class="far fa-file-alt"></i>
          <span>Quản lý mẫu tin</span></a>
      </li>
      <li class="nav-item {{ request()->is('admin/schedules*') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/schedules">
          <i class="far fa-file-alt"></i>
          <span>Quản lý thời khóa biểu</span></a>
      </li>
      <li class="nav-item {{ request()->is('admin/registrations*') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/registrations">
          <i class="fas fa-address-card"></i>
          <span>Quản lý đăng ký</span></a>
      </li>
      <li class="nav-item {{ request()->is('admin/sales') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/sales">
          <i class="fas fa-badge-percent"></i>
          <span>Quản lý ưu đãi</span></a>
      </li>
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle">
        </button>
      </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <a class="d-none d-md-block" onclick="goBack()" style="cursor: pointer">
            <i class="far fa-arrow-left"></i>
            Quay lại
          </a>
          <ul class="navbar-nav ml-auto">
            {{-- <div class="topbar-divider d-none d-sm-block"></div> --}}

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600">
                  {{ Auth::guard('admin')->user()->username }}
                </span>
                <i class="fas fa-cog"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <button class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-fw mr-2 text-gray-400"></i>
                  Logout
                </button>
              </div>

            </li>
          </ul>
        </nav>

        <main>
          @yield('content')
        </main>
      </div>
    </div>
  </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    function goBack() {
      window.history.back();
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/admin.min.js') }}"></script>
</body>

</html>