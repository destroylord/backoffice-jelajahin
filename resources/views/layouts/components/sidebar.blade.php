<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon">
        {{-- <img src="img/logo/logo2.png"> --}}
      </div>
      <div class="sidebar-brand-text mx-3">Exploria</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      General
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('restaurant.index')}}">
          <i class="fas fa-utensils"></i>
          <span>Restaurant</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('menu-restaurant.index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Menu Restaurant</span></a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('menu_typical.index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Menu Typical</span></a>
      </li> --}}
      <li class="nav-item">

        <a class="nav-link" href="{{ route('tour.index')}}">
          <i class="fas fa-map-marked-alt"></i>

          <span>Tour</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('activity.index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Activity</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('hotel.index')}}">
          <i class="fas fa-hotel"></i>
          <span>Hotel</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('hidden_gem.index')}}">
          <i class="fas fa-gem"></i>
          <span>Hidden Gem</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Host
      </div>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('host.index')}}">
            <i class="fas fa-file-alt"></i>
          <span>Approval Host </span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('experience.index')}}">
            <i class="fas fa-file-alt"></i>
          <span>Approval Experience </span></a>
      </li>
    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
</ul>
