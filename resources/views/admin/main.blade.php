<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SELAMAT DATANG DI BENGKEL</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('assets/front-end/admin/plugins/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/front-end/admin/dist/css/adminlte.min.css') }}" type="text/css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('assets/front-end/admin/plugins/ionicons/ionicons.min.css') }}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('assets/front-end/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('assets/front-end/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('assets/front-end/admin/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('assets/front-end/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('assets/front-end/admin/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('assets/front-end/admin/plugins/summernote/summernote-bs4.min.css') }}">

  <!-- Tambahkan CSS custom untuk hilangkan space -->
  <style>
    .content-header {
      padding-top: 0 !important;
      padding-bottom: 0 !important;
      margin-bottom: 0 !important;
    } 
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  
    <ul class="navbar-nav ml-auto">
      
        </a>
      </li>
      
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('assets/front-end/admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">BENGKEL BOREUP</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/front-end/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Agiel Ramadhan Putra</a>
        </div>
      </div>

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

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Footer
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/main/telfon" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>KONTAK BENGKEL</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/main/posts" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>UBAH TAMPILAN PEMILIK</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                LIHAT WEB BENGKEL KAMI
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <form method="POST" action="{{ route('admin.logout') }}" style="display: inline;">
          @csrf
          <button type="submit" class="btn btn-link nav-link">
            <i class="fas fa-sign-out-alt"></i> Logout
          </button>
        </form>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('judul')</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          @yield('konten')
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark"></aside>

  <!-- Main Footer -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>

<!-- REQUIRED SCRIPTS -->
<script src="{{ asset('assets/front-end/admin/plugins/jquery/jquery.min.js') }}" defer></script>
<script src="{{ asset('assets/front-end/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{ asset('assets/front-end/admin/dist/js/adminlte.min.js') }}" defer></script>
<script src="{{ asset('assets/front-end/admin/plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('assets/front-end/admin/plugins/sparklines/sparkline.js') }}"></script>
<script src="{{ asset('assets/front-end/admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('assets/front-end/admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<script src="{{ asset('assets/front-end/admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<script src="{{ asset('assets/front-end/admin/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('assets/front-end/admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/front-end/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('assets/front-end/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('assets/front-end/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
</body>
</html>
