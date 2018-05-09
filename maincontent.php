<!DOCTYPE html>
<!--Page substantially adapted from: https://www.npmjs.com/package/startbootstrap-creative
    Front end basic html template
    Accessed December 2017-->
<?php
  //start or resume session
  session_start();
  //if not signed in, send back to index.
  if($_SESSION['mail'] == null){
    echo "<script>window.open('index.php','_self')</script>";
  }
  //run visualisation file to retrieve up to date visual data
  include("visualisation.php");
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CyBly</title>

  <!--Bootstrap CSS-->
  <link href="v/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!--Custom fonts used-->
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href="v/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!--CSS-->
  <link href="css/creative.css" rel="stylesheet">
  <link href="v/magnific-popup/magnific-popup.css" rel="stylesheet">
  
  <!--JS-->
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
      <a class="nav-item" style="max-width:50%;" href="index.php"><img id="NavLogo" style="float:left;"src="img/CyBlyLogo.png"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" style="width:250%;" d="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#tool">Download Tool</a>
          </li>
          <?php 
          if($_SESSION['questaken'] == '0'){
            echo '<li class="nav-item">';
            echo '<a class="nav-link js-scroll-trigger" href="#questionnaire">Questionnaire</a>';
            echo '</li>';
          }
          ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#challengeD">30 Sec Challenge</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#data">Data Visualisation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact & Advice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#" onclick="confirmBeforeLogout();" >Sign out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <section class="bg-dark text-white text-center" id="welcome">
    <h1><?php echo "Welcome " . $_SESSION['mail'] . "";?></h1>
  </section>

  <section class="bg-dark text-white" id="tool">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mx-auto text-center">
          <h2 class="section-heading text-white">Text Analysation Tool Instructions</h2>
          <hr class="light my-4">
          <p class="text-faded mb-4">1. Select download now (PC Only)</p>
          <p class="text-faded mb-4">2. Run the .exe file</p>
          <p class="text-faded mb-4">3. Click 'Select' and choose a .txt file that has text you wish to analyse</p>
          <p class="text-faded mb-4">4. Select 'Analyse' and wait for completion. Results will be displayed in the grid on-screen</p>
        </div>
        <div class="col-lg-4 mx-auto text-center">
          <h2 class="section-heading text-white">Text Analysation Tool</h2>
          <hr class="light my-4">
          <p class="text-faded mb-4">Download this tool to analyse any text for the likelihood of cyber bullying. A indication is given based on the presence of offensive material and if it is aimed at an individual or group. (PC Only)</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="infinite-waters-98014.herokuapp.com/analyser/TextTool.zip">Download Now</a>
        </div>
      </div>
    </div>
  </section>
  
  <section class="bg-primary text-white" id="challengeD">
    <div class="container">
      <div class="row">
         <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading text-white">Take the 30 second challenge!</h2>
          <hr class="light my-4">
          <p class="text-faded mb-4">
            <?php
              if($_SESSION['mark'] == null){
                echo 'Learn about cyber bullying and answer questions to show your knowledge.';
               
              }
              else{
                echo 'You scored: ';
                echo $_SESSION['mark'];
                echo '/7! Click start to take the quiz again.';
              }
            ?></p>
          <a><button class="btn btn-dark btn-xl js-scroll-trigger" id="challengeBtn" onClick="disableBtn();" >Start</button></a>
        </div>
      </div>
    </div>
  </section>
  
 
  <script>
    window.onload = function hideChal() {
      document.getElementById("challenge").style.display = "none";
      document.getElementById("challengeQ").style.display = "none";
      document.getElementById("visualQ").style.display = "none";
    }
  </script>
  <div class="bg-dark" id="challenge">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <br/>
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
          <h2 class="section-heading text-white">Now answer the following:</h2>
          <hr class="light my-4">
          <form id="factsForm" action='quiz.php' method='post'>
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
              No Action <input type="radio"id="q7a" name="q7" value="none">
            </div>
            <div class="text-white col-lg-3 mx-auto text-center">
              Report Them <input type="radio" id="q7b" name="q7" value="report">
            </div>
            <div class="text-white col-lg-3 mx-auto text-center">
              Call the Authorities <input type="radio" id="q7c" name="q7" value="call">
              </div>
            <div class="text-white col-lg-3 mx-auto text-center">
              Unfriend Them <input type="radio"  id="q7d" name="q7" value="unfriend">
            </div>
            
            <input class="btn btn-light btn-xl js-scroll-trigger" id="queSubmit" type="submit" value="Submit">
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <?php
    if($_SESSION['questaken'] == '0'){
      include 'quescontent.php';
    }else{
    }
    ?>
      
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

  <!-- Bootstrap JS -->
  <script src="v/jquery/jquery.js"></script>
  <script src="v/bootstrap/js/bootstrap.bundle.js"></script>

  <!-- JS Plugin -->
  <script src="v/jquery-easing/jquery.easing.min.js"></script>
  <script src="v/scrollreveal/scrollreveal.min.js"></script>
  <script src="v/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom js/jquery scripts-->
  <script src="js/creative.js"></script>
  <script src="js/cybly.js"></script>

</body>

</html>
