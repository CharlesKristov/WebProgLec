
<body>
    <div class="top">
        @extends('layout.app')
    </div>
    
    <div class="dashboard-bg content-top text-black d-flex flex-column justify-content-center">
        <div class="container mt-5">
            <h1 class = "mt-5 text-white">Teams registered: </h1>
                <div class="row row-cols-md-2">
                @foreach ($leader as $l)
                    <div class="col-md-4 mt-4">   
                        <div class="card text-center h-80" style = "width: 20rem">
                            <div class="card-body">
                                <h3 class="card-title">{{ $l->Team_Name }}</h3>
                                <hr>     
                                <ul class = "list-group list-group-flush">
                                    <li class="h5 list-group-item">{{$l->Full_Name}} </li>
                                    @foreach($l->members as $m)
                                        <li class="h5 list-group-item">{{$m->Full_Name}} </li>
                                    @endforeach
                                </ul>   
                                <div class="card-footer d-flex  justify-content-between p-2" style="background:#FFFFFF">
                                    <a href ="#" class = "btn btn-primary me-2">View</a>
                                    <a href ="#" class = "btn btn-success me-2">Verify</a>
                                </div>
                            </div>
                        </div>  
                    </div>
                    @endforeach
                    
                   
                </div>



        </div>

    
        <br><br><br>


    </div>


    
</body>


