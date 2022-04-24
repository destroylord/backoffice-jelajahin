
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  {{-- <link href="img/logo/logo.png" rel="icon"> --}}
  <title>Jelajahin - {{ $title ?? 'Dashboard'}}</title>
    @include('layouts.partials.style')
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    @include('layouts.components.sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include('layouts.components.nav')
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ $breadcumb ?? 'Dashboard'}}</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ $title ?? 'Dashboard'}}</li>
            </ol>
          </div>
          <!--Row-->
          @yield('content')
          <!-- Modal Logout -->
          @include('layouts.modal-logout')
        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
        @include('layouts.components.footer')
      <!-- Footer -->
    </div>
  </div>


  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  @include('layouts.partials.script')
</body>

</html>
