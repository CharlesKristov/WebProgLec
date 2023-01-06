<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    {{-- <link rel="stylesheet" href="{{ URL::to('assets/vendor/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/vendor/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/vendor/swiper/swiper-bundle.min.css') }}"> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    @if(!Auth::check())
        @include('include.guest-navbar')
    @else
        @if(Auth::user()->Role=='user')
            @include('include.user-navbar')
        @else
            @include('include.admin-navbar')
        @endif
    @endif

    @yield('main-content')

    <footer id="footer">
        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong>Technostalgia</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
          -->
            Designed by <a href="https://bootstrapmade.com/">Technostalgia Commitee </a>
          </div>
        </div>
      </footer><!-- End  Footer -->

      <!-- Vendor JS Files -->
  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('#dropDetail1').click(function() {
                $('#detail1').toggle("slide");
            });
        });
        $(document).ready(function(){
            $('#dropDetail2').click(function() {
                $('#detail2').toggle("slide");
            });
        });
        $(document).ready(function(){
            $('#dropDetail3').click(function() {
                $('#detail3').toggle("slide");
            });
        });
        $(document).ready(function(){
            $('#dropDetail4').click(function() {
                $('#detail4').toggle("slide");
            });
        });
      </script>
</html>
