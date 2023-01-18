
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
      <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
            <li><a class="text-white" href="{{Route('updateLeader')}}">Update Profile</a></li>
            <li><a class="text-white" href="{{Route('logout')}}">Logout</a></li>
        </ul>
      </li>

    </div>
  </header><!-- End Header -->
