<?php get_header(); ?>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">
  <div class="site-billboard-container topdiv">
    <nav class="navbar navbar-fixed-top navbar-expand-lg" id="myScrollspy">
      <div class="container-fluid" id="nav-fade">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="nav-brand" title="Home Page" href="#top">UpWebb</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <?php wp_nav_menu(array('theme_location'=>'primary', 'container'=>'ul', 'menu_class'=>'nav navbar-nav navbar-right')); ?>
        </div>
      </div>
    </nav>
    <div class="billboard" id="top">
      <div class="row-fluid">
        <div class="col-lg-12 col-sm-12 billboard-title" id="startchange">
          <h1 class="upwebb-title-1" id="title-1">YOU HAVE A <span class="upwebb-title-1-alt">VISION</span>.</h1>
          <p class="upwebb-title-2" id="title-2">WE HAVE A WAY TO GET YOU THERE.</p>
          <br>
          <p class="upwebb-title-3" id="title-3">Our approach to web development is unique. See how we help companies just like yours.</p>
        </div>
      </div>
      <div class="row-fluid">
        <div class="col-sm-0 col-lg-4"></div>
        <div class="billboard-btn col-sm-12 col-lg-4">
          <a title="About Section" href="#about" class="btn-1" id="btn-1">WHAT WE DO</a>
          <!-- <button class="btn-1" id="btn-1" onclick="window.location.href='#about'">Discover</button> -->
        </div>
        <div class="col-sm-0 col-lg-4"></div>
      </div>
    </div> <!--Billboard-->
  </div>
    <div class="sub-container-1 col-lg-12" id="about">
      <div class="col-lg-4 col-sm-12">
        <img class="about-image animation" src="<?php echo get_template_directory_uri()?>/images/visuals.png" alt="simplistic scenery."/>
        <h2 class="about-title">STUNNING VISUALS</h2>
        <p class="about-text">Captivate clients with an attractive new look. Most users leave a website after just 5 seconds. With our engaging layout and intuitive user design you will be sure to increase traffic to your site.</p>
      </div>
      <div class="col-lg-4 col-sm-12">
        <img class="about-image animation" src="<?php echo get_template_directory_uri()?>/images/phone.png" alt="silhouette of iPhone."/>
        <h2 class="about-title">MOBILE READY</h2>
        <p class="about-text"> Roughly 56% of all web traffic is on mobile. In today's world your business needs to be mobile ready. Our websites are all developed with a responsive layout that works well on any device.</p>
      </div>
      <div class="col-lg-4 col-sm-12">
        <img class="about-image animation" src="<?php echo get_template_directory_uri()?>/images/clock.png" alt="alarm clock."/>
        <h2 class="about-title">PUNCTUALITY</h2>
        <p class="about-text">We understand how important it is to get your website live as fast as possible. We pride ourselves on delivering projects quickly while also keeping our clients updated throughout the process.</p>
      </div>
    </div> <!--Sup-container-1-->
    <div class="sub-container-2 col-lg-12 col-sm-12" id="services">
      <p class="sub-container-2-title">We&apos;ve got what you need</p>
      <hr class="underline">
      <div class="col-md-3 col-sm-6 service-tab">
        <img class="service-icon" src="<?php echo get_template_directory_uri()?>/images/pencil-icon.png" alt="pencil."/>
        <p class="service-title">CREATIVE DESIGN</p>
        <p class="service-text">Stand out from the templates other websites use and get a personalized website fit for your business</p>
      </div>
      <div class="col-md-3 col-sm-6 service-tab">
        <img class="service-icon" src="<?php echo get_template_directory_uri()?>/images/network.png" alt="globe."/>
        <p class="service-title">SEARCH ENGINE OPTIMIZATION</p>
        <p class="service-text">With SEO your site is easily and organically found by search engines such as Google, Bing and Yahoo, which will enable your site to rank higher.</p>
      </div>
      <div class="col-md-3 col-sm-6 service-tab">
        <img class="service-icon" src="<?php echo get_template_directory_uri()?>/images/responsive.png" alt="computer monitor, tablet, and phone stacked infront of eachother."/>
        <p class="service-title">RESPONSIVE DESIGN</p>
        <p class="service-text">Responsive websites are a key part to the success of your business. We live in a digital world, where the importance of quick easy access to a mobile optimized website is a necessity.</p>
      </div>
      <div class="col-md-3 col-sm-6 service-tab">
        <img class="service-icon" src="<?php echo get_template_directory_uri()?>/images/social.png" alt="share symbol inside circle."/>
        <p class="service-title">SOCIAL MEDIA INTEGRATION</p>
        <p class="service-text">By integrating social media, we make sure your business has a constant tone across all platforms. Your customers will also be able to interact with your business in more ways than before.</p>
      </div>
      <div class="col-md-3 col-sm-6 service-tab">
        <img class="service-icon" src="<?php echo get_template_directory_uri()?>/images/maintenance.png" alt="gear with a wrench inside."/>
        <p class="service-title">SUPPORT & MAINTENANCE</p>
        <p class="service-text">Technology is constantly changing and the internet is no different. Any support & maintenance needed will be addressed immediately. We will also preemptively respond to any potential problems.</p>
      </div>
      <div class="col-md-3 col-sm-6 service-tab">
        <img class="service-icon" src="<?php echo get_template_directory_uri()?>/images/ux.png" alt="hand clicking."/>
        <p class="service-title">USER EXPERIENCE</p>
        <p class="service-text">Customers don't stay on sites they don't like. By optimizing your site for user experience you are more likely to convert leads and sales. Your customers will love your site and will be more likely to return.</p>
      </div>
      <div class="col-md-3 col-sm-6 service-tab">
        <img class="service-icon" src="<?php echo get_template_directory_uri()?>/images/security.png" alt="deadbolt lock."/>
        <p class="service-title">Security</p>
        <p class="service-text">Our holistic approach to security relies on network, access, and data protection. We build up comprehensive security strategies in compliance with leading industry security standards.</p>
      </div>
      <div class="col-md-3 col-sm-6 service-tab">
        <img class="service-icon" src="<?php echo get_template_directory_uri()?>/images/graph.png" alt="line graph pointing up."/>
        <p class="service-title">Analytics</p>
        <p class="service-text">Track and report website traffic. Measure your advertising ROI as well as track your Flash, video, and social networking sites and applications.</p>
      </div>
    </div> <!-- info-container-->
    <div class="sub-container-3">
      <div class="portfolio-header col-md-12 col-sm-12" id="portfolio">
        <p class="portfolio-title">Clients</p>
        <p class="portfolio-text">We deliver globally, providing result driven project management and seamless communication. From big businesses to small, we have your solution.</p>
      </div>
      <div class="portfolio-img-container col-lg-4 col-md-12">
        <a class="image-link" title="Client's Landscaping Website" target="_blank" href="http://extramiletreeservice.com/">
        <img src="<?php echo get_template_directory_uri()?>/images/extramiletreeservice.png" class="portfolio-img" alt="Extra Mile Tree Service Website.">
        </a>
      </div>
      <div class="portfolio-img-container col-lg-4 col-md-12">
        <a title="Client's Resturant Website" href="Restaurant-master/index.html">
        <img src="<?php echo get_template_directory_uri()?>/images/50-shades.png" class="portfolio-img" alt="50 Shades of Green Logo."/>
        </a>
      </div>
      <div class="portfolio-img-container col-lg-4 col-md-12">
        <a title="Client's Construction Website" href="red-oak/index.html">
        <img src="<?php echo get_template_directory_uri()?>/images/redoak.png" class="portfolio-img" alt="Red Oak Construction Logo."/>
        </a>
      </div>
    </div>
    <div class="sub-container-5 col-xs-12">
      <div class="col-sm-2"></div>
      <div class="col-md-8 col-xs-12">
        <p class="sub-container-5-title" id="hosting">Hosting & Maintenance Packages</p>
        <div class="hosting-1">
          <p class="hosting-sectiong-title">Basic</p>
          <div class="hosting-price">
            <p class="hosting-section-pricing">Starting at</p>
            <p class="hosting-section-price">$45</p>
            <p class="hosting-section-pricing">monthly</p>
          </div>
          <ul>
            <li class="hosting-li">99.9% Uptime</li>
            <li class="hosting-li">Weekly Backups</li>
            <li class="hosting-li">Maintain server security</li>
          </ul>
        </div>
        <div class="hosting-2">
          <p class="hosting-sectiong-title">Standard</p>
          <div class="hosting-price">
            <p class="hosting-section-pricing">Starting at</p>
            <p class="hosting-section-price">$125</p>
            <p class="hosting-section-pricing">monthly</p>
          </div>
          <ul>
            <li class="hosting-li">99.9% Uptime</li>
            <li class="hosting-li">Weekly Backups</li>
            <li class="hosting-li">Maintain server security</li>
            <li class="hosting-li">Server Updates</li>
            <li class="hosting-li">Up to 2 hours of website maintenance</li>
          </ul>
        </div>
        <div class="hosting-3">
          <p class="hosting-sectiong-title">Advanced</p>
          <div class="hosting-price">
            <p class="hosting-section-pricing">Starting at</p>
            <p class="hosting-section-price">$225</p>
            <p class="hosting-section-pricing">monthly</p>
          </div>
          <ul>
            <li class="hosting-li">99.9% Uptime</li>
            <li class="hosting-li">Dedicated server</li>
            <li class="hosting-li">Daily Backups</li>
            <li class="hosting-li">Maintain server security</li>
            <li class="hosting-li">Server Updates</li>
            <li class="hosting-li">Up to 5 hours of website maintenance</li>
          </ul>
        </div>
      </div>
      <div class="col-sm-2"></div>
    </div>
    <!-- Posts Area -->
    <div class="sub-container-6 col-lg-12 col-sm-12" id="blog">
      <div class="posts_area col-xs-12">
        <p class="sub-container-6-title">Our Blog</p>
        <?php
         // the query
         $the_query = new WP_Query( array(
            'posts_per_page' => 3,
         ));
      ?>

      <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <div class="col-md-4 col-xs-12">
            <div class="thumbnail">
              <?php the_post_thumbnail(); ?>
            </div>
            <h4 class="title home-blog-post-title">
                <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
            </h4>
          <div class="postcontent_list home-blog-post-content" itemprop="articleBody" data-type-cleanup="true">
            <?php the_excerpt(); ?>
          </div>
          <div class="main-read-more">
            <a href="<?php echo get_permalink(); ?>">Read More</a>
          </div>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>

      <!-- this is all posts here -->

      </div>
    </div> <!-- info-container-->
    <div class="sub-container-4 col-xs-12">
        <div class="col-md-12">
        <div class="inner contact" id="contact">
                <p class="social_heading">CONTACT US</p>
                <p id="errorMessage"></p>
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->
                    <form name="contactForm" id="contact-us" method="post" action="" onsubmit="return validateForm()">
                        <!-- Left Inputs -->
                        <div class="col-md-6 ">
                            <!-- Name -->
                            <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                            <!-- Email -->
                            <input type="text" name="email" id="email" required="required" class="form" placeholder="Email" />
                            <!-- Subject -->
                            <input type="text" name="subject" id="subject" class="form" placeholder="Subject" />
                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <div class="col-md-6">
                            <!-- Message -->
                            <textarea name="message" id="message" class="form textarea" required="required" placeholder="Message"></textarea>
                        </div><!-- End Right Inputs -->
                        <!-- Bottom Submit -->
                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <input type="hidden" name="action" value="contact_form">
                            <button type="submit" id="submit" name="submit" class="form-btn">Send Message</button>
                        </div><!-- End Bottom Submit -->
                        <!-- Clear -->
                        <div class="clear"></div>
                    </form>
                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->
        </div>
    </div>
