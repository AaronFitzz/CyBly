<!DOCTYPE html>
<?php
  session_start();
  //if not signes in, send back to index.
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

  <!-- Custom styles -->
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
      <div class="collapse navbar-collapse" style="width:250%;" d="navbarResponsive">
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

  <section class="bg-dark text-white" id="tool">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mx-auto text-center">
          <h2 class="section-heading text-white">Text Analysation Tool</h2>
          <hr class="light my-4">
          <p class="text-faded mb-4">Download this tool to analyse any text for the likelihood of cyber bullying. A indication is given based on the presence of offensive material and if it is aimed at an individual or group. (PC Only)</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="analyser/TextAnalyserTool.exe">Download Now</a>
        </div>
        <div class="col-lg-4 mx-auto text-center">
          <h2 class="section-heading text-white">Text Analysation Tool Instructions</h2>
          <hr class="light my-4">
          <p class="text-faded mb-4">Add some screenshots and basic instructions.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-primary" id="questionnaire">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mx-auto text-center">
          <h2 class="section-heading text-white">Take A Questionnaire</h2>
          <hr class="light my-4">
          <p class="text-faded mb-4">Contribute your experience and help the community understand patterns in Cyber Bullying</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#contact">Start</a>
        </div>
        <div class="col-lg-4 mx-auto text-center">
          <h2 class="section-heading text-white">Take the 30 second challenge!</h2>
          <hr class="light my-4">
          <p class="text-faded mb-4">Learn about cyber bullying and answer questions to show your knowledge.</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" id="challengeBtn" >Start</a>
        </div>
      </div>
    </div>
  </section>
  <script>
    window.onload = function hideChal() {
    document.getElementById("challenge").style.display = "none";
    document.getElementById("challengeQ").style.display = "none";
}
  </script>
  <div class="bg-primary" id="challenge">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading text-white">Remember as much as you can!</h2>
          <div id="rounded-timer"><h1 class="text-white" id = "timer">30</h1></div>
          <hr class="light my-4">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 mx-auto text-center">
            <p class="text-white"><li class="text-white">70% of students report witnessing bullying online</li></p>
        </div>
        <div class="col-lg-4 mx-auto text-center">
            <p class="text-white"><li class="text-white">80% of teenagers use mobile phones, making it the increasing number 1 medium for cyber bullying</li></p>
        </div>
        <div class="col-lg-4 mx-auto text-center">
            <p class="text-white"><li class="text-white">Only 1 in 10 victims of cyber bullying tell a parent or trusted adult of the event</li></p>
        </div>
        <div class="col-lg-4 mx-auto text-center">
            <p class="text-white"><li class="text-white">Girls are almost twice as likely to be the victim of cyber bullying</li></p>
        </div>
        <div class="col-lg-4 mx-auto text-center">
            <p class="text-white"><li class="text-white">One in ten adults say they have been bullied online</li></p>
        </div>
        <div class="col-lg-4 mx-auto text-center">
            <p class="text-white"><li class="text-white">Facebook is home to the most cases of cyber bullying</li></p>
        </div>
        <div class="col-lg-4 mx-auto text-center">
            <p class="text-white"><li class="text-white">Unfriending the bully is the most common action taken by victims</li></p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="bg-primary" id="challengeQ">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading text-white">Answer some questions</h2>
          <hr class="light my-4">
          <form id="factsForm" action='somephpform' method='post'>
            <h3 class="text-white">What % of students witnessed bullying online?</h3>
            <div class="text-white col-lg-3 mx-auto text-center">
              10 <input type="radio"id="q1a" name="q1" value="10">
            </div>
            <div class="text-white col-lg-3 mx-auto text-center">
              30 <input type="radio" id="q1b" name="q1" value="30">
            </div>
            <div class="text-white col-lg-3 mx-auto text-center">
              70 <input type="radio" id="q1c" name="q1" value="70">
              </div>
            <div class="text-white col-lg-3 mx-auto text-center">
              90 <input type="radio"  id="q1d" name="q1" value="90">
            </div>
            
            <hr class="light my-4">
            
            <h3 class="text-white">What is the primary medium for cyber bullying?</h3>
            <div class="text-white col-lg-3 mx-auto text-center">
              Mobile Phones <input type="radio" id="q2a" name="q2" value="mobile">
            </div>
            <div class="text-white col-lg-3 mx-auto text-center">
              Desktops <input type="radio" id="q2b" name="q2" value="desktop">
            </div>
            <div class="text-white col-lg-3 mx-auto text-center">
              Games Consoles <input type="radio" id="q2c" name="q2" value="console">
            </div>
            
            <hr class="light my-4">
            
            <h3 class="text-white">How many victims report cyber bullying to a parent or trusted adult?</h3>
            <div class="text-white col-lg-3 mx-auto text-center">
              5 in 10 <input type="radio"id="q3a" name="q3" value="5in10">
            </div>
            <div class="text-white col-lg-3 mx-auto text-center">
              7 in 10 <input type="radio" id="q3b" name="q3" value="7in10">
            </div>
            <div class="text-white col-lg-3 mx-auto text-center">
              3 in 10 <input type="radio" id="q3c" name="q3" value="3in10">
              </div>
            <div class="text-white col-lg-3 mx-auto text-center">
              1 in 10 <input type="radio"  id="q3d" name="q3" value="1in10">
            </div>
            
            <hr class="light my-4">
            
            <h3 class="text-white">Who is more likely to be bullied online?</h3>
            <div class="text-white col-lg-3 mx-auto text-center">
              Boys <input type="radio"id="q4a" name="q4" value="boys">
            </div>
            <div class="text-white col-lg-3 mx-auto text-center">
              Girls <input type="radio" id="q4b" name="q4" value="girls">
            </div>
            
            <hr class="light my-4">
            
            <h3 class="text-white">How many adults say they have been bullied online?</h3>
            <div class="text-white col-lg-3 mx-auto text-center">
              4 in 10 <input type="radio"id="q5a" name="q5" value="4in10">
            </div>
            <div class="text-white col-lg-3 mx-auto text-center">
              3 in 10 <input type="radio" id="q5b" name="q5" value="3in10">
            </div>
            <div class="text-white col-lg-3 mx-auto text-center">
              7 in 10 <input type="radio" id="q5c" name="q5" value="7in10">
              </div>
            <div class="text-white col-lg-3 mx-auto text-center">
              1 in 10 <input type="radio"  id="q5d" name="q5" value="1in10">
            </div>
            
            <hr class="light my-4">
            
            <h3 class="text-white">What platform sees the most cyber bullying?</h3>
            <div class="text-white col-lg-3 mx-auto text-center">
              Twitter <input type="radio"id="q6a" name="q6" value="twitter">
            </div>
            <div class="text-white col-lg-3 mx-auto text-center">
              Instagram <input type="radio" id="q6b" name="q6" value="instagram">
            </div>
            <div class="text-white col-lg-3 mx-auto text-center">
              Facebook <input type="radio" id="q6c" name="q6" value="facebook">
              </div>
            <div class="text-white col-lg-3 mx-auto text-center">
              YouTube <input type="radio"  id="q6d" name="q6" value="youtube">
            </div>
            
            <hr class="light my-4">
            
            <h3 class="text-white">What is the most common action taken by victims of cyber bullying?</h3>
            <div class="text-white col-lg-3 mx-auto text-center">
              No Action <input type="radio"id="q1a" name="q1" value="none">
            </div>
            <div class="text-white col-lg-3 mx-auto text-center">
              Report Them <input type="radio" id="q1b" name="q1" value="report">
            </div>
            <div class="text-white col-lg-3 mx-auto text-center">
              Call the Authorities <input type="radio" id="q1c" name="q1" value="call">
              </div>
            <div class="text-white col-lg-3 mx-auto text-center">
              Unfriend Them <input type="radio"  id="q1d" name="q1" value="unfriend">
            </div>
            
            <input class="btn btn-light btn-xl js-scroll-trigger" id="queSubmit" type="submit" value="Submit">
          </form>
        </div>
      </div>
    </div>
  </div>

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
