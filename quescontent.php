<?php
  echo '  <section class="bg-dark" id="questionnaire">';
  echo '    <div class="container">';
  echo '      <div class="row">';
  echo '        <div class="col-lg-8 mx-auto text-center">';
  echo '          <h2 class="section-heading text-white">Take the Questionnaire</h2>';
  echo '          <hr class="light my-4">';
  echo '          <p class="text-faded mb-4">Contribute your experience and help the community understand patterns in Cyber Bullying</p>';
  echo '          <a class="btn btn-light btn-xl js-scroll-trigger" id="visualBtn">Start</a>';
  echo '        </div>';
  echo '      </div>';
  echo '    </div>';
  echo '  </section>';
  
  echo '  <div class="bg-primary" id="visualQ">';
  echo '    <div class="container">';
  echo '      <div class="row">';
  echo '        <div class="col-lg-10 mx-auto text-center">';
  echo '          <br/>';
  echo '          <h2 class="section-heading text-white">Please answer the following:</h2>';
  
  echo '          <hr class="light my-4">';
  
  echo '          <form id="visualForm" action="visualform.php" method="post">';
  echo '          <h3 class="text-white">Have you seen what you believe was Cyber-Bullying in the past month?</h3>';
  echo '          <div class="text-white col-lg-3 mx-auto text-center">';
  echo '            No <input type="radio" id="q1a1" name="q1" value="1">';
  echo '          </div>';
  echo '          <div class="text-white col-lg-3 mx-auto text-center">';
  echo '            Cant Recall <input type="radio" id="q1b1" name="q1" value="2">';
  echo '          </div>';
  echo '          <div class="text-white col-lg-3 mx-auto text-center">';
  echo '            Yes <input type="radio" id="q1c1" name="q1" value="3">';
  echo '          </div>';
  
  echo '          <hr class="light my-4">';
  
  echo '          <h3 class="text-white">Where do you believe Cyber-Bullying is most prevelant?</h3>';
  echo '          <div class="text-white col-lg-3 mx-auto text-center">';
  echo '            Social Media <input type="radio" id="q2a1" name="q2" value="1">';
  echo '          </div>';
  echo '          <div class="text-white col-lg-3 mx-auto text-center">';
  echo '            Gaming <input type="radio" id="q2b1" name="q2" value="2">';
  echo '          </div>';
  echo '          <div class="text-white col-lg-3 mx-auto text-center">';
  echo '            SMS/Email <input type="radio" id="q2c1" name="q2" value="3">';
  echo '          </div>';
  echo '          <div class="text-white col-lg-3 mx-auto text-center">';
  echo '            Other <input type="radio" id="q2c1" name="q2" value="4">';
  echo '          </div>';
  
  echo '          <hr class="light my-4">';
  
  echo '          <h3 class="text-white">Should there be more done to combat Cyber-Bullying and penalise those at fault?</h3>';
  echo '          <div class="text-white col-lg-3 mx-auto text-center">';
  echo '            No <input type="radio" id="q3a1" name="q3" value="1">';
  echo '          </div>';
  echo '          <div class="text-white col-lg-3 mx-auto text-center">';
  echo '            Yes <input type="radio" id="q3b1" name="q3" value="2">';
  echo '          </div>';
  
  echo '          <hr class="light my-4">';
  
  echo '          <input class="btn btn-light btn-xl js-scroll-trigger" id="visSubmit" type="submit" value="Submit">';
  echo '        </form>';
  echo '      </div>';
  echo '    </div>';
  echo '  </div>';
  echo '</div>';
  ?>