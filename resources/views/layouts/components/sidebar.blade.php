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
        <a class="nav-link" href="index.html">
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
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategoryEvents" aria-expanded="true"
          aria-controls="collapseCategoryEvents">
          <i class="fas fa-fw fa-table"></i>
          <span>Category Event</span>
        </a>
        <div id="collapseCategoryEvents" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Category Events</h6>
            <a class="collapse-item" href="{{route('categoryEvent.index')}}">Add Category Events</a>
          </div>
        </div>
      </li>
    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
  </ul>
