<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>PerfectMatch</title>

  <style media="screen">
  html {
    scroll-behavior: smooth;
  }

  #myBtn {
display: none;
position: fixed;
bottom: 20px;
right: 30px;
z-index: 99;
font-size: 18px;
border: none;
outline: none;
background-color: #ff4646;
color: white;
cursor: pointer;
padding: 15px;
border-radius: 4px;
}

#myBtn:hover {
background-color:  #ff847c;
}
  </style>

  <!-- Googlefonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Russo+One&family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pirata+One&display=swap" rel="stylesheet">
</head>
<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- CSS -->
<link rel="stylesheet" href="css/styles.css">

<!-- fontawesome -->
<script src="https://kit.fontawesome.com/a2f85f9251.js" crossorigin="anonymous"></script>

<!-- jQuery and script -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


  <section id="title">
    <div class="container-fluid">



      <!-- Nav Bar -->

      <nav class="navbar   navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="">Swayamvar<i class="fas fa-fire"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#footer">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pricing">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#cta">Download</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Log Out</a>
            </li>
          </ul>
        </div>
      </nav>



      <!-- Title -->
      <div class="row">


        <div class="col-lg-6 col-md-12">
          <h1>We bring people together. Love unites them....</h1>
          <a href="https://apps.apple.com/in/app/tinder-dating-meet-people/id547702041" class="btn btn-dark btn-lg download-button btn-info" role="button"><i class="fab fa-apple"></i> Download</a>
          <!-- <button type="button" class="btn btn-dark btn-lg download-button"><i class="fab fa-apple"></i> Download</button> -->

          <!-- <button type="button"></button> -->
          <button onclick="myfunc()" type="button" class="btn btn-outline-light btn-lg download-button"><i class="fab fa-google-play"></i> Download</button>

        </div>
        <div class="col-lg-6 col-md-12">
          <img class="title-img" src="images/couple2.jpg" alt="iphone-mockup">
        </div>

      </div>

    </div>

  </section>


  <!-- Features -->

  <section id="features">
    <div class="row">
      <div class="feature-box col-lg-4">
        <i class="icon fas fa-check-circle fa-4x"></i>
        <h3>Easy to use.</h3>
        <p>Find your Special Someone.</p>

      </div>
      <div class="feature-box col-lg-4">
        <i class="icon fas fa-bullseye fa-4x"></i>
        <h3>Elite Clientele</h3>
        <p>Become a Premium Member & Start a Conversation.</p>
      </div>
      <div class="feature-box col-lg-4">
        <i class="icon fas fa-heart fa-4x"></i>
        <h3>Guaranteed to work.</h3>
        <p>Your story is waiting to happen!</p>
      </div>
    </div>


  </section>

  <!-- Testimonials -->

  <section id="testimonials">

    <div id="testimonial-corousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active">

          <h2>Love is only essence of our relationship.</h2>
          <img class="testimonial-img" src="images/couple 5.jpg" alt="dog-profile">
          <em>Bengalore ,Karnataka</em>

        </div>
        <div class="carousel-item">
          <h2 class="testimonial-text">YOU and ME together and forever!.</h2>
          <img class="testimonial-img" src="images/couple.jpg" alt="lady-profile">
          <em>Amritsar, Punjab</em>

        </div>

        <div class="carousel-item">
          <h2 class="testimonial-text">Finally, I got the opportunity to change my last name.</h2>
          <img class="testimonial-img" src="images/couple6.jpg" alt="lady-profile">
          <em>Manjeshwar, Kerala</em>

        </div>

      </div>
      <a class="carousel-control-prev" href="#testimonial-corousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>

      </a>
      <a class="carousel-control-next" href="#testimonial-corousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>

      </a>
    </div>




  </section>


  <!-- Press -->

  <section id="press">
    <img class="press-logo" src="images/techcrunch.png" alt="tc-logo">
    <img class="press-logo" src="images/tnw.png" alt="tnw-logo">
    <img class="press-logo" src="images/bizinsider.png" alt="biz-insider-logo">
    <img class="press-logo" src="images/mashable.png" alt="mashable-logo">

  </section>


  <!-- Pricing -->

  <section id="pricing">

    <h2>A Plan for Every Perfect Couple !</h2>
    <p>Simple and affordable price plans for you and your soulmate.</p>

    <div class="row">

      <div class="pricing-column col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Free</h3>
          </div>
          <div class="card-body">
            <h2>Free</h2>
            <p>5 Matches Per Day</p>
            <p>10 Messages Per Day</p>
            <p>Unlimited App Usage</p>
            <br>
            <br>
            <a href="subscribe.php" class="btn btn-lg btn-block btn-outline-dark btn-info" role="button">Subscribe</a>
            <!-- <button href="C:\Users\mally\OneDrive\Desktop\myfiles\Bootstrap\TinDog-Start-master\index2.html" class="btn btn-lg btn-block btn-outline-dark" type="button">Sign Up</button> -->
          </div>

        </div>

      </div>

      <div class="pricing-column col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Gold</h3>
          </div>
          <div class="card-body">
            <h2>???549 / mo</h2>
            <p>Unlimited Matches</p>
            <p>Unlimited Messages</p>
            <p>Unlimited App Usage</p>
            <br>
            <br>
            <button class="btn btn-lg btn-block btn-dark" type="button">Subscribe</button>
          </div>

        </div>

      </div>




      <div class="pricing-column col-lg-4 col-md-12">
        <div class="card">
          <div class="card-header">
            <h3>Platinum</h3>
          </div>
          <div class="card-body">
            <h2>???999 / mo</h2>
            <p>Pirority Listing</p>
            <p>Unlimited Matches</p>
            <p>Unlimited Messages</p>
            <p>Unlimited App Usage</p>
            <button class="btn btn-lg btn-block btn-dark" type="button">Subscribe</button>
          </div>

        </div>
      </div>

      </div>



  </section>


  <!-- Call to Action -->

  <section id="cta">

    <h3 class="cta-heading">Find the True Love of Your Life Today.</h3>
    <!-- <button class="download-button btn btn-lg btn-dark" type="button"><i class="fab fa-apple"></i> Download</button> -->
    <!-- <button class="download-button btn btn-lg btn-dark" type="button"><i class="fab fa-google-play"></i> Download</button> -->
    <a href="https://apps.apple.com/in/app/tinder-dating-meet-people/id547702041" class="btn btn-dark btn-lg download-button btn-info" role="button"><i class="fab fa-apple"></i> Download</a>
    <button onclick="myfunc()" type="button" class="btn btn-outline-light btn-lg download-button"><i class="fab fa-google-play"></i> Download</button>

  </section>

  <div class="dropdown-menu">
  <form class="px-4 py-3">
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck">
        <label class="form-check-label" for="dropdownCheck">
          Remember me
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#">New around here? Sign up</a>
  <a class="dropdown-item" href="#">Forgot password?</a>
</div>


  <!-- Footer -->

  <footer id="footer">
    <a href="https://www.shaadi.com/" title="website name"><i class="social-icon fab fa-facebook"></i></a>
    <a href="https://play.google.com/store/apps/details?id=com.tinder&hl=en_IN&gl=US" title="website name"><i class="social-icon fab fa-twitter"></i></a>
    <a href="https://play.google.com/store/apps/details?id=com.tinder&hl=en_IN&gl=US" title="website name"><i class="social-icon fab fa-instagram"></i></a>
    <a href="https://play.google.com/store/apps/details?id=com.tinder&hl=en_IN&gl=US" title="website name"><i class="social-icon fas fa-envelope"></i></a>

    <p>?? Copyright 2021 Swayamvar</p>

  </footer>

  <script>
    // <!-- download button part -->
function myfunc() {
  location.replace("https://play.google.com/store/apps/details?id=com.tinder&hl=en_IN&gl=US")}

// <!-- top button part -->
  var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


</script>


</body>



</html>
