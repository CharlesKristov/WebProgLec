
<header id="header" class="d-flex align-items-center">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">

        <a href="{{Route('home')}}" class="scrollto"><img src="{{URL::to('assets/img/technostalgia.png')}}" alt="" title=""></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto text-white" href="{{Route('dashboard')}}">User Dashboard</a></li>
          <li><a class="nav-link scrollto text-white" href="{{Route('payment')}}">Payment</a></li>
          <li><a class="nav-link scrollto text-white" href="{{Route('timeline')}}">Timeline</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <div class="dropdown">
        <div class="nav-link scrollto text-white dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Profile
        </div>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="{{Route('updateLeader')}}">Update Profile</a></li>
          <li><a class="dropdown-item" href="{{Route('logout')}}">Logout</a></li>
        </ul>
      </div>

      {{-- <div class="dropdown show mb-2 ms-2">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Profile
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{Route('updateLeader')}}">Update Profile</a>
            <a class="dropdown-item" href="{{Route('logout')}}">Logout</a>
        </div>
      </div> --}}

    


    </div>
  </header><!-- End Header -->
