<?php get_header(); ?>
<body style="background-color: #575757;">
  <div class="site-billboard-container topdiv">
    <nav class="navbar navbar-fixed-top navbar-expand-lg">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="nav-brand" href="https://upwebb.co">UpWebb</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <?php wp_nav_menu(array('theme_location'=>'secondary', 'container'=>'ul', 'menu_class'=>'nav navbar-nav navbar-right')); ?>
        </div>
      </div>
    </nav>
    <div class="billboard-tc" id="top">
      <div class="row-fluid">
        <div class="col-lg-12 col-sm-12 billboard-contact-tc">
          <p class="tc-textarea-title">UpWebb Alexa Skills - Terms & Conditions</p>
          <ol class="tc-text">
            <li><p>This agreement is between you and UpWebb LLC (UpWebb). It governs your use of the UpWebb Skill on an Alexa enabled device, Amazon Echo (the ‘Skill’).</p></li>
            <li><p>By using the Skill, you agree to the following terms and conditions. These should be read in conjunction with the UpWebb Privacy Policy.</p></li>
            <li><p>In order to use the Skill you will need to download the Skill via a smartphone application (‘App’). UpWebb accepts no liability for any damage to your or any other persons computer or device relating to or resulting from using the Skill or downloading the Skill App.</p></li>
            <li><p>UpWebb shall not be responsible for any costs associated with operating the Skill including the purchase and use of an Alexa-enabled device/Amazon Echo or the internet connection.</p></li>
            <li><p>The Skill allows you to ask an Alexa enabled device questions. Any questions and commands given via Alexa will be treated as authorised by you. Any response Alexa provides will be given as authorised by you to do so.</p></li>
            <li><p>Please also refer to the separate terms and conditions of the Alexa enabled device, Amazon Echo. When asking Alexa for information, the Amazon Alexa will be retrieving this information for you and you agree to Amazon performing this.</p></li>
            <li><p>Amazon may record your interactions with the Skill or with Alexa. Please refer again to the terms and conditions of the Alexa enabled device, Amazon Echo.</p></li>
            <li><p>All information communicated via the Alexa enabled device will be displayed within the companion App for future reference.</p></li>
            <li><p>UpWebb accepts no responsibility for any damage, loss, liabilities, injury or disappointment incurred or suffered by you as a result of using the Skill, including as a result of us providing inaccurate, untimely, incomplete or erroneous information.</p></li>
            <li><p>UpWebb shall not be liable for any failure to comply with its obligations where the failure is caused by something outside its reasonable control.</p></li>
            <li><p>UpWebb reserves the right to modify or discontinue the Skill at any time without prior notice.</p></li>
            <li><p>Should you have any questions about the Skill please contact UpWebb at <a href="mailto:upwebb.co@gmail.com">upwebb.co@gmail.com</a></p></li>
          </ol>
          <p class="contact-return"><a href="#top">Return to Top</a></p>
        </div>
      </div>
    </div> <!--Billboard-->
  </div>
  <?php get_footer(); ?>
