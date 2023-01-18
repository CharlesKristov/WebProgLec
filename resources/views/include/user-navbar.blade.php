
<header id="header" class="d-flex align-items-center">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">

        <a href="{{Route('home')}}" class="scrollto"><img src="{{URL::to('assets/img/technostalgia.png')}}" alt="" title=""></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="{{Route('dashboard')}}">Dashboard</a></li>
          <li><a class="nav-link scrollto" href="{{Route('payment')}}">Payment</a></li>
          <li><a class="nav-link scrollto" href="{{Route('timeline')}}">Timeline</a></li>
          <li class="dropdown"><a href="#"><span>Kategori Lomba</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{Route('cp')}}">Competitive Programming</a></li>
              <li><a href="{{Route('hackathon')}}">Hackathon</a></li>
              <li><a href="{{Route('ideation')}}">Game Ideation</a></li>
              <li><a href="{{Route('capturetheflag')}}">Capture The Flag</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{Route('updateLeader')}}">Update Profile</a></li>
              <li><a href="{{Route('logout')}}">Logout</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
