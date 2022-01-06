<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
            <a class="nav-link active" aria-current="page" href="index.php"
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

    <!-- New carousel -->
    <div id="myCarousel" class="carousel slide pointer-event" data-interval="3000" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/intern3.jpg"class="bd-placeholder-img" width="100%" alt="img1"><rect width="100%" height="100%" fill="#777"></rect></svg>
  
          <div class="container">
            <div class="carousel-caption text-start">
              <h4>“There is no substitute for hard work!” – Thomas Alva Edison</h4>
              <p><a class="btn btn-primary" href="#">Apply Now!</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/intern1.jpg"class="bd-placeholder-img" width="100%" alt="img1"><rect width="100%" height="100%" fill="#777"></rect></svg>
  
          <div class="container">
            <div class="carousel-caption text-start">
              <h4>“There is no substitute for hard work!” – Thomas Alva Edison</h4>
              <p><a class="btn btn-primary" href="#">Apply Now!</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/intern2.jpg"class="bd-placeholder-img" width="100%" alt="img1"><rect width="100%" height="100%" fill="#777"></rect></svg>
  
          <div class="container">
            <div class="carousel-caption text-start">
              <h4>“There is no substitute for hard work!” – Thomas Alva Edison</h4>
              <p><a class="btn btn-primary" href="#">Apply Now!</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- New features content -->
    <div class="container marketing">
       
      <!-- START THE FEATURETTES -->
  
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7 my-auto">
          <h2 class="featurette-heading ">Our Offering</h2>
          <p class="lead">
            The Institute is delighted to host the numerous companies for internships as well as for fulltime roles belonging to various categories. Our creamy students earn spots in the top brackets of the such companies offering the pay package above 20 LPA.</p>
        </div>
        <div class="col-md-5">
          <img src="images/offering.jpg" alt="facility1" class="featurette-image img-fluid mx-auto" width="500" height="500"><rect width="100%" height="100%" fill="#eee"></rect>
             
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7 order-md-2 my-auto">
          <h2 class="featurette-heading">Quality Assured</h2></h2>
          <p class="lead">The T&P cell has a firm conviction about the inevitable role of the soft skills in the overall development of the budding engineers, regardless of their career choices. We believe that both, technical and soft skills of the students are of paramount importance and play a crucial role in shaping up and achieving the career goals. The T&P cell, thus caters to the to the aspirations and the interests of the students and endeavours to make them professionally well-equipped for their journey from ‘Campus to Corporate’ or as an ‘Entrepreneur’ or for ‘Higher Studies’ or as ‘Civil Servants’. The T&P cell offers career guidance and arranges various training sessions for the students of varied aspirations and abilities and with diversified needs.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="images/quality.jpg" alt="facility2" class="featurette-image img-fluid mx-auto" width="500" height="500"><rect width="100%" height="100%" fill="#eee"></rect>
  
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7 my-auto">
          <h2 class="featurette-heading">Our Team</h2>
            <div class="container">
<div class="heading2 separator">

