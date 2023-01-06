@extends('layout.app')
@section('title', 'Welcome To Technostalgia')
  
@section('main-content')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">The Annual<br><span>Technology</span> Competition</h1>
      <p class="mb-4 pb-0">Brings You Back The Nostalgic of Challenging Competition</p>
      <a href="#about" class="about-btn scrollto">About The Event</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6">
            <h2>About The Competition</h2>
            <p>Sed nam ut dolor qui repellendus iusto odit. Possimus inventore eveniet accusamus error amet eius aut
              accusantium et. Non odit consequatur repudiandae sequi ea odio molestiae. Enim possimus sunt inventore in
              est ut optio sequi unde.</p>
          </div>
          <div class="col-lg-3">
            <h3>Where</h3>
            <p>Special Region Yogyakarta, Indonesia</p>
          </div>
          <div class="col-lg-3">
            <h3>When</h3>
            <p>Monday to Wednesday<br>10-12 February 2023</p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Competitions Section ======= -->
    <section id="speakers">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Competitions</h2>
          <p>Here are some of our competition</p>
        </div>

        <div class="row justify-content-md-center">
          <div class="col-lg-6 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/img/speakers/1.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="{{Route('cp')}}">Competitive Programming</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos tenetur ut reiciendis, nisi nulla asperiores, nihil, maiores aliquid illo praesentium fuga suscipit possimus animi explicabo provident quaerat voluptatum expedita dolores.</p>

              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/speakers/2.jpg" alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Hackathon</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo voluptate incidunt id quia mollitia neque omnis dolores, veniam hic consequatur, nulla explicabo, maiores eaque esse repellat rerum sed. Corporis, incidunt!</p>

              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/img/speakers/4.jpg" alt="Speaker 4" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Capture The Flag</a></h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia quod quibusdam iure modi culpa cupiditate est nemo laboriosam sit, unde quos. Est officia expedita laborum nam delectus debitis voluptatum et!</p>

              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="assets/img/speakers/6.jpg" alt="Speaker 6" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Game Ideation</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex alias natus minima autem distinctio ut consequatur cupiditate earum unde. Voluptatibus similique ad expedita enim tempore reprehenderit! Corporis dolor asperiores placeat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End Speakers Section -->

    <!-- ======= Schedule Section ======= -->
    <section id="schedule" class="section-with-bg bg-warning">
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
            <li class="nav-item">
              <a class="nav-link" href="#day-4" role="tab" data-bs-toggle="tab">Day 4</a>
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
                  <p>Laboratory center 6th floor</p>
                </div>
              </div>

              <div class="row schedule-item">
                <div class="col-md-2"><time>11:00 - 12:00</time></div>
                <div class="col-md-10">
                  <h4>Coffee Break</h4>
                  <p>Hall 1st floor</p>
                </div>
              </div>
              <div class="row schedule-item">
                  <div class="col-md-2"><time>11:00 - 12:00</time></div>
                  <div class="col-md-10">
                    <h4>Capture the flag trial session</h4>
                    <p>Laboratory center 6th floor</p>
                  </div>
                </div>
                <div class="row schedule-item">
                  <div class="col-md-2"><time>11:00 - 14:00</time></div>
                  <div class="col-md-10">
                    <h4>Competitive programming trial session</h4>
                    <p>Laboratory center 6th floor</p>
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
                <div class="col-md-2"><time>08:00 - 10:00</time></div>
                <div class="col-md-10">
                  <h4>Registration & breakfast</h4>
                  <p>Hall 1st Floor</p>
                </div>
              </div>

              <div class="row schedule-item">
                  <div class="col-md-2"><time>10:00 - 18:00</time></div>
                  <div class="col-md-10">
                    <h4>Capture the flage qualifier</h4>
                    <p>Laboratory center 6th floor</p>
                  </div>
                </div>

                <div class="row schedule-item">
                  <div class="col-md-2"><time>10:00 - 13:00</time></div>
                  <div class="col-md-10">
                    <h4>Competitive programming qualifier</h4>
                    <p>Laboratory center 6th floor</p>
                  </div>
                </div>
                <div class="row schedule-item">
                  <div class="col-md-2"><time>10:00 - 18:00</time></div>
                  <div class="col-md-10">
                    <h4>Dinner</h4>
                    <p>Hall 1st floor</p>
                  </div>
                </div>
            </div>
            <!-- End Schdule Day 2 -->

            <!-- Schdule Day 3 -->
            <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">
              <div class="row schedule-item">
                  <div class="col-md-2"><h5>Time</h5></div>
                  <div class="col-md-10">
                    <h5>Activity</h5>
                  </div>
                </div>

              <div class="row schedule-item">
                <div class="col-md-2"><time>07:00 - 08:00</time></div>
                <div class="col-md-10">
                  <h4>Opening Ceremony</h4>
                  <p>Auditorium 7th floor</p>
                </div>
              </div>

              <div class="row schedule-item">
                  <div class="col-md-2"><time>08:00 - 10:00</time></div>
                  <div class="col-md-10">
                    <h4>Re - registration & breakfast</h4>
                    <p>Hall 1st floor</p>
                  </div>
                </div>

                <div class="row schedule-item">
                  <div class="col-md-2"><time>10:00 - 18:00</time></div>
                  <div class="col-md-10">
                    <h4>Capture the flag contest</h4>
                    <p>Laboratory center 6th Floor</p>
                  </div>
                </div>

                <div class="row schedule-item">
                  <div class="col-md-2"><time>10:00 - 15:00</time></div>
                  <div class="col-md-10">
                    <h4>Competitive programming contest</h4>
                    <p>Laboratory center 6th floor</p>
                  </div>
                </div>

                <div class="row schedule-item">
                  <div class="col-md-2"><time>11:00 - next day 11:00</time></div>
                  <div class="col-md-10">
                    <h4>Hackathon & Game Ideation</h4>
                    <p>Laboratory center 5th floor</p>
                  </div>
                </div>
                <div class="row schedule-item">
                  <div class="col-md-2"><time>18:00 - 19:00</time></div>
                  <div class="col-md-10">
                    <h4>Dinner</h4>
                    <p>Hall 1st floor</p>
                  </div>
                </div>
              </div>
              <!-- End of Schdule Day 3 -->

              <!-- Schdule Day 4 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show" id="day-4">
              <div class="row schedule-item">
                  <div class="col-md-2"><h5>Time</h5></div>
                  <div class="col-md-10">
                    <h5>Activity</h5>
                  </div>
                </div>

              <div class="row schedule-item">
                <div class="col-md-2"><time>15:00 - end</time></div>
                <div class="col-md-10">
                  <h4>Awarding night & closing ceremony</h4>
                  <p>Auditorium 7th floor</p>
                </div>
              </div>
            </div>

          <!-- End ofSchdule Day 4 -->
          </div>
        </div>

      </section><!-- End Schedule Section -->

    <!-- ======= Venue Section ======= -->
    <section id="venue">

      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Event Venue</h2>
          <p>Event venue location info and gallery</p>
        </div>

        <div class="row g-0">
          <div class="col-lg-6 venue-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6 venue-info">
            <div class="row justify-content-center">
              <div class="col-11 col-lg-8 position-relative">
                <h3>Downtown Conference Center, New York</h3>
                <p>Iste nobis eum sapiente sunt enim dolores labore accusantium autem. Cumque beatae ipsam. Est quae sit qui voluptatem corporis velit. Qui maxime accusamus possimus. Consequatur sequi et ea suscipit enim nesciunt quia velit.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="container-fluid venue-gallery-container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="images/1.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="images/1.jpg" alt="" class="img-fluid" style="height: 269.5px">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="images/2.jpeg" class="glightbox" data-gall="venue-gallery">
                <img src="images/2.jpeg" alt="" class="img-fluid" style="height: 269.5px">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="images/3.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="images/3.jpg" alt="" class="img-fluid" style="height: 269.5px">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="images/4.jpeg" class="glightbox" data-gall="venue-gallery">
                <img src="images/4.jpeg" alt="" class="img-fluid" style="height: 269.5px">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="images/5.jpeg" class="glightbox" data-gall="venue-gallery">
                <img src="images/5.jpeg" alt="" class="img-fluid" style="height: 269.5px">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="images/6.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="images/6.jpg" alt="" class="img-fluid" style="height: 269.5px">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="images/7.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="images/7.jpg" alt="" class="img-fluid" style="height: 269.5px">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="images/8.jpg" class="glightbox" data-gall="venue-gallery">
                <img src="images/8.jpg" alt="" class="img-fluid" style="height: 269.5px">
              </a>
            </div>
          </div>

        </div>
      </div>

    </section><!-- End Venue Section -->

     <!-- =======  F.A.Q Section ======= -->
     <section id="faq">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>F.A.Q </h2>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-9">

            <ul class="faq-list">

              <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                  </p>
                </div>
              </li>

            </ul>

          </div>
        </div>

      </div>

    </section><!-- End  F.A.Q Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Gallery</h2>
          <p>Check our gallery from the recent events</p>
        </div>
      </div>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><a href="assets/img/gallery/1.jpg" class="gallery-lightbox"><img src="assets/img/gallery/1.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/2.jpg" class="gallery-lightbox"><img src="assets/img/gallery/2.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/3.jpg" class="gallery-lightbox"><img src="assets/img/gallery/3.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/4.jpg" class="gallery-lightbox"><img src="assets/img/gallery/4.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/5.jpg" class="gallery-lightbox"><img src="assets/img/gallery/5.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/6.jpg" class="gallery-lightbox"><img src="assets/img/gallery/6.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/7.jpg" class="gallery-lightbox"><img src="assets/img/gallery/7.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/8.jpg" class="gallery-lightbox"><img src="assets/img/gallery/8.jpg" class="img-fluid" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </section><!-- End Gallery Section -->

    <!-- ======= Supporters Section ======= -->
    <section id="supporters" class="section-with-bg">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Sponsors</h2>
        </div>

        <div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/1.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/2.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/3.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/4.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/5.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/6.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/7.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Sponsors Section -->
  </main><!-- End #main -->
  @endsection
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

