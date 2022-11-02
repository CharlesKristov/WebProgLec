<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/style.css')}}" />
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>About Us | Technostalgia</title>
</head>
<body>
    @extends('navbar')
    <div class="content-top">
        <div
        class="bg-image d-flex justify-content-center align-items-center"
        style="
            background-image: url('../images/room1.jpg');
            height: 360px;
            background-repeat: no-repeat;
            width: 100%;
            background-size: cover;
            background-position: center;
        "
        >
            <div class="contentTitle">
                <div class="aboutUsTitle">
                    <h3>Technostalgia</h3>
                </div>
                <div class="aboutUsDesc">
                    <p>Technostalgia Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis deserunt molestias aliquam aspernatur nisi? Officia, laborum? Voluptatibus cupiditate officiis placeat eligendi natus velit. Molestiae, rerum ipsa. Repudiandae vel blanditiis non.</p>
                </div>
            </div>

            
        </div>
    </div>

    <div class="contentBody">
        <div class="containerLastEvent">
            <div class="lastEventTitle">
                <h3>Our Last Event</h3>
            </div>
            <div class="lastEventList">
                <div class="event">
                    <div class="eventImg">
                        <img src='../images/High-school-comp-2015-MED.jpg' alt="">
                    </div>
                    <p>Competitive Programming 21</p>
                </div>
                <div class="event">
                    <div class="eventImg">
                        <img src='../images/Mercer-Programming-Competition.jpg' alt="">
                    </div>
                    <p>Hackathon Marathon 22</p>
                </div>
                <div class="event">
                    <div class="eventImg">
                        <img src='../images/UWF-ACM-Programming-Competition-.jpg' alt="">
                    </div>
                    <p>Capture The Flag 25</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer">

    </div>

</body>
</html>