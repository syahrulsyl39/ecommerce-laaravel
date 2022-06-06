<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
      </div>
      <div class="sidebar-brand-text">RACHS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-user"></i>
        <span>Users</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Heading -->
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('show-p') }}">
        <i class="fas fa-fw fa-database"></i>
        <span>Produk</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
      <a class="nav-link" href="{{ route('show-o') }}">
        <i class="fas fa-fw fa-download"></i>
        <span>Pesanan</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
      <a class="nav-link" href="{{ route('show-c') }}">
        <i class="fas fa-fw  fa-th-list"></i>
        <span>Categori</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
      <a class="nav-link" href="{{ route('show-contact') }}">
        <i class="fas fa-fw fa-phone"></i>
        <span>Contact</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
