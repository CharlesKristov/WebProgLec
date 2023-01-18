
<header id="header" class="d-flex align-items-center">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">

        <a href="{{Route('home')}}" class="scrollto"><img src="{{URL::to('assets/img/technostalgia.png')}}" alt="" title=""></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto text-white" href="{{Route('verify-payment')}}">Admin Dashboard</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a class="buy-tickets scrollto text-white" href="{{Route('logout')}}">Logout</a>
    </div>
  </header><!-- End Header -->
