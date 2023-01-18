@extends('layout.app')
@section('title', 'About Technostalgia')
    
@section('main-content')
    

<body>
    <div class="content-top">
        <section id="hero" style="height: 70vh">
            <div class="hero-container">
                <h1 class="mb-4 pb-0">About Technostalgia</h1>
              <p class="mb-4 pb-0">Brings You Back The Nostalgic of Challenging Competition</p>
              {{-- <a href="{{Route('register')}}" class="about-btn scrollto">REGISTER</a> --}}
            </div>
        </section><!-- End Hero Section -->
    </div>


    <div class="contentBody">
        <div class="containerLastEvent">
            <div class="lastEventTitle">
                <h2 class="text-white">Our Last Event</h2>
            </div>
            <hr style="border:1px outset;background-color:#000000;color:#000000;height:5px;width:50%" />
            <div class="lastEventList">
                <div class="event1">
                    <div class="eventImg">
                        <img src='../images/High-school-comp-2015-MED.jpg' alt="">
                    </div>
                    <div class="eventDesc d-flex flex-col ">
                        <h5 class="text-white">Competitive Programming 21</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, assumenda harum hic molestias quidem ex nisi corporis repellat optio perferendis atque aliquam! Omnis quod facere nobis blanditiis sed. Quasi, odit.</p>
                        <a href="{{Route('cp')}}" class="float-end flex-end">
                            <button class="btn btn-primary">View More</button>
                        </a>
                    </div>
                </div>
                <div class="event2">
                    <div class="eventImg">
                        <img src='../images/Mercer-Programming-Competition.jpg' alt="">
                    </div>
                    <div class="eventDesc">
                        <h5 class="text-white">Hackathon Marathon 22</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, assumenda harum hic molestias quidem ex nisi corporis repellat optio perferendis atque aliquam! Omnis quod facere nobis blanditiis sed. Quasi, odit.</p>
                        <a href="{{Route('hackathon')}}">
                            <button class="btn btn-primary">View More</button>
                        </a>
                    </div>
                </div>
                <div class="event1">
                    <div class="eventImg">
                        <img src='../images/UWF-ACM-Programming-Competition-.jpg' alt="">
                    </div>
                    <div class="eventDesc">
                        <h5 class="text-white">Capture The Flag 25</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, assumenda harum hic molestias quidem ex nisi corporis repellat optio perferendis atque aliquam! Omnis quod facere nobis blanditiis sed. Quasi, odit.</p>
                        <a href="{{Route('capturetheflag')}}" >
                            <button class="btn btn-primary">View More</button>
                        </a>
                    </div>
                </div>
                <div class="event2">
                    <div class="eventImg">
                        <img src='../images/Mercer-Programming-Competition.jpg' alt="">
                    </div>
                    <div class="eventDesc">
                        <h5 class="text-white">Game Ideation 22</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, assumenda harum hic molestias quidem ex nisi corporis repellat optio perferendis atque aliquam! Omnis quod facere nobis blanditiis sed. Quasi, odit.</p>
                        <a href="{{Route('ideation')}}">
                            <button class="btn btn-primary">View More</button>
                        </a>
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
                                <legend class="text-center mt-4"><h1 class="text-white">Any Question? Contact us!</h1></legend>
                                
                                <!-- Name input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">Name</label>
                                    <div class="inputCol">
                                        <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                                    </div>
                                </div>
        
                <!-- Email input-->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="email">Your E-mail</label>
                    <div class="inputCol">
                        <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                    </div>
                </div>
                
                <!-- Message body -->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="message">Your message</label>
                    <div class="inputCol">
                        <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                    </div>
                </div>
                
                <!-- Form actions -->
                <div class="form-group">
                    <div class="col-md-12 text-right mb-5">
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
@endsection