<?php
    if(isset($_POST["submit"])){

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $myEmail = "upwebb.co@gmail.com";
    // Checking For Blank Fields..
      if($_POST["name"]==""||$_POST["email"]==""||$_POST["message"]==""){
        echo "an error has occured";
        exit();
      } else {
      // Check if the "Sender's Email" input field is filled out
      $email = test_input($_POST['email']);
      $name = test_input($_POST['name']);
      $subject = test_input($_POST['subject']);
      // Sanitize E-mail Address


       $email = filter_var($email, FILTER_SANITIZE_EMAIL);
      // // Validate E-mail Address
       $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$email){
          echo "Invalid Sender's Email";
          exit();
        } else {
          $subject = "UpWebb Contact Form: " . $_POST['subject'];
          $message = $_POST['message'];
          $headers = 'From: '. $myEmail . "\r\n" .
          'Reply-To: ' . $email . "\r\n";

          $mail = wp_mail($myEmail, $subject, strip_tags($message), $headers);

            if ($mail) {
              $url = 'http://upwebb.co/contact/';
              wp_redirect($url); /* Redirect browser */
              exit();
            } else {
              echo "Error sending: " . $mail->ErrorInfo;
              exit();
            }
          }
        }
      }
    ?>
<?php get_footer(); ?>
