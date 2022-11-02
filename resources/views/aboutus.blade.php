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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
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
        <div class="titleQ">
            <h1>Want to know about us?</h1>
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
    </div>

    <div class="contentBody">
        <div class="containerLastEvent">
            <div class="lastEventTitle">
                <h2>Our Last Event</h2>
            </div>
            <hr style="border:1px outset;background-color:#000000;color:#000000;height:5px;width:50%" />
            <div class="lastEventList">
                <div class="event1">
                    <div class="eventImg">
                        <img src='../images/High-school-comp-2015-MED.jpg' alt="">
                    </div>
                    <div class="eventDesc">
                        <h5>Competitive Programming 21</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, assumenda harum hic molestias quidem ex nisi corporis repellat optio perferendis atque aliquam! Omnis quod facere nobis blanditiis sed. Quasi, odit.</p>
                    </div>
                </div>
                <div class="event2">
                    <div class="eventImg">
                        <img src='../images/Mercer-Programming-Competition.jpg' alt="">
                    </div>
                    <div class="eventDesc">
                        <h5>Hackathon Marathon 22</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, assumenda harum hic molestias quidem ex nisi corporis repellat optio perferendis atque aliquam! Omnis quod facere nobis blanditiis sed. Quasi, odit.</p>
                    </div>
                </div>
                <div class="event1">
                    <div class="eventImg">
                        <img src='../images/UWF-ACM-Programming-Competition-.jpg' alt="">
                    </div>
                    <div class="eventDesc">
                        <h5>Capture The Flag 25</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, assumenda harum hic molestias quidem ex nisi corporis repellat optio perferendis atque aliquam! Omnis quod facere nobis blanditiis sed. Quasi, odit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contactUsContainer">

        
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="well well-sm">
                        <form class="form-horizontal" action="" method="post">
                            <fieldset>
                                <legend class="text-center"><h1>Any Question? Contact us!</h1></legend>
                                
                                <!-- Name input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">Name</label>
                                    <div class="col-md-9">
                                        <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                                    </div>
                                </div>
        
                <!-- Email input-->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="email">Your E-mail</label>
                    <div class="col-md-9">
                        <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                    </div>
                </div>
                
                <!-- Message body -->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="message">Your message</label>
                    <div class="col-md-9">
                        <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                    </div>
                </div>
                
                <!-- Form actions -->
                <div class="form-group">
                    <div class="col-md-12 text-right">
                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
          </div>
        </div>
    </div>
    
</div>
    
    <div class="footer">
        
    </div>

</body>
</html>