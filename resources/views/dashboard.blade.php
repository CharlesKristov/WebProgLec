<?php 

    

    // $data = session()->all(); 

    // if (session()->has('leaders')) {
    // $leaderSession = Session::get('leaders');
    // //
    // // dd($leaderSession->Team_Name);
    // $leader = DB::table('leaders')
    //             ->where('id', '=', $leaderSession->id)
    //             ->get()->first();

    //             // dd($leader);
    // // echo $leader->Team_Name;
    // $members = DB::table('leaders')
    //         ->join('members', 'leaders.id', '=', 'members.Leader_id')
    //         ->where('leaders.id', '=', $leader->id)
    //         ->get();
    // }
    // else {
    //     // return redirect()->route('home');
    //     return redirect()->to('/')->send();

    // }

?>  

<body>
    <div class="top">
        @extends('usernavbar')
    </div>
    
    <div class="dashboard-bg content-top w-100 text-white d-flex flex-column justify-content-center">



        <div class=" d-flex justify-content-center align-items-center p-5 mt-5 w-100">
            <div class="titleQ">
                <div class="contentTitle">
                    <div class="aboutUsTitle mt-3">
                        <h2 class="text">Hi Team {{$leader->Team_Name}} !</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="competitionHeader container d-flex justify-content-center align-items-center flex-column mb-3">
            <h2 class="">Current Competition:
                @if ($leader->Competition==null)
                -
                @else
                {{ $leader->Competition }}
                @endif
            </h2>
            @if ($leader->Payment_Status == null)
                <h2 class="">Payment Status: Haven't done payment!</h2>
                @elseif ($leader->Payment_Status == "unverified")
                <h2 class="">Payment Status: <span class="text-danger"> Unverifed Payment!</span></h2>
                @elseif($leader->Payment_Status == "verified")
                <h2 class="">Payment Status: <span class="text-success"> Verifed Payment!</span></h2>
            @endif
        </div>

        <div class="container d-flex justify-content-start align-items-start flex-column">
            <h2 class="">Member:
                @if (count($members) <= 0)
                    -
                @elseif (count($members) <= 2 ) 
                    @foreach ($members as $m)
                        <h3 >Name: {{ $m->Full_Name}}</h3>
                        <h3 >Email: {{ $m->Email}}</h3>
                    @endforeach
                @endif
            </h2>

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

            <div class="container mb-5">
                
                <form action="/member_store" method="post">
                    @csrf
                    @if (count($members) < 2)
                        <h3>Add Member:</h3>
                        <label for="Full_Name">Full Name</label>
                        <input type="text"
                        class="form-control" name="Full_Name" id="Full_Name" aria-describedby="helpId" placeholder="">

                        <label for="Email">Email</label>
                        <input type="email" class="form-control" name="Email" id="" aria-describedby="emailHelpId" placeholder="">
                        
                        <label class="form-label" for="form3Example1">Date Of Birth</label>
                        <input name="dob" type="date" id="form3Example1" class="form-control">
                        
                        <label for="Phone">Phone Number</label>
                        <input type="text"
                        class="form-control" name="Phone" id="Phone" aria-describedby="helpId" placeholder="">

                        <button type="submit" class="btn btn-primary mt-3">Add Member!</button>

                    @endif
                </form>
            </div>
        </div>
        


    </div>


    
</body>


