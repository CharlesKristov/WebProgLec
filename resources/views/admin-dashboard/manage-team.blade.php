
<body>
    <div class="top">
        @extends('layout.app')
    </div>
    
    <div class="dashboard-bg content-top text-black d-flex flex-column justify-content-center h-100">
        <div class="container h-100 mt-5 p-5">
            <h1 class = "mt-5 text-white">Manage members</h1>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
               
                @foreach ($leader as $l)
                    <div class="col mt-3">   
                        <div class="card text-center h-80" style = "width: 20rem">
                            <div class="card-body">
                                <h3 class="card-title">{{ $l->Team_Name }}</h3>
                                <hr>     
                                <ul class = "list-group list-group-flush">
                                    <li class="h5 list-group-item">{{$l->Full_Name}} </li>
                                    @foreach($l->members as $m)
                                    <li class="h5 list-group-item">{{$m->Full_Name}} </li>
                                    @endforeach
                                    @if($l->members->count() == 0)
                                    <li class="h5 list-group-item">(no member 1)</li>
                                    <li class="h5 list-group-item">(no member 2)</li>
                                    @endif
                                    @if($l->members->count() == 1)
                                        <li class="h5 list-group-item">(no member 2)</li>
                                    @endif
                                </ul>   
                                <div class="card-footer d-flex  justify-content-between p-2" style="background:#FFFFFF">
                                    <a href ="{{ route('view-update', ['id' => $l->id]) }}" class = "btn btn-primary me-2">Update</a>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#{{ $l->Team_Name }}StatiVerify">
                                        Delete
                                    </button>
                                </div>
                            </div>
                         

                            <!--Verify Modal -->
                            <div class="modal fade" id="{{ $l->Team_Name }}StatiVerify" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Are You Sure Want To Delete This Team?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                                        @csrf 
                                        <button type="submit" class="btn">
                                            <a href ="{{ route('destroy-member', ['id' => $l->id] ) }}" class = "btn btn-danger me-2">Delete</a>
                                        </button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>

                     
                    </div>
                  
                    @endforeach
                </div>
                <div class="pagination-container d-flex justify-content-between mt-4">
                    <div class="d-flex align-items-center">
                        <p class="text-white mb-0">
                            Showing <b class="">{{$leader->firstItem()}}</b> to <b class="">{{$leader->lastItem()}}</b> of <b class="">{{$leader->total()}}</b> results
                        </p>
                    </div>
                    <div class="d-flex">
                        {{$leader->links()}}
                    </div>
                </div>
                



        </div>

    
        <br><br><br>


    </div>


    
</body>


