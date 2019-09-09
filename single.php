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
    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
    <div class="billboard-single" id="top" style="background-image: url('<?php echo $thumb['0'];?>');">
      <div class="row-fluid">
        <div class="col-lg-12 col-sm-12 billboard-title">
          <h1 class="upwebb-title-1" id="title-1" style="text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;"><?php the_title(); ?></h1>
        </div>
      </div>
    </div> <!--Billboard-->
  </div>
    <div class="sub-container-2 col-lg-12 col-xs-12" id="post-area">
      <div class="posts_area col-xs-12">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <div class="col-md-1"></div>
            <div class="col-md-10 col-xs-12">
            <div class="postcontent_list home-blog-post-content" itemprop="articleBody" data-type-cleanup="true">
              <?php the_content(); ?>
            </div>
          </div>
          <div class="col-md-1"></div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
    <!-- Posts Area -->
<?php get_footer(); ?>
