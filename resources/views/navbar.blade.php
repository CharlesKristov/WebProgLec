<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome to Technostalgia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

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
              <li><a href="{{Route('ideation')}}">Game Ideation</a></li>
              <li><a href="{{Route('capturetheflag')}}">Capture The Flag</a></li>
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