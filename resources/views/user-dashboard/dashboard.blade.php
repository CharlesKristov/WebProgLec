
@extends('layout.app')
<body>
    
    <div class="dashboard-bg content-top w-100 text-white d-flex flex-column justify-content-center">



        <div class=" d-flex justify-content-center align-items-center p-5 mt-5 w-100">
            <div class="titleQ">
                <div class="contentTitle">
                    <div class="aboutUsTitle mt-3">
                        <h2 class="text">Hi Team {{$leader->Team_Name}}!</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="competitionHeader container d-flex justify-content-start align-items-center flex-column mb-3">
            <h4 class="">Competition:
                @if ($leader->Competition==null)
                -
                @else
                {{ $leader->Competition }}
                @endif
            </h4>
            @if ($leader->Payment_Status == null)
                <h4 class="">Payment Status: Haven't done payment!</h4>
                @elseif ($leader->Payment_Status == "unverified")
                <h4 class="">Payment Status: <span class="text-danger"> Unverified</span></h4>
                @elseif($leader->Payment_Status == "verified")
                <h4 class="">Payment Status: <span class="text-success"> Verified</span></h4>
            @endif
        </div>

        <div class="container full d-flex align-items-center flex-column text-black text-center">
            <div class="card" style = "width: 18rem;background: linear-gradient(to right, lightgrey 0%, lightgrey 1%, #e0e0e0 26%, #efefef 48%, #d9d9d9 75%, #bcbcbc 100%);">
                <div class="card-body">
                    <h3 class="card-title">Leader</h3>
                    <hr>
                    <h6 class="card-subtitle mb-2"> {{$leader->Full_Name}} </h6>
                    <p class ="card-text"> {{$leader->email}} </p>
                    {{$leader->Phone}}
                </div>
            </div>  
                <br>
                @if (count($members) <= 0)
                    -
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

                @if ($leader->Competition==null)
                <form action="competition_store" method="get">
                    @csrf
                    <div class="form-group">
                        <label for="leader_name">Leader Name:</label>
                        <input type="text" class="form-control" name="leader_name" value="{{ $leader->Full_Name }}" disabled>
                        <label for="competition">Choose Competition: </label>
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
                        <h3>Add Member:</h3>
                        <label for="Full_Name">Full Name</label>
                        <input type="text"
                        class="form-control @error('Full_Name')is-invalid @enderror" name="Full_Name" id="Full_Name" aria-describedby="helpId" placeholder="">
                        @error('Full_Name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        <label for="Email">Email</label>
                        <input type="email" class="form-control @error('Email')is-invalid @enderror" name="Email" id="" aria-describedby="emailHelpId" placeholder="">
                        @error('Email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                         @enderror

                        <label class="form-label" for="form3Example1">Date Of Birth</label>
                        <input name="dob" type="date" id="form3Example1" class="form-control @error('dob')is-invalid @enderror">
                        @error('dob')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                         @enderror
                        
                        <label for="Phone">Phone Number</label>
                        <input type="text"
                        class="form-control @error('Phone')is-invalid @enderror" name="Phone" id="Phone" aria-describedby="helpId" placeholder="">
                        @error('Phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <button type="submit" class="btn btn-primary mt-3">Add Member!</button>

                    @endif
                </form>
            </div>
        </div>
        


    </div>


    
</body>


