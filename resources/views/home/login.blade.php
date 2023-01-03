@extends('layout.app')
@section('title', 'Login')

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

            <form method="POST" action="{{Route('login')}}" >
              @csrf
                    <h1 class="logintitle"> Login Now </h1>
                  <!-- 2 column grid layout with text inputs for the first and last names -->

                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input name="email" type="email" id="form3Example3" class="form-control @error('email')
                    is-invalid
                    @enderror" placeholder="Enter email address" required value="{{ old('email') }}">
                    <label class="form-label" for="form3Example3">Email address</label>
                    @error('email')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                    @enderror
                  </div>

                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input name="password" type="password" id="form3Example4" class="form-control  @error('password')
                    is-invalid
                @enderror" placeholder="Enter password">
                <label class="form-label" for="form3Example4">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
              </div>

              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input me-2" type="checkbox" value="rem" id="rem" name="rem">
                <div class="form-check-text">
                    <label class="form-check-label" for="form2Example33">
                        Remember me
                      </label>
                </div>
              </div>

              <!-- Submit button -->
              <div class="loginbtn">
                <button type="submit" class="btn btn-primary btn-block mb-4">
                    Login
                  </button>
              </div>

              <div class="forgotandregis">
                <a href="" class="forgot">
                    Forgot Password?
                </a>
                <a href="{{Route('registerPage')}}" class="Regis">
                    Don't have an account?
                </a>
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

