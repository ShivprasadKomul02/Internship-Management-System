<?php 
include "session.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PICT Interns™</title>
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
    <link rel="stylesheet" href="css/stylesnew.css" />
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
              <a class="nav-link active" aria-current="page" href="admin-dash.php"
                >Dashboard
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="createInternship.php">New Internship</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="activeInternship.php">Active Internships</a>
            </li class="nav-item">
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                  Profile
                  <img src="images/user.png" alt="dashboard menu">
              </a>
                
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                  <div class="offcanvas-header">
                    <h3 class="offcanvas-title" id="offcanvasExampleLabel">PICT Interns</h3>
                    <button type="button" style="margin-right: 0px;" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                 <div class="offcanvas-body">
                 
                  <ul class="menu-list" style="font-size: 20px"> 
                      <li><img src="images/user.png" alt="Profile-pic"></li>
                      <li style="font-size: 25px"><a href="#"><?php echo "$session_id"; ?></a></li><hr>
                      <li><a href="admin-dash.php">Home</a></li><hr>
                      <li><a href="#">About</a></li><hr>
                      <li><a href="logout.php">Logout</a></li>
                  </ul>
                  
                </div>
                </div>
            </li>
            
          </ul>
        </div>
      </nav>


    <div id="sign-up" >
      <form class="form-signin" action="addinternship.php" method="post">
        <img
          class="mb-4"
          src="images/user.png"
          alt=""
          width="40"
          height="37"
        />
        <h1 class="h3 mb-3 fw-normal">Create New Internship</h1>
        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            placeholder="xyz"
            name="jobid"
          />
          <label for="floatingPassword">Job ID</label>
        </div>
        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            placeholder="xyz"
            name="jobname"
          />
          <label for="floatingPassword">Job Role</label>
        </div>
        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            placeholder="xyz"
            name="companyname"
          />
          <label for="floatingInput">Company</label>
        </div>
        <div class="form-floating">
          <input
            type="text";
            class="form-control"
            placeholder="xyz"
            name="location" 
          />
          <label for="floatingPassword">Location</label>
        </div>
        <div class="form-floating">
          <input
            type="integer"
            class="form-control"
            placeholder="xyz"
            name="duration"
          />
          <label for="floatingPassword">Duration In Months</label>
        </div>
        <div class="form-floating">
          <input
            type="integer"
            class="form-control"
            placeholder="xyz"
            name="stipend"
          />
          <label for="floatingPassword">Stipend per Month</label>
        </div>
        <div class="form-floating">
          <input
            type="datetime-local" 
            class="form-control"
            placeholder="xyz"
            name="lastdate"
          />
          <label for="floatingPassword">Last Date to Apply</label>
        </div>
        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            placeholder="xyz"
            name="cgpa"
          />
          <label for="floatingPassword">Min CGPA</label>
        </div>
        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            placeholder="xyz"
            name="passingyear"
          />
          <label for="floatingPassword">Passing Year</label>
        </div>
        <div class="form-floating">
         <textarea rows = "5" cols = "60" name = "description" class="form-control">
            
         </textarea><br>
          <label for="floatingPassword">Description </label>
        </div>


        <button class="w-100 btn btn-lg btn-primary" type="submit">
          Create
        </button>

        <div class="py-3">          
          <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
        </div>
      </form>
    </div>


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