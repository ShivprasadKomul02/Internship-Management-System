<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- Favicon link -->
    <link
      rel="icon"
      href="favicon/favicon.ico"
      sizes="16x16"
      type="image/png"
    />

    <!-- Css files linking -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/styles.css" />
  
  </head>
  <body>
      
    <!-- Top banner with logo and contact -->
    <div class="topbanner container-fluid">
      <div class="row">
        <div class="col-md-4 logo-box my-auto">
          <img
            class="logo"
            src="images/icon.png"
            alt="PICT Interns™ logo"
          />
          <p class="logo-text">PICT Interns™</p>
          <p class="logo-tagline">Industry Internships for every student.</p>

        </div>

        <div class="col-md-8 contacts my-auto">
          <ul class="list-unstyled">
            <li class="list-items">
              <img src="images/email.png" alt="email" />|
              <a href="mailto:enquiry@lactacare.com">enquiry@pict-interns.com</a>
            </li>
            <li class="list-items">
              <img src="images/phone-call.png" alt="phone" />|
              <a href="tel:+919876543219">+919876543219</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Navbar with toggler below md -->
    <nav id="nav1" class="navbar navbar-expand-md sticky-top">
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="text-white">Menu</span>
        <img
          src="images/down-arrow.png"
          style="height: 1.5rem; width: 1.5rem"
          alt=""
        />
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav-fill w-100 me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html"
              >Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutUs.html">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              xyz
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="faqs.html">FAQs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactUs.html">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="customerLogin.php">Student Login</a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="staffLogin.php">Admin Login</a>
          </li>
          
          
        </ul>
      </div>
    </nav>

    <!-- Login Page -->
    <div class="container-fluid login-section">
      <div id="sign-in" >
        <form class="form-signin" action="adminlogin.php" method="post">
          <img
            class="mb-4"
            src="images/user.png"
            alt=""
            width="40"
            height="37"
          />
          <h1 class="h3 mb-3 fw-normal">Sign In</h1>
           <?php if(isset($_GET["error"]))
           {
           ?>

            <div class="alert alert-danger" role="alert">
                <?=$_GET["error"]?>
             </div>
          <?php
          }
        ?>
  
          <div class="form-floating">
            <input
              type="email"
              class="form-control"
              id="floatingInput"
              placeholder="name@example.com"
              name="username"
            />
            <label for="floatingInput">Username</label>
          </div>
          <div class="form-floating">
            <input
              type="password"
              class="form-control"
              id="floatingPassword"
              placeholder="Password"
              name="password"
            />
            <label for="floatingPassword">Password</label>
          </div>

         
          <button class="w-100 btn btn-lg btn-primary my-2" type="submit">
            Sign In
          </button>

          <div class="py-3">
            <a class="form-link" href="forgot-pass.html">Forgot Password?</a>
            <p></p>
            <!-- <a class="form-link" onclick="getSignUp()">New User? Sign Up here</a>
            <p class="mt-5 mb-3 text-muted">© 2017–2021</p> -->
          </div>
        </form>
      </div>
      <!-- Register form -->
      <div id="sign-up" >
        <form class="form-signin">
          <img
            class="mb-4"
            src="/images/user.png"
            alt=""
            width="40"
            height="37"
          />
          <h1 class="h3 mb-3 fw-normal">Register</h1>

          <div class="form-floating">
            <input
              type="email"
              class="form-control"
              id="floatingInput"
              placeholder="name@example.com"
            />
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input
              type="tel"
              class="form-control"
              id="floatingPassword"
              placeholder="Password"
            />
            <label for="floatingPassword">Mobile Number</label>
          </div>
          
          <div class="checkbox my-3">
            <label>
              <input type="checkbox" value="remember-me" /> Remember me
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">
            Sign Up
          </button>

          <div class="py-3">
            <a class="form-link" onclick="getSignUp()">Login</a>
            
            <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
          </div>
        </form>
      </div>
    </div>

    <!-- Footer -->
    <footer>
      <div class="bottombanner container-fluid">
        <div class="row">
          <div class="col-md-4 logo-box my-auto">
            <span class="text-white" style="font-size: 20px">PICT Interns™</span>
            <span style="margin-left: 2px; margin-right: 2px">|</span>
            <span>Striving for a better tomorrow.</span>
          </div>

          <div class="col-md-8 social-icons">
            <ul class="list-unstyled my-auto">
              <li class="social-icon">
                <a href="http://www.facebook.com"
                  ><img src="images/facebook.png" alt="fb"
                /></a>
              </li>
              <li class="social-icon">
                <a href="http://www.twitter.com"
                  ><img src="images/twitter.png" alt="twt"
                /></a>
              </li>
              <li class="social-icon">
                <a href="http://www.instagram.com"
                  ><img src="images/instagram.png" alt="insta"
                /></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>


    <!-- Javascript links -->
    <script src="js/index.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
