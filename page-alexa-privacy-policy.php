<?php get_header(); ?>
<body style="background-color: #575757;">
  <div class="site-billboard-container topdiv">
    <div class="billboard-tc" id="top">
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
      <div class="row-fluid">
        <div class="col-lg-12 col-sm-12 billboard-contact-tc">
          <p class="tc-textarea-title">UpWebb Privacy Policy</p>
          <p class="tc-text">This privacy policy has been compiled to better serve those who are concerned with how their 'Personally Identifiable Information' (PII) is being used online. PII, as described in US privacy law and information security, is information that can be used on its own or with other information to identify, contact, or locate a single person, or to identify an individual in context. Please read our privacy policy carefully to get a clear understanding of how we collect, use, protect or otherwise handle your Personally Identifiable Information in accordance with our website.</p>
          <h3>Third-party disclosure</h3>
          <p class="tc-text">We do not sell, trade, or otherwise transfer to outside parties your Personally Identifiable Information unless we provide users with advance notice or ask your permission. This does not include website hosting partners and other parties who assist us in operating our website, conducting our business, or serving our users, so long as those parties agree to keep this information confidential. We may also release information when it's release is appropriate to comply with the law, enforce our site policies, or protect ours or others' rights, property or safety.</p>
          <h3>CAN SPAM Act</h3>
          <p class="tc-text">The CAN-SPAM Act is a law that sets the rules for commercial email, establishes requirements for commercial messages, gives recipients the right to have emails or text messages stopped from being sent to them, and spells out tough penalties for violations.</p>
          <h3>We collect your email address or mobile phone number in order to:</h3>
          <ul>
            <li><p class="tc-text">Send information, respond to inquiries, and/or other requests or questions</p></li>
            <li><p class="tc-text">Process orders and to send information and updates pertaining to orders.</p></li>
            <li><p class="tc-text">Send you additional information related to your product and/or service</p></li>
            <li><p class="tc-text">Market to our mailing list or continue to send emails or text messages to our clients after the original transaction has occurred.</p></li>
          </ul>
          <h3>To be in accordance with CAN SPAM, we agree to the following:</h3>
          <ul>
            <li><p class="tc-text">Not use false or misleading subjects or email addresses.</p></li>
            <li><p class="tc-text">Identify the message as an advertisement in some reasonable way.</p></li>
            <li><p class="tc-text">Monitor third-party email marketing services for compliance, if one is used.</p></li>
            <li><p class="tc-text">Honor opt-out/unsubscribe requests quickly.</p></li>
            <li><p class="tc-text">Allow users to unsubscribe by using the link at the bottom of each email.</p></li>
          </ul>
          <p class="tc-text">If at any time you would like to unsubscribe from receiving future emails or SMS Text messaging, you can follow the instructions at the bottom of each email and we will promptly remove you from ALL correspondence.</p>
          <h3>Contact Us</h3>
          <p class="tc-text">If there are any questions regarding this privacy policy, you may contact us at <a href="mailto:upwebb.co@gmail.com">upwebb.co@gmail.com</a></p>
          <p class="contact-return"><a href="#top">Return to Top</a></p>
        </div>
      </div>
    </div> <!--Billboard-->
  </div>
<?php get_footer(); ?>
