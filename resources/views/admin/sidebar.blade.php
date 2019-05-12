
<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Page <sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- Nav Item - Surat -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/surat') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Surat Masuk/Keluar</span></a>
      </li>

      <!-- Nav Item - Laporan -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/surat/laporan') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Laporan Semua Surat</span></a>
      </li>

      <!-- Nav Item - Disposisi -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/disposisi') }}">
          <i class="fas fa-fw fa-folder"></i>
          <span>Disposisi</span></a>
      </li>

      <!-- Nav Item - Hak Akses -->
      @if (request()->user()->hak=='admin')
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/user') }}">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Manajemen User</span></a>
      </li>
      @endif
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

    </ul>
    <!-- End of Sidebar -->


