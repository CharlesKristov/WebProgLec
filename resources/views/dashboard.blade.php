<?php 


    $data = session()->all(); 

    if (session()->has('leaders')) {
    $leaderSession = Session::get('leaders');
    //
    // dd($leaderSession->Team_Name);
    $leader = DB::table('leaders')
                ->where('Team_Name', '=', $leaderSession->Team_Name)
                ->get()->first();
                // dd($leader);
    // echo $leader->Team_Name;
    $members = DB::table('leaders')
            ->join('members', 'leaders.Full_Name', '=', 'members.Leader_Name')
            ->where('leaders.Full_Name', '=', $leader->Full_Name)
            ->get();
    }
    else {
        // return redirect()->route('home');
        return redirect()->to('/')->send();

    }

    // dd($members);
    // $count = count($members);
    // dd($count);
?>  

<body>
    <div class="top">
        @extends('usernavbar')
    </div>
    
    <div class="content-top w-100">
        <div class="bg-black d-flex justify-content-center align-items-center p-5 w-100">
            <div class="titleQ">
                <div class="contentTitle">
                    <div class="aboutUsTitle p-5">
                        <h2 class="text-white">HI TEAM {{$leader->Team_Name}} !</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-flex justify-content-center align-items-start flex-column">
            <h2 class="">Current Competition:
                @if ($leader->Competition==null)
                -
                @else
                {{ $leader->Competition }}
                @endif
            </h2>
            
            <h2 class="">Leader: {{$leader->Full_Name}}</h2>
            <hr>
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
                
                <form action="" method="post">
                    @if (count($members) < 2)
                        
                        <h3>Add Member:</h3>
                        
                        <label for="Full_Name">Full Name</label>
                        <input type="text"
                        class="form-control" name="Full_Name" id="Full_Name" aria-describedby="helpId" placeholder="">

                        <label for="Leader_Name">Leader Name</label>
                        <input type="text"
                        class="form-control" name="Leader_Name" id="Leader_Name" aria-describedby="helpId" placeholder="">
                        
                        <label for="Email">Email</label>
                        <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
                        
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


