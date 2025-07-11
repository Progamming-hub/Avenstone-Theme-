<footer class="bg-dark text-light pt-5 pb-3">
  <div class="container">
    <div class="row">
    
      <!-- Column 1: Logo Text -->
      <div class="col-md-3">
        <h5 class="text-light"><?php echo get_theme_mod('avenstone_footer_logo_text', 'Avenstone'); ?></h5>
      </div>

      <!-- Column 2: Menu -->
      <div class="col-md-3">
        <h5 class="text-light">Menu</h5>
        <?php
          wp_nav_menu(array(
            'theme_location' => 'primary-menu',
            'menu_class'     => 'footer-menu list-unstyled',
            'container'      => false,
          ));
        ?>
      </div>

      <!-- Column 3: Address -->
      <div class="col-md-3">
  <h5 class="text-light">Address</h5>
  <p class="footer-address">
    <?php echo get_theme_mod('avenstone_footer_address', '123 Street, City, Country'); ?>
  </p>
</div>


      <!-- Column 4: Social Icons -->
      <div class="col-md-3">
        <h5 class="text-light">Follow Us</h5>
        <ul class="social-icons list-inline">
          <?php foreach (['facebook', 'twitter', 'instagram', 'linkedin'] as $social): ?>
            <?php $url = get_theme_mod("avenstone_footer_{$social}", '#'); ?>
            <?php if ($url): ?>
              <li class="list-inline-item">
                <a href="<?php echo esc_url($url); ?>" target="_blank" class="text-light">
                  <i class="fab fa-<?php echo esc_attr($social); ?>"></i>
                </a>
              </li>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>
      </div>

    </div>
  </div>

  <!-- Copyright -->
  <div class="container text-center mt-3">
    <p class="mb-0">Copyright © <?php echo date('Y'); ?> Avenstone Theme. All rights reserved.
      Design & Developed by: <a rel="nofollow" href="#" class="text-light" target="_blank">Talha Ghaffar</a>
    </p>
  </div>
</footer>

<!-- Scripts -->
<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/isotope.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl-carousel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/counter.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>

<?php wp_footer(); ?> <!-- ✅ This line is required for Elementor and plugins to work properly -->

</body>
</html>
