<!DOCTYPE html>
<!--Page substantially adapted from: https://www.npmjs.com/package/startbootstrap-creative
    Front end basic html template
    Accessed December 2017-->
<?php
  session_start();
  include("visualisation.php");
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
  
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var month1 = Number("<?php echo $_SESSION['month1']; ?>");
        var month2 = Number("<?php echo $_SESSION['month2']; ?>");
        var month3 = Number("<?php echo $_SESSION['month3']; ?>");

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Past Month Encountered Cyber-Bullying'],
          ['No', month1],
          ['Cant Recall', month2],
          ['Yes', month3]
        ]);

        var options = {
          title: 'Have our users seen what they believe was Cyber-Bullying in the past month'
        };

        var chart = new google.visualization.PieChart(document.getElementById('monthPie'));

        chart.draw(data, options);
      }
      
      google.charts.setOnLoadCallback(drawChart2);

      function drawChart2() {
        var prev1 = Number("<?php echo $_SESSION['prevelant1']; ?>");
        var prev2 = Number("<?php echo $_SESSION['prevelant2']; ?>");
        var prev3 = Number("<?php echo $_SESSION['prevelant3']; ?>");
        var prev4 = Number("<?php echo $_SESSION['prevelant4']; ?>");

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Where our users believe Cyber-Bullying is most prevelant'],
          ['Social Media', prev1],
          ['Gaming', prev2],
          ['SMS/Email', prev3],
          ['Other', prev4]
        ]);

        var options = {
          title: 'Where our users believe Cyber-Bullying is most prevelant'
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('prevBar'));

        chart.draw(data, options);
      }
      
      google.charts.setOnLoadCallback(drawChart3);

      function drawChart3() {
        var res1 = Number("<?php echo $_SESSION['resource1']; ?>");
        var res2 = Number("<?php echo $_SESSION['resource2']; ?>");

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Do our users believe more needs to be done to tackle Cyber-Bullying?'],
          ['No', res1],
          ['Yes', res2]
        ]);

        var options = {
          title: 'Do our users believe more needs to be done to tackle Cyber-Bullying?'
        };

        var chart = new google.visualization.PieChart(document.getElementById('resPie'));

        chart.draw(data, options);
      }
    </script>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="nav-item" style="max-width:50%;" href="#page-top"><img id="NavLogo" style="float:left;"src="img/CyBlyLogo.png"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" style="width:250%;"id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#signInPlace">
            <?php
              if($_SESSION['mail'] != null){
                echo "Welcome " . $_SESSION['mail'] . "";  
              }
              else{
                echo "Sign In/Register";
              }
            ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#tool">Download Tool</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#questionnaire">Questionnaire</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#challengeD">30 Sec Challenge</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#data">Data Visualisation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact & Advice</a>
          </li>
          <?php
              if($_SESSION['mail'] != null){
                echo '<li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#" onclick="confirmBeforeLogout();" >Sign out</a>
                      </li>';  
              }
            ?>
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
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#tool">Find Out More</a>
        </div>
      </div>
    </div>
  </header>

  <section class="bg-primary" id="signInPlace">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <?php  
            if($_SESSION['mail'] == null){
              echo '<h2 class="section-heading text-white">Get Started</h2>
                    <hr class="light my-4">
                    <p class="text-faded mb-4">Sign in to access the full features of CyBly.</p>
                    <a class="btn btn-light btn-xl js-scroll-trigger" id="signInBtnPlace" >Sign In/Register</a>';
            }
            else{
              include 'contentref.php';
            }
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-primary" id="signInDetail">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mx-auto text-center">
          <h2 class="section-heading text-white">Sign In</h2>
          <hr class="light my-4">
          <form id="signInForm" action='login.php' method='get'>
            <input type="text" placeholder="Username/Email" class="form-control" id="usernameEmail" name='emailuser'><br>
            <input type="password" placeholder="Password" class="form-control" id="password" name="password"><br>
            <input class="btn btn-light btn-xl js-scroll-trigger" id="signInBtnPlace" type="submit" value="Sign In">
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
            <div style="margin: 0 auto; width:55%;" class="g-recaptcha" data-sitekey="6LcKVlcUAAAAAJ7Vnl7PQr_FtYjUUnT3c_IhDPTU"></div><br>
            <input class="btn btn-light btn-xl js-scroll-trigger" id="registerBtnPlace" type="submit" value="Register">
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-dark text-white" id="tool">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading text-white">Text Analysation Tool</h2>
          <hr class="light my-4">
          <p class="text-faded mb-4">Download this tool to analyse any text for the likelihood of cyber bullying. A measurement is given based on the presence of offensive material and if it is aimed at an individual or group.</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" id="textAnalBtn" href="#signInPlace">Sign In/Register to Access</a>
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
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#signInPlace">Sign In/Register to Access</a>
        </div>
      </div>
    </div>
  </section>
  
  <section class="bg-dark text-white" id="challengeD">
    <div class="container">
      <div class="row">
         <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading text-white">Take the 30 second challenge!</h2>
          <hr class="light my-4">
          <p class="text-faded mb-4">Learn about cyber bullying and answer questions to show your knowledge.</p>
          <a class="btn btn-dark btn-xl js-scroll-trigger" href="#signInPlace" >Sign In/Register to Access</a>
        </div>
      </div>
    </div>
  </section>

  <section class="bg" id="data">
          <h2 class="section-heading text-black mx-auto text-center">Our Data - Visualised</h2>
          <hr class="dark my-4">
          <div class="row">
            <div class="col-lg-4 mx-auto text-center">
                <div id="monthPie" style="max-width=100%;"></div>
            </div>
            <div class="col-lg-4 mx-auto text-center">
                <div id="prevBar" style="max-width=100%;"></div>
            </div>
            <div class="col-lg-4 mx-auto text-center">
                <div id="resPie" style="max-width=100%;"></div>
            </div>
          </div>
        </section>

  <section class="bg-primary" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading">Get advice and stay in touch!</h2>
          <hr class="light my-4">
          <p class="mb-5">If you need and advice or help, click the link below. Feel free to send any queries to our email.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center">
          
          <i class="fa fa-mouse-pointer fa-3x mb-3 sr-contact"></i>
          <p><a style="color: black;" target="_blank" href="http://www.sticksandstones.ie/bullying/cyber-bullying/">Get Advice and Help</a></p>
         
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
          <p>
            <a style="color: black;" href="mailto:your-email@your-domain.com">demo@CyBly.com</a>
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
