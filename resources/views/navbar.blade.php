<header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
        
        <a href="index.html" class="scrollto"><img src="{{('assets/img/technostalgia.png')}}" alt="" title=""></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="{{Route('home')}}">Home</a></li>
          <li class="dropdown"><a href="#"><span>Kategori Lomba</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{Route('cp')}}">Competitive Programming</a></li>
              <li><a href="{{Route('hackathon')}}">Hackathon</a></li>
              <li><a href="#">Game Ideation</a></li>
              <li><a href="#">Capture The Flag</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{Route('aboutus')}}">About Us</a></li>
         
          <li><a class="nav-link scrollto" href="#supporters">Sponsors</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a class="buy-tickets scrollto" href="{{Route('login')}}">Login</a>
    </div>
  </header><!-- End Header -->