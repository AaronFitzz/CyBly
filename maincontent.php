<!DOCTYPE html>
<?php
  session_start();
  if($_SESSION['mail'] == null){
    echo "<script>window.open('index.php','_self')</script>";
  }
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CyBly</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/creative.css" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="nav-item" style="max-width:50%;" href="#page-top"><img id="NavLogo" style="float:left;"src="img/CyBlyLogo.png"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#signInPlace"><?php echo "Welcome " . $_SESSION['mail'] . "";?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#tool">Download Tool</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#questionnaire">Questionnaire</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#data">Data Visualisation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" onclick="confirmBeforeLogout();" >Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h1 class="text-uppercase">
            <strong>Lets tackle Cyber Bullying</strong>
          </h1>
          <hr>
        </div>
        <div class="col-lg-8 mx-auto">
          <p class="text-faded mb-5">CyBly is an online portal providing tools to gain insights on instances on Cyber Bullying and helps direct victims to the necessary resources</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#signIn">Find Out More</a>
          <a href="https://play.google.com/store" target="_blank"><img href="https://play.google.com/store" style="width:230px"src="img/google_play.png"></a>
        </div>
      </div>
    </div>
  </header>

  <section class="bg-primary" id="signInDetail">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mx-auto text-center">
          <h2 class="section-heading text-white">Sign In</h2>
          <hr class="light my-4">
          <form id="signInForm" action='login.php' method='get'>
            <input type="text" placeholder="Username/Email" class="form-control" id="usernameEmail" name='emailuser'><br>
            <input type="password" placeholder="Password" class="form-control" id="password" name="password"><br>
            <a class="btn btn-light btn-xl js-scroll-trigger" id="signInBtnPlace">Sign In</a>
            <input type="submit">
          </form>
        </div>
        <div class="col-lg-6 mx-auto text-center">
          <h2 class="section-heading text-white">Register</h2>
          <hr class="light my-4">
          <form id="registerForm" action='registration.php' method='post' >
            <input type="text" placeholder="Username" class="form-control" name="username"><br>
            <input type="email" placeholder="Email" class="form-control"name="email"><br>
            <input type="password" placeholder="Password" class="form-control" name="password"><br>
            <input type="password" placeholder="Confirm Password" class="form-control" name="confirmPassword"><br>
            <a class="btn btn-light btn-xl js-scroll-trigger" id="registerBtnPlace" name="submit">Register</a>
            <input type="submit">
          </form>
        </div>
      </div>
    </div>
  </section>

  <!--can remove if register working okay-->

  <!--<section class="bg-primary" id="registerDetail">-->
  <!--  <div class="container">-->
  <!--    <div class="row">-->
  <!--      <div class="col-lg-8 mx-auto text-center">-->
  <!--        <h2 class="section-heading text-white">Register</h2>-->
  <!--        <hr class="light my-4">-->
  <!--    			<input type="text" placeholder="Username"><br>-->
  <!--    			<input type="email" placeholder="Email"><br>-->
  <!--    			<input type="password" placeholder="Password"><br>-->
  <!--    			<input type="password" placeholder="Confirm Password"><br>-->
  <!--        <a class="btn btn-light btn-xl js-scroll-trigger" id="registerBtnPlace">Register</a>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</section>-->

  <section class="bg-dark text-white" id="tool">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading text-white">Text Analysation Tool</h2>
          <hr class="light my-4">
          <p class="text-faded mb-4">Download this tool to analyse any text for the likelihood of cyber bullying. A measurement is given based on the presence of offensive material and if it is aimed at an individual or group.</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#contact">Download Now</a>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-primary" id="questionnaire">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading text-white">Take A Questionnaire</h2>
          <hr class="light my-4">
          <p class="text-faded mb-4">Contribute your experience and help the community understand patterns in Cyber Bullying</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#contact">Start</a>
        </div>
      </div>
    </div>
  </section>

  <section class="p-0" id="data">
    <div class="container-fluid p-0">
      <div class="row no-gutters popup-gallery">
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/chart1.png">
              <img class="img-fluid" src="img/chart1.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Data
                  </div>
                  <div class="project-name">
                    Visualisation
                  </div>
                </div>
              </div>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/chart2.png">
              <img class="img-fluid" src="img/chart2.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Data
                  </div>
                  <div class="project-name">
                    Visualisation
                  </div>
                </div>
              </div>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/chart3.png">
              <img class="img-fluid" src="img/chart3.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Data
                  </div>
                  <div class="project-name">
                    Visualisation
                  </div>
                </div>
              </div>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/chart4.png">
              <img class="img-fluid" src="img/chart4.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Data
                  </div>
                  <div class="project-name">
                    Visualisation
                  </div>
                </div>
              </div>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/chart5.png">
              <img class="img-fluid" src="img/chart5.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Data
                  </div>
                  <div class="project-name">
                    Visualisation
                  </div>
                </div>
              </div>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/chart6.png">
              <img class="img-fluid" src="img/chart6.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Data
                  </div>
                  <div class="project-name">
                    Visualisation
                  </div>
                </div>
              </div>
            </a>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading">Let's Get In Touch!</h2>
          <hr class="my-4">
          <p class="mb-5">If you have any questions please get in touch using one of the methods below.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center">
          <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
          <p>123-456-6789</p>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
          <p>
            <a href="mailto:your-email@your-domain.com">demo@CyBly.com</a>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom js/jquery scripts-->
  <script src="js/creative.js"></script>
  <script src="js/cybly.js"></script>

</body>

</html>
