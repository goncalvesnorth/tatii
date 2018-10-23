<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/html5shiv.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/respond.min.js"></script>
<![endif]-->       
<?php zee_favicon();?>
<?php wp_head(); ?>
</head><!--/head-->

<body <?php body_class() ?> class="bg-default">
  <?php if(zee_option('zee_theme_layout')=='boxed'){ ?>
    <div id="boxed">
  <?php } ?>


  
  <!-- ******************* The Navbar Area ******************* -->
  <div class="wrapper-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent text-dark">

    
      <div class="container" >
   
              <?php logo();?>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        

        <!-- The WordPress Menu goes here -->
        <?php wp_nav_menu(
          array(
            'theme_location'  => 'primary',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'navbarNavDropdown',
            'menu_class'      => 'navbar-nav ml-auto',
            'fallback_cb'     => '',
            'menu_id'         => 'main-menu',
            'depth'           => 2,
            'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
          )
        ); ?>
        <div class="social-top">
          <ul class="list-inline">
            <li class="list-inline-item"><span><a href="#" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/ico/instagram-icon.png" alt=""></a></span></li>
            <li class="list-inline-item"><span><a href="#" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/ico/twitter-icon.png" alt=""></span></a></li>
            <li class="list-inline-item"><span><a href="#" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/images/ico/youtube-icon.png" alt=""></span></a></li>
          </ul>
        </div>
      <?php if ( 'container' == $container ) : ?>
      </div><!-- .container -->
      <?php endif; ?>

    </nav><!-- .site-navigation -->
  </div><!-- #wrapper-navbar end -->

  <?php get_template_part( 'sub', 'title' ); ?>

  <?php if( ! is_page() ) { ?>

  <section id="main">
    <div class="container tatii">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-6">
          <img src="<?php bloginfo('template_url') ?>/assets/images/banner-tatii.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-7 offset-lg-1 col-md-8 col-6">
          <div class="relativa" style="position: relative;">
            <div class="tatii-mark"></div>
            <div class="about align-self-center">
              <h2>
              HEY! I AM Tatii Pansera, A publicist, traveler & yogi.
              </h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <p>
                <a href="#" class="button">Ver posts</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div id="primary" class="content-area">
            <?php } ?>

