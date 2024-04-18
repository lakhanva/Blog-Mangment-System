<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>loginform</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <style>
    .bg-image-vertical {
      position: relative;
      overflow: hidden;
      background-repeat: no-repeat;
      background-position: right center;
      background-size: auto 100%;
    }

    @media (min-width: 1025px) {
      .h-custom-2 {
        height: 100%;
      }
    }
  </style>
</head>

<body>
  <section class="vh-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 text-black">


          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

            <form style="width: 23rem;" action="post/post.php" method="post">

              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

              <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="form2Example18" class="form-control form-control-lg" name="username" required/>
                <label class="form-label" for="form2Example18">User name</label>
              </div>

              <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form2Example28" class="form-control form-control-lg" name="password" />
                <label class="form-label" for="form2Example28">Password</label>
              </div>

              <div class="pt-1 mb-4">
                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-lg btn-block" type="submit" name="loginBtn">Login</button>
              </div>


            </form>

          </div>

        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="assets/images/img3.webp" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>
      </div>
    </div>
  </section>
</body>

</html>