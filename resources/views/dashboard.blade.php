<?php $data = session()->all(); 
    $leader = Session::get('leaders');
    // echo $leader->Team_Name;
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
                        <h2 class="text-white">WELCOME TEAM {{$leader->Team_Name}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
</body>


