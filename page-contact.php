<?php get_header(); ?>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">
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
    <div class="billboard-contact" id="top">
      <div class="row-fluid">
        <div class="col-lg-12 col-sm-12 billboard-contact-textarea">
          <p class="contact-textarea-title">Hello there!</p>
          <p class="contact-textarea-text">Your request was successfully submitted! We will be in touch with you shortly!</p>
          <p class="contact-return"><a href="https://upwebb.co">Return</a></p>
        </div>
      </div>
    </div> <!--Billboard-->
  </div>
<?php get_footer(); ?>
