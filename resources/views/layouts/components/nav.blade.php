<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
      <img src="img/logo/logo2.png">
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
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRestaurant"
      aria-expanded="true" aria-controls="collapseRestaurant">
      <i class="far fa-fw fa-window-maximize"></i>
      <span>Restaurant</span>
    </a>
    <div id="collapseRestaurant" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Restaurant</h6>
        <a class="collapse-item" href="{{route('restaurant.create')}}">Add Restaurant</a>
        <a class="collapse-item" href="{{route('restaurant.index')}}">List Restaurant</a>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTour" aria-expanded="true"
      aria-controls="collapseTour">
      <i class="fab fa-fw fa-wpforms"></i>
      <span>Tour</span>
    </a>
    <div id="collapseTour" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Tour</h6>
        <a class="collapse-item" href=" {{{route('tour.create')}}} ">Add Tour</a>
        <a class="collapse-item" href="{{ route('tour.index') }}">List Tour</a>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHotel" aria-expanded="true"
      aria-controls="collapseHotel">
      <i class="fas fa-fw fa-table"></i>
      <span>Hotel</span>
    </a>
    <div id="collapseHotel" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Hotel</h6>
        <a class="collapse-item" href="simple-tables.html">Add Hotel</a>
        <a class="collapse-item" href="datatables.html">List Hotel</a>
      </div>
    </div>
  </li>
  <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCity" aria-expanded="true"
        aria-controls="collapseCity">
        <i class="fas fa-fw fa-table"></i>
        <span>City</span>
      </a>
      <div id="collapseCity" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">City</h6>
          <a class="collapse-item" href="simple-tables.html">Add City</a>
          <a class="collapse-item" href="datatables.html">List City</a>
        </div>
      </div>
    </li>
  <hr class="sidebar-divider">
  <div class="version" id="version-ruangadmin"></div>
</ul>