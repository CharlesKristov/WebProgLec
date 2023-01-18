@extends('layout.app')
@section('title', 'Reset')

@section('main-content')


<body class="background-radial-gradient">
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <div class="logoimage">
            <img src="{{asset('images/Logo.png')}}" alt="" class="Logo">
        </div>
      </div>
      <div class="col-lg-6 mb-5 mb-lg-0 position-relative" id="circleandform">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">

            <form method="POST" action="{{Route('reset')}}" >
              @csrf
                    <h1 class="logintitle"> Change Password </h1>
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <input type="hidden" name="token" value="{{ $token }}">
                  <!-- Email input -->
                  {{-- <div class="form-outline mb-4">
                    <input name="email" type="email" id="form3Example3" class="form-control @error('email')
                    is-invalid
                    @enderror" placeholder="Enter email address" required value="{{ Auth::user()->email }}" readonly>
                    <label class="form-label" for="form3Example3">Email address</label>
                    @error('email')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                    @enderror
                  </div> --}}
                  <div class="form-outline mb-4">
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
              <!-- Submit button -->
              <div class="loginbtn">
                <button type="submit" class="btn btn-primary btn-block mb-4">
                    Confirm Change
                  </button>
              </div>


              <!-- Register buttons -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection
