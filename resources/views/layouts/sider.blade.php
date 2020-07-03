@section('side-bar')
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/simco/public">
    <div class="sidebar-brand-icon">
      <i class="fas fa-sitemap"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SIMCO <sup></sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="index.html">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Main Menu
    </div>

    <!-- Nav Item - Pages Collapse Menu -->

    <li class="nav-item active">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDataArea" aria-expanded="true" aria-controls="collapseDataArea">
        <i class="fas fa-fw fa-gear"></i>
        <span>Master Data</span>
      </a>
      <div id="collapseDataArea" class="collapse" aria-labelledby="headingDataArea" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item active" href="{{ url('masterArea') }}">Data Area</a>
        </div>
      </div>
    </li>
    <li class="nav-item active">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-gear"></i>
        <span>MCOD</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Peraturan Direksi:</h6>
          <a class="collapse-item active" href="{{ url('perdir') }}">Peraturan Direksi</a>
        </div>
      </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->
@endsection
