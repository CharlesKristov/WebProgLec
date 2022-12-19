<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Timeline</title>
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

<body>

  <!-- ======= Header ======= -->
 @extends('navbar')
  <main id="main">
    <!-- ======= Schedule Section ======= -->
    <section id="schedule" class="section-with-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Competition Timeline</h2>
          <p>Here is our competition timeline</p>
        </div>

        <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">Day 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab">Day 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-3" role="tab" data-bs-toggle="tab">Day 3</a>
          </li>
        </ul>

        <h3 class="sub-heading">Technostalgia Rundown</h3>

        <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">
            <div class="row schedule-item">
                <div class="col-md-2"><h5>Time</h5></div>
                <div class="col-md-10">
                  <h5>Activity</h5>
                </div>
              </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>09:00 - 10:00</time></div>
              <div class="col-md-10">
                <h4>Technical meeting</h4>
                <p>Online (zoom)</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 - 13:00</time></div>
              <div class="col-md-10">
                <h4>Technostalgia trial session</h4>
                <p>Online</p>
              </div>
            </div>
          </div>
          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

            <div class="row schedule-item">
                <div class="col-md-2"><h5>Time</h5></div>
                <div class="col-md-10">
                  <h5>Activity</h5>
                </div>
              </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>09:00 - 10:00</time></div>
              <div class="col-md-10">
                <h4>Contest preparation</h4>
                <p>Online</p>
              </div>
            </div>

            <div class="row schedule-item">
                <div class="col-md-2"><time>10:00 - 15:00</time></div>
                <div class="col-md-10">
                  <h4>Technostalgia qualifier contest</h4>
                  <p>Online</p>
                </div>
              </div>

          </div>
          <!-- End Schdule Day 2 -->

          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">
            <div class="row schedule-item">
                <div class="col-md-2"><h5>Time</h5></div>
                <div class="col-md-10">
                  <h5>Activity</h5>
                </div>
              </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>07:30 - 09:00</time></div>
              <div class="col-md-10">
                <h4>Re-registration & breakfast</h4>
                <p>Hall 1st floor</p>
              </div>
            </div>

            <div class="row schedule-item">
                <div class="col-md-2"><time>09:00 - 10:00</time></div>
                <div class="col-md-10">
                  <h4>Opening ceremony</h4>
                  <p>Auditorium 7th floor</p>
                </div>
              </div>

              <div class="row schedule-item">
                <div class="col-md-2"><time>10:00 - 15:00</time></div>
                <div class="col-md-10">
                  <h4>Technostalgia final contest</h4>
                  <p>Laboratory center 6th Floor</p>
                </div>
              </div>

              <div class="row schedule-item">
                <div class="col-md-2"><time>15:00 - 16:00</time></div>
                <div class="col-md-10">
                  <h4>Snacks</h4>
                  <p>Hall 1st Floor</p>
                </div>
              </div>

              <div class="row schedule-item">
                <div class="col-md-2"><time>16:00 - 17:00</time></div>
                <div class="col-md-10">
                  <h4>Contest review & closing ceremony</h4>
                  <p>Auditorium 7th Floor</p>
                </div>
              </div>
          </div>

        </div>

      </div>

    </section><!-- End Schedule Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
