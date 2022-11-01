
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/style.css')}}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body class="background-radial-gradient overflow-hidden">

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

            <form action="">
                <h1 class="logintitle"> Login Now </h1>
              <!-- 2 column grid layout with text inputs for the first and last names -->

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control" placeholder="Enter email address"/>
                <label class="form-label" for="form3Example3">Email address</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control" placeholder="Enter password"/>
                <label class="form-label" for="form3Example4">Password</label>
              </div>

              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
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
                    forgot password?
                </a>
                <a href="" class="Regis">
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
</html>

<!-- Section: Design Block -->