@extends('layout.app')
@section('title', 'Register')

<body class="background-radial-gradient">
  @section('main-content')
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">

      <div class="col-lg-6 mb-5 mb-lg-5 position-relative" id="circleandform">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">

            <form method="POST" action="{{Route('update')}}" enctype="multipart/form-data">
                @csrf
                <h1 class="logintitle"> Update Leader </h1>
              <!-- 2 column grid layout with text inputs for the first and last names -->

              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input name="fullname" type="text" id="form3Example1" class="form-control @error('fullname')
                        is-invalid
                    @enderror " required value="{{ old('fullname') }}">
                    <label class="form-label" for="form3Example1">Full Name</label>
                    @error('fullname')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input name="id" type="file" id="form3Example1" class="form-control @error('id')
                        is-invalid
                        @enderror" required value="{{ old('id') }}">
                        <label class="form-label" for="form3Example1">ID Card</label>
                        @error('id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                </div>
              </div>


              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input name="password" type="password" id="form3Example1" class="form-control  @error('password')
                    is-invalid
                    @enderror" >
                    <label class="form-label" for="form3Example1">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input name="password_confirmation" type="password" id="form3Example2" class="form-control @error('password_confirmation')
                    is-invalid
                    @enderror">
                    <label class="form-label" for="form3Example2">Confirm Password</label>
                    @error('confirm_password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input name="dob" type="date" id="form3Example1" class="form-control @error('dob')
                    is-invalid
                    @enderror" required value="{{ old('dob') }}">
                    <label class="form-label" for="form3Example1">Date Of Birth</label>
                    @error('dob')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-outline">
                    <input name="phone" type="text" id="form3Example2" class="form-control @error('phone')
                    is-invalid
                    @enderror" required value="{{ old('phone') }}">
                    <label class="form-label" for="form3Example2">Phone Number</label>
                    @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                </div>
              </div>

              <!-- Submit button -->
              <div class="loginbtn">
                <button type="submit" class="btn btn-primary btn-block mb-4">
                    Update
                  </button>
              </div>


              <!-- Register buttons -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
</body>
