@extends('layout.app')
@section('title', 'Dashboard')
    
@section('main-content')
    <div class="dashboard-bg content-top w-100 text-white d-flex flex-column justify-content-center">



        <div class=" d-flex justify-content-center align-items-center p-5 mt-5 w-100">
            <div class="titleQ">
                <div class="contentTitle">
                    <div class="aboutUsTitle mt-3">
                        <h2 class="text">Hi Team {{Auth::user()->Team_Name}}!</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="competitionHeader container d-flex justify-content-start align-items-center flex-column mb-3">
            <h4 class="">Competition:
                @if (Auth::user()->Competition==null)
                -
                @else
                {{ Auth::user()->Competition }}
                @endif
            </h4>
            @if (Auth::user()->Payment_Status == null)
                <h4 class="">Payment Status: <strong>Haven't done payment!</strong></h4>
            @elseif (Auth::user()->Payment_Status == "unverified")
                <h4 class="">Payment Status: <strong><span class="text-danger"> Unverifed Payment!</span><strong></h4>
            @elseif(Auth::user()->Payment_Status == "verified")
                <h4 class="">Payment Status: <span class="text-success"> Verifed Payment!</span></h4>
            @endif
        </div>

        <div class="container d-flex align-items-center flex-column text-black text-center">
            <div class="card" style = "width: 18rem;background: linear-gradient(to right, lightgrey 0%, lightgrey 1%, #e0e0e0 26%, #efefef 48%, #d9d9d9 75%, #bcbcbc 100%);">
                <div class="card-body">
                    <h3 class="card-title">Leader</h3>
                    <hr>
                    <h6 class="card-subtitle mb-2"> {{Auth::user()->Full_Name}} </h6>
                    <p class ="card-text"> {{Auth::user()->email}} </p>
                    {{Auth::user()->Phone}}
                </div>
            </div>  
                <br>
                @if (count($members) <= 0)
                    <h4 class="text-white"> You haven't registered any member yet!</h4>
                @elseif (count($members) <= 2 ) 
                    @foreach ($members as $m)
                    <div class="card" style = "width: 18rem; background: linear-gradient(to right, lightgrey 0%, lightgrey 1%, #e0e0e0 26%, #efefef 48%, #d9d9d9 75%, #bcbcbc 100%);">
                        <div class="card-body">
                            <h4 class="card-title">Member</h4>
                            <hr>
                            <h6 class="card-subtitle mb-2">{{ $m->Full_Name }}</h6>
                            <p class ="card-text"> {{$m->Email}} </p>
                            {{$m->Phone}}
                        </div>
                    </div>
                    <br>
                    @endforeach
                @endif

            <hr>

            <div class="container">

                @if (Auth::user()->Competition==null)
                <form action="competition_store" method="get">
                    @csrf
                    <div class="form-group">
                    
                        <label for="competition" class="text-white mb-1">Choose Competition: </label>
                        <select class="form-control" name="competition" id="">
                            <option>Competitive Programming</option>
                            <option>Hackathon</option>
                            <option>Game Ideation</option>
                            <option>Capture The Flag</option>
                        </select>
                        <input class="btn btn-primary mt-3" type="submit" value="Submit!">
                    </div>
                    </form>
                @endif


            </div>

            <div class="container mb-5 text-white">
                
                <form action="/member_store" method="post">
                    @csrf
                    @if (count($members) < 2)
                        <h3 class="mt-5">Add Member:</h3>
                        <label for="Full_Name">Full Name</label>
                        <input type="text"
                        class="form-control mb-1" name="Full_Name" id="Full_Name" aria-describedby="helpId" placeholder="">

                        <label for="Email">Email</label>
                        <input type="email mb-1" class="form-control" name="Email" id="" aria-describedby="emailHelpId" placeholder="">
                        
                        <label class="form-label mb-1" for="form3Example1">Date Of Birth</label>
                        <input name="dob" type="date" id="form3Example1" class="form-control">
                        
                        <label class="mb-1" for="Phone">Phone Number</label>
                        <input type="text"
                        class="form-control" name="Phone" id="Phone" aria-describedby="helpId" placeholder="">

                        <button type="submit" class="btn btn-primary mt-3">Add Member!</button>

                    @endif
                </form>
            </div>
        </div>

    </div>
@endsection

