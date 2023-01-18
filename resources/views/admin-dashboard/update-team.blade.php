
<body>
    <div class="top">
        @extends('layout.app')
    </div>
    
    <div class="dashboard-bg content-top text-black d-flex flex-column justify-content-center h-auto">
        <div class="container mt-5 h-100 p-5">
            <h2 class = "mt-5 text-white">Update data</h2>
            <h4 class = "mt-5 text-white">Team data</h4>
            <form class>
                <div class="row mb-3">
                    <label class = "col-sm-2 col-form-label text-white"for="">Name</label>
                    <div class="col-sm-10">
                        <input disabled type="text" name = "leader" class="form-control" value ="{{ $leader->Team_Name }}"></input>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class = "col-sm-2 col-form-label text-white"for="">Payment Status</label>
                    <div class="col-sm-10">
                        <input disabled type="text" name = "leader" class="form-control" value ="{{ $leader->Payment_Status }}"></input>
                    </div>
                </div>
            </form>
            <!-- update team -->
            <a href = "#" class = "btn btn-primary">Update</a>

            <h4 class = "mt-5 text-white">Leader data</h4>
            <form class>
                <div class="row mb-3">
                    <label class = "col-sm-2 col-form-label text-white"for="">Full Name</label>
                    <div class="col-sm-10">
                        <input disabled type="text" name = "leader" class="form-control" value ="{{ $leader->Full_Name }}"></input>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class = "col-sm-2 col-form-label text-white"for="">Email</label>
                    <div class="col-sm-10">
                        <input disabled type="text" name = "leader" class="form-control" value ="{{ $leader->email}}"></input>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class = "col-sm-2 col-form-label text-white"for="">DOB</label>
                    <div class="col-sm-10">
                        <input disabled type="text" name = "leader" class="form-control" value ="{{ $leader->DOB }}"></input>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class = "col-sm-2 col-form-label text-white"for="">Phone</label>
                    <div class="col-sm-10">
                        <input disabled type="text" name = "leader" class="form-control" value ="{{ $leader->Phone }}"></input>
                    </div>
                </div>
            </form>
            @if($leader->members->count() == 0)
            <h4 class = "mt-5 text-white">No Members yet </h4>
            @endif
            @foreach($leader->members as $member)
            <div class="container h-auto">
                <h4 class = "mt-5 text-white">Member data</h4>
                <form class action ="{{ Route('update-member', ['id' => $member->id] ) }}"  method = "POST">
                    @method('patch')
                    @csrf 
                    <div class="row mb-3">
                        <label class = "col-sm-2 col-form-label text-white"for="">Full Name</label>
                        <div class="col-sm-10">
                            <input type="text" name = "Full_Name" class="form-control" value ="{{ $member->Full_Name}}"></input>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class = "col-sm-2 col-form-label text-white"for="">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name = "Email" class="form-control" value ="{{ $member->Email}}"></input>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class = "col-sm-2 col-form-label text-white"for="">DOB</label>
                        <div class="col-sm-10">
                            <input type="text" name = "DOB" class="form-control" value ="{{ $member->DOB}}"></input>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class = "col-sm-2 col-form-label text-white"for="">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" name = "Phone" class="form-control" value ="{{ $member->Phone}}"></input>
                        </div>
                    </div>
                    <button type ="submit" class ="btn btn-primary">Submit</button>
                </form>
            </div>
            @endforeach
            

        </div>

    
        <br><br><br>


    </div>


    
</body>


