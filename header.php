<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title><?php bloginfo('name'); ?> <?php if (is_front_page()) { bloginfo('description'); } ?><?php wp_title(); ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fontawesome.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/templatemo-villa-agency.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
  <div class="preloader-inner">
    <span class="dot"></span>
    <div class="dots">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</div>
<!-- ***** Preloader End ***** -->

<div class="sub-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8">
        <ul class="info">
          <li><i class="fa fa-envelope"></i> <?php echo esc_html(get_theme_mod('avenstone_email')); ?></li>
          <li><i class="fa fa-map"></i> <?php echo esc_html(get_theme_mod('avenstone_address')); ?></li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-4">
        <ul class="social-links">
          <li><a href="<?php echo esc_url(get_theme_mod('avenstone_facebook_link')); ?>" target="_blank"><i class="fab fa-facebook"></i></a></li>
          <li><a href="<?php echo esc_url(get_theme_mod('avenstone_twitter_link')); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
          <li><a href="<?php echo esc_url(get_theme_mod('avenstone_linkedin_link')); ?>" target="_blank"><i class="fab fa-linkedin"></i></a></li>
          <li><a href="<?php echo esc_url(get_theme_mod('avenstone_instagram_link')); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
  <div class="container">
    <div class="row">
      <div class="col-4">
        <nav class="main-nav">
          <a href="<?php echo get_site_url(); ?>" class="logo">
            <h1>Avenstone</h1>
          </a>
        </nav>
      </div>   
      <div class="col-8">
        <nav class="main-nav">
          <?php wp_nav_menu(array(
            'theme_location' => 'primary-menu',
            'menu_class' => 'nav'
          )); ?>
          <a class='menu-trigger'>
            <span>Menu</span>
          </a>
        </nav>
      </div>
    </div>
  </div>
</header>