</div>
<div class="table-responsive">
<table class="table table-striped table-light table-bordered table-hover" style="height: 212px;" width="332">
<thead class="thead-dark">
<tr>
<th>
FACULTY
</th>
<th>
ROLE
</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<strong>Dr Satish Narkhede </strong>
</td>
<td>
TPO,PICT.
</td>
</tr>
<tr>
<td>
<strong>Dr Mousami V. Munot</strong>
</td>
<td>
Assistant TPO
</td>
</tr>
<tr>
<td>
<strong>Mr. Manish R. Jansari</strong>
</td>
<td>
Coordinator,Dept. of CE Engg.
</td>
</tr>
<tr>
<td>
<strong>Dr. Mahesh G. Gangarde</strong>
</td>
<td>
Coordinator,Dept. of E&amp;TC Engg.
</td>
</tr>
<tr>
<td>
<strong>Mr. Hrushikesh J. Joshi</strong>
</td>
<td>
Coordinator,Dept. of IT Engg.
</td>
</tr>
<tr>
<td>
<strong>Mr. Abhishek M. Kulkarni</strong>
</td>
<td>
Coordinator,Dept. of First Year Engg.
</td>
</tr>
</tbody>
</table>
</div>
</div>



                  </div>
        <div class="col-md-5">
          <img src="images/team.jpg" alt="staff1" class="featurette-image img-fluid mx-auto" width="500" height="500"><rect width="100%" height="100%" fill="#eee"></rect>
  
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <!-- /END THE FEATURETTES -->
  
    </div>

    <!-- Testimonials -->
    <section class="text-center my-5 testimonial-section">

  <!-- Section heading -->
  <h1 class="h1-responsive font-weight-bold my-5">Developed by </h1>

  <div class="wrapper-carousel-fix">
    <!-- Carousel Wrapper -->
    <div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide carousel-fade" data-ride="carousel"
      data-interval="2000">
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">
          <div class="testimonial">
            <!--Avatar-->
            <div class="avatar mx-auto mb-4">
              <img src="images/itsme.jpg" class="rounded-circle img-fluid"
                alt="First sample avatar image">
            </div>
            <!--Content-->
            <!-- <p>
              <i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod
              eos
              id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet, consectetur
              adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum inventore laboriosam labore
              sit, aspernatur praesentium iste impedit quidem dolor veniam.
            </p> -->
            <h4 class="font-weight-bold">Shivprasad Komul</h4>
            <h6 class="font-weight-bold my-3">3rd year CSE student at PICT</h6>
            <!--Review-->
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star-half-alt blue-text"> </i>
          </div>
        </div>
        <!--First slide-->
        <!--Second slide-->
        <div class="carousel-item">
          <div class="testimonial">
            <!--Avatar-->
            <div class="avatar mx-auto mb-4">
              <img src="images/profile1.jpg" class="rounded-circle img-fluid"
                alt="Second sample avatar image">
            </div>
            <!--Content-->
            <!-- <p>
              <i class="fas fa-quote-left"></i> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
              odit
              aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
              porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
              non numquam eius modi tempora incidunt ut labore. </p> -->
            <h4 class="font-weight-bold">Abhishek Kulkarni</h4>
            <h6 class="font-weight-bold my-3">3rd year CSE student at PICT</h6>
            <!--Review-->
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
          </div>
        </div>
        <div class="carousel-item">
          <div class="testimonial">
            <!--Avatar-->
            <div class="avatar mx-auto mb-4">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg" class="rounded-circle img-fluid"
                alt="Second sample avatar image">
            </div>
            <!--Content-->
            <!-- <p>
              <i class="fas fa-quote-left"></i> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
              odit
              aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
              porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
              non numquam eius modi tempora incidunt ut labore. </p> -->
            <h4 class="font-weight-bold">kartik Kusmode</h4>
            <h6 class="font-weight-bold my-3">3rd year CSE student at PICT</h6>
            <!--Review-->
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
          </div>
        </div>
        
        <!--Second slide-->
        <!--Third slide-->
        <div class="carousel-item">
          <div class="testimonial">
            <!--Avatar-->
            <div class="avatar mx-auto mb-4">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg" class="rounded-circle img-fluid"
                alt="Third sample avatar image">
            </div>
            <!--Content-->
           <!--  <p>
              <i class="fas fa-quote-left"></i> Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus
              error sit voluptatem accusantium doloremque laudantium.</p> -->
            <h4 class="font-weight-bold">Durgesh Khandel</h4>
            <h6 class="font-weight-bold my-3">3rd year CSE student at PICT</h6>
            <!--Review-->
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="far fa-star blue-text"> </i>
          </div>
        </div>
        <!--Third slide-->
      </div>

      <!--Slides-->
      <!--Controls-->
      <a class="carousel-control-prev left carousel-control" href="#carousel-example-1" role="button"
        data-slide="prev">
        <span class="icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next right carousel-control" href="#carousel-example-1" role="button"
        data-slide="next">
        <span class="icon-next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--Controls-->
    </div>
    <!-- Carousel Wrapper -->
  </div>

    </section>

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
