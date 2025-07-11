<?php get_header(); ?>

<main id="site-content" role="main">

  <!-- Breadcrumb Section Start -->
  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb">
            <a href="<?php echo home_url(); ?>">Home</a> / <?php echo get_the_title(); ?>
          </span>
          <h3><?php echo get_the_title(); ?></h3>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb Section End -->

  <?php
  while (have_posts()) : the_post();
    the_content();
  endwhile;
  ?>
</main>

<?php get_footer(); ?>
