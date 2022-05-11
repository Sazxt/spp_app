<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from seantheme.com/color-admin/admin/html/index_v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Oct 2021 06:50:01 GMT -->
  <head>
    <meta charset="utf-8"/>
    <title>
    Color Admin | Dashboard V3
    </title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/default/app.min.css') }}" rel="stylesheet" />
    @yield('css-include')
  </head>
  <body>
    <div class="app-loader" id="loader">
      <span class="spinner">
      </span>
      </div>
      <div class="app app-header-fixed app-sidebar-fixed" id="app">
        <div class="app-header" id="header">
        <div class="navbar-header">
          <a class="navbar-brand" href="index-2.html">
          <span class="navbar-logo">
          </span>
          <b>
            Color
          </b>
          Admin
          </a>
          <button class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile" type="button">
          <span class="icon-bar">
          </span>
          <span class="icon-bar">
          </span>
          <span class="icon-bar">
          </span>
          </button>
        </div>
        <div class="navbar-nav">
          <div class="navbar-item navbar-form">
          <form action="#" method="POST" name="search">
            <div class="form-group">
            <input class="form-control" placeholder="Enter keyword" type="text"/>
            <button class="btn btn-search" type="submit">
              <i class="fa fa-search">
              </i>
            </button>
            </div>
          </form>
          </div>
          <div class="navbar-item dropdown">
          <a class="navbar-link dropdown-toggle icon" data-bs-toggle="dropdown" href="#">
            <i class="fa fa-bell">
            </i>
            <span class="badge">
            5
            </span>
          </a>
          <div class="dropdown-menu media-list dropdown-menu-end">
            <div class="dropdown-header">
            NOTIFICATIONS (5)
            </div>
            <a class="dropdown-item media" href="javascript:;">
            <div class="media-left">
              <i class="fa fa-bug media-object bg-gray-500">
              </i>
            </div>
            <div class="media-body">
              <h6 class="media-heading">
              Server Error Reports
              <i class="fa fa-exclamation-circle text-danger">
              </i>
              </h6>
              <div class="text-muted fs-10px">
              3 minutes ago
              </div>
            </div>
            </a>
            <a class="dropdown-item media" href="javascript:;">
            <div class="media-left">
              <img alt="" class="media-object" src="/assets/img/user/user-1.jpg"/>
              <i class="fab fa-facebook-messenger text-blue media-object-icon">
              </i>
            </div>
            <div class="media-body">
              <h6 class="media-heading">
              John Smith
              </h6>
              <p>
              Quisque pulvinar tellus sit amet sem scelerisque tincidunt.
              </p>
              <div class="text-muted fs-10px">
              25 minutes ago
              </div>
            </div>
            </a>
            <a class="dropdown-item media" href="javascript:;">
            <div class="media-left">
              <img alt="" class="media-object" src="/assets/img/user/user-2.jpg"/>
              <i class="fab fa-facebook-messenger text-blue media-object-icon">
              </i>
            </div>
            <div class="media-body">
              <h6 class="media-heading">
              Olivia
              </h6>
              <p>
              Quisque pulvinar tellus sit amet sem scelerisque tincidunt.
              </p>
              <div class="text-muted fs-10px">
              35 minutes ago
              </div>
            </div>
            </a>
            <a class="dropdown-item media" href="javascript:;">
            <div class="media-left">
              <i class="fa fa-plus media-object bg-gray-500">
              </i>
            </div>
            <div class="media-body">
              <h6 class="media-heading">
              New User Registered
              </h6>
              <div class="text-muted fs-10px">
              1 hour ago
              </div>
            </div>
            </a>
            <a class="dropdown-item media" href="javascript:;">
            <div class="media-left">
              <i class="fa fa-envelope media-object bg-gray-500">
              </i>
              <i class="fab fa-google text-warning media-object-icon fs-14px">
              </i>
            </div>
            <div class="media-body">
              <h6 class="media-heading">
              New Email From John
              </h6>
              <div class="text-muted fs-10px">
              2 hour ago
              </div>
            </div>
            </a>
            <div class="dropdown-footer text-center">
            <a class="text-decoration-none" href="javascript:;">
              View more
            </a>
            </div>
          </div>
          </div>
          <div class="navbar-item navbar-user dropdown">
          <a class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" href="#">
            <img alt="" src="/assets/img/user/user-13.jpg"/>
            <span>
            <span class="d-none d-md-inline">
              {{ $level }}
            </span>
            <b class="caret">
            </b>
            </span>
          </a>
          @php $level = lcfirst($level) @endphp
          <div class="dropdown-menu dropdown-menu-end me-1">
            <a class="dropdown-item" href="javascript:;">
            Edit Profile
            </a>
            <a class="dropdown-item" href="javascript:;">
            <span class="badge bg-danger float-end rounded-pill">
              2
            </span>
            Inbox
            </a>
            <a class="dropdown-item" href="javascript:;">
            Calendar
            </a>
            <a class="dropdown-item" href="javascript:;">
            Setting
            </a>
            <div class="dropdown-divider">
            </div>
            <a class="dropdown-item" href="{{ url("$level/logout") }}">
            Log Out
            </a>
          </div>
          </div>
        </div>
        </div>
        <div class="app-sidebar" id="sidebar">
        <div class="app-sidebar-content" data-height="100%" data-scrollbar="true">
          <div class="menu">
          <div class="menu-profile">
            <a class="menu-profile-link" data-target="#appSidebarProfileMenu" data-toggle="app-sidebar-profile" href="javascript:;">
            <div class="menu-profile-cover with-shadow">
            </div>
            <div class="menu-profile-image">
              <img alt="" src="/assets/img/user/user-13.jpg"/>
            </div>
            <div class="menu-profile-info">
              <div class="d-flex align-items-center">
              <div class="flex-grow-1">
                @yield('username')
              </div>
              <div class="menu-caret ms-auto">
              </div>
              </div>
              <small>
                @yield('level')
              </small>
            </div>
            </a>
          </div>
          <div class="collapse" id="appSidebarProfileMenu">
            <div class="menu-item pt-5px">
            <a class="menu-link" href="javascript:;">
              <div class="menu-icon">
              <i class="fa fa-cog">
              </i>
              </div>
              <div class="menu-text">
              Settings
              </div>
            </a>
            </div>
            <div class="menu-item">
            <a class="menu-link" href="javascript:;">
              <div class="menu-icon">
              <i class="fa fa-pencil-alt">
              </i>
              </div>
              <div class="menu-text">
              Send Feedback
              </div>
            </a>
            </div>
            <div class="menu-item pb-5px">
            <a class="menu-link" href="javascript:;">
              <div class="menu-icon">
              <i class="fa fa-question-circle">
              </i>
              </div>
              <div class="menu-text">
              Helps
              </div>
            </a>
            </div>
            <div class="menu-divider m-0">
            </div>
          </div>
          <div class="menu-header">
            Navigation
          </div>
          <div class="menu-item has-sub active">
            <a class="menu-link" href="javascript:;">
            <div class="menu-icon">
              <i class="fa fa-th-large">
              </i>
            </div>
            <div class="menu-text">
              Dashboard
            </div>
            <div class="menu-caret">
            </div>
            </a>
            <div class="menu-submenu">
            <div class="menu-item active">
              <a class="menu-link" href="{{ url('dashboard') }}">
              <div class="menu-text">
                Dashboard
              </div>
              </a>
            </div>
            </div>
          </div>
          @if ($level == "admin")
          <div class="menu-item has-sub">
            <a class="menu-link" href="javascript:;">
              <div class="menu-icon">
                <i class="fa fa-gem">
                </i>
              </div>
              <div class="menu-text">
                Master Data
              </div>
              <div class="menu-caret">
              </div>
            </a>
            <div class="menu-submenu">
              <div class="menu-item">
                <a class="menu-link" href="{{ url("$level/datasiswa") }}">
                <div class="menu-text">
                  Data siswa
                </div>
                </a>
              </div>
              <div class="menu-item">
                <a class="menu-link" href="{{ url("$level/datakelas") }}">
                <div class="menu-text">
                  Data kelas
                </div>
                </a>
              </div>
              <div class="menu-item">
                <a class="menu-link" href="{{ url("$level/datagama") }}">
                <div class="menu-text">
                  Data agama
                </div>
                </a>
              </div>
              <div class="menu-item">
                <a class="menu-link" href="{{ url("$level/datajurusan") }}">
                <div class="menu-text">
                  Data jurusan
                </div>
                </a>
              </div>
              <div class="menu-item">
                <a class="menu-link" href="{{ url("$level/dataperiode") }}">
                <div class="menu-text">
                  Data periode
                </div>
                </a>
              </div>
            </div>
          </div>
          <div class="menu-item has-sub">
            <a class="menu-link" href="javascript:;">
              <div class="menu-icon">
                <i class="fas fa-dice-d20">
                </i>
              </div>
              <div class="menu-text">
                Pembayaran
              </div>
              <div class="menu-caret">
              </div>
            </a>
            <div class="menu-submenu">
              <div class="menu-item">
                <a class="menu-link" href="{{ url("$level/bayarspp") }}">
                <div class="menu-text">
                  SPP
                </div>
                </a>
              </div>
            </div>
          </div>
          @elseif ($level == "siswa")
          <div class="menu-item has-sub">
            <a class="menu-link" href="javascript:;">
            <div class="menu-icon">
              <i class="fa fa-gem">
              </i>
            </div>
            <div class="menu-text">
              Pembayaran
            </div>
            <div class="menu-caret">
            </div>
            </a>
            <div class="menu-submenu">
              <div class="menu-item">
                <a class="menu-link" href="{{ url("$level/bayarspp") }}">
                <div class="menu-text">
                  SPP
                </div>
                </a>
              </div>
            </div>
          </div>
          @endif
          <div class="menu-item d-flex">
            <a class="app-sidebar-minify-btn ms-auto" data-toggle="app-sidebar-minify" href="javascript:;">
            <i class="fa fa-angle-double-left">
            </i>
            </a>
          </div>
          </div>
        </div>
        </div>
        <div class="app-sidebar-bg">
        </div>
        <div class="app-sidebar-mobile-backdrop">
        <a class="stretched-link" data-dismiss="app-sidebar-mobile" href="#">
        </a>
        </div>
        <!-- isi dashboard -->
        <div class="app-content" id="content">
        <ol class="breadcrumb float-xl-end">
          <li class="breadcrumb-item">
          <a href="javascript:;">
            Home
          </a>
          </li>
          <li class="breadcrumb-item">
          <a href="javascript:;">
            Dashboard
          </a>
          </li>
          <li class="breadcrumb-item active">
          Dashboard v3
          </li>
        </ol>
        <h1 class="page-header mb-3">
          {{$pages}}
        </h1>
        @yield('content')
        </div>
        <a class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top" href="javascript:;">
          <i class="fa fa-angle-up">
          </i>
        </a>
    </div>
    
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme/default.min.js') }}"></script>
    @yield('js-include')
    
    <script data-cf-settings="92dce7dff6f56ae1bf3a694f-|49" defer="" src="/assets/js/rocket-loader.min.js">
    </script>
  </body>
</html>