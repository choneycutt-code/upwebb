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
          <a class="nav-brand" title="Home Page" href="https://upwebb.co">UpWebb</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <?php wp_nav_menu(array('theme_location'=>'secondary', 'container'=>'ul', 'menu_class'=>'nav navbar-nav navbar-right')); ?>
        </div>
      </div>
    </nav>
    <div class="billboard-blog" id="top">
      <div class="row-fluid">
        <div class="col-lg-12 col-sm-12 billboard-title">
          <h1 class="upwebb-title-blog-1" id="title-1">UPWEBB'S <span class="upwebb-title-1-alt">BLOG</span>.</h1>
          <br>
          <p class="upwebb-title-3" id="title-3">Your go to blog for everything about your business in the digital world.</p>
        </div>
      </div>
      <div class="row-fluid">
        <div class="col-sm-0 col-lg-4"></div>
        <div class="billboard-btn col-sm-12 col-lg-4">
          <a title="About Section" href="#post-area" class="btn-1" id="btn-1">VIEW POSTS</a>
          <!-- <button class="btn-1" id="btn-1" onclick="window.location.href='#about'">Discover</button> -->
        </div>
        <div class="col-sm-0 col-lg-4"></div>
      </div>
    </div> <!--Billboard-->
  </div>
    <div class="sub-container-2 col-lg-12 col-xs-12" id="post-area">
      <div class="posts_area col-xs-12">

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
          <div class="post-read-more">
            <a href="<?php echo get_permalink(); ?>">Read More</a>
          </div>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>

      <!-- this is all posts here -->

      </div>
    </div> <!-- info-container-->
    <!-- Posts Area -->
<?php get_footer(); ?>
