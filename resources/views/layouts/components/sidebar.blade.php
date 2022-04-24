<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon">
        {{-- <img src="img/logo/logo2.png"> --}}
      </div>
      <div class="sidebar-brand-text mx-3">Jelajahin</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Features
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('restaurant.index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Restaurant</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Tour</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('hotel.index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Hotel</span></a>
      </li>
    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
</ul>
