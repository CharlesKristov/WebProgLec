@extends('layout.app')
@section('title', 'Welcome To Technostalgia')

@section('main-content')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">The Annual<br><span>Technology</span> Competition</h1>
      <p class="mb-4 pb-0">Brings You Back The Nostalgic of Challenging Competition</p>
      <a href="#about" class="about-btn scrollto w-25">About The Event</a>
      <a href="{{Route('download')}}" class="guide-btn scrollto w-25">Download Guidebook</a>
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
              <img src="assets/img/competition/CP.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="{{Route('cp')}}">Competitive Programming</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos tenetur ut reiciendis, nisi nulla asperiores, nihil, maiores aliquid illo praesentium fuga suscipit possimus animi explicabo provident quaerat voluptatum expedita dolores.</p>

              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/competition/Hackathon.jpg" alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Hackathon</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo voluptate incidunt id quia mollitia neque omnis dolores, veniam hic consequatur, nulla explicabo, maiores eaque esse repellat rerum sed. Corporis, incidunt!</p>

              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/img/competition/CTF.jpg" alt="Speaker 4" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Capture The Flag</a></h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia quod quibusdam iure modi culpa cupiditate est nemo laboriosam sit, unde quos. Est officia expedita laborum nam delectus debitis voluptatum et!</p>

              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="assets/img/competition/GameIdeation.jpg" alt="Speaker 6" class="img-fluid">
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
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Apakah boleh membawa mainan atau boneka ke dalam ruang lomba? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Untuk 1 tim, peserta hanya diperbolehkan membawa 1 boneka ke dalam ruang lomba.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Apa benefit yang akan aku dapatkan dengan mengikuti lomba Technostalgia? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Setiap peserta akan mendapat E - sertifikat dan hadiah uang untuk juara 1, 2 dan 3. Selain itu, peserta juga akan mendapat beberapa merchandise gratis.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Apakah aku bisa membawa makanan dan minuman dari luar? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Sayangnya, kamu tidak diperbolehkan untuk membawa makanan dan minuman dari luar. Namun, kami telah menyediakan makanan dan minuman untuk semua peserta. Selain itu, juga tersedia bazaar - bazaar yang bisa dipilih.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Bagaimana tahap pendaftaran lomba technostalgia? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Pertama, ketua kelompok akan melakukan pembuatan akun dan pendaftaran tim pada website kami. Kemudian, membayar biaya pendaftaran dan mengirimkan bukti pembayaran. Setelah bukti pembayaran diverifikasi oleh panitia, maka tim telah dianggap valid untuk mengikuti lomba.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Bagaimana cara mengupdate data tim? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    data tim dapat diupdate pada halaman update, tetapi email dan nama tim tidak dapat diupdate, sehingga sebisa mungkin tidak terdapat kesalahan pada saat registrasi.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Apakah boleh seseorang terdaftar pada 2 lomba berbeda? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    1 orang dapat menjadi anggota dari 2 tim berbeda dengan jadwal lomba yang tidak bertabrakan, tetapi hanya dapat menjadi ketua di 1 lomba.
                  </p>
                </div>
              </li>

            </ul>

          </div>
        </div>

      </div>

    </section><!-- End  F.A.Q Section -->

    <!-- ======= Gallery Section ======= -->

  </main><!-- End #main -->
  @endsection
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

