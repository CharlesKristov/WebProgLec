@extends('layout.app')
@section('title', 'timeline')

@section('main-content')
<main id="main">
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

</main>

@endsection